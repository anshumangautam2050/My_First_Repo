<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateleadsRequest;
use App\Repositories\leadsRepository;
use Flash;
use Image;
use Storage;
use App\Models\lead_pictures;
use App\Models\users;
use Mail;
use App\Mail\LeadCreated;
use Exception;
use Log;

class LeadController extends Controller
{
    public function __construct(leadsRepository $leadsRepo)
    {
        $this->leadsRepository = $leadsRepo;
    }

    public function page()
    {
        return view('website.leadform');
    }

    public function store(CreateleadsRequest $request)
    {
        $request['is_company'] = $request->seller==1 ? false : true;
        $request['is_person'] = $request['is_company'] ? false : true;

        $leads = $this->leadsRepository->create($request->all());

        if($request->has('pictures'))
        {
            $this->uploadPictures($leads,$request->file('pictures'));
        }

        $this->sendMail($leads);

        Flash::success('Leads saved successfully.');
        return redirect('/kavel-aanmelden-succes');
    }

    private function uploadPictures($leads,$pictures)
    {
        $folderPath = 'lead-pictures';
        
        foreach($pictures as $key => $picture)
        {
            $fileName   = time().$key.'.'.$picture->getClientOriginalExtension();

            $pic = Image::make($picture->getRealPath());
            
            // if width > 800 so resize
            if($pic->width()>800)
            {
                $pic->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();                 
                });
            }
            $pic->stream();

            // store picture to disk
            Storage::disk('public')->put($folderPath.'/'.$fileName,$pic);

            // create array to store in database
            $lead_pictures[$key]['lead_id'] = $leads->id;
            $lead_pictures[$key]['url'] = config('filesystems.disks.public.url').'/'.$folderPath.'/'.$fileName;
            $now = \Carbon\Carbon::now();
            $lead_pictures[$key]['created_at'] = $now;
            $lead_pictures[$key]['updated_at'] = $now;
        }
        lead_pictures::insert($lead_pictures);
    }

    private function sendMail($leads)
    {
        try
        {
            $admins = users::whereIsAdmin(true)->whereIsSystemMail(true)->pluck('email');
            if(count($admins)>0)
            {
                Mail::to($admins)->queue(new LeadCreated($leads));
            }
            else
            {
                Log::notice(trans('log.lead-no-system-mail'));
            }
        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
