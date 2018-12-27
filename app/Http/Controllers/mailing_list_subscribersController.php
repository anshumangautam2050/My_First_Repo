<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmailing_list_subscribersRequest;
use App\Http\Requests\Updatemailing_list_subscribersRequest;
use App\Repositories\mailing_list_subscribersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Mail;
use App\Mail\MailingListSubscriber;
use Session;

class mailing_list_subscribersController extends AppBaseController
{
    /** @var  mailing_list_subscribersRepository */
    private $mailingListSubscribersRepository;

    public function __construct(mailing_list_subscribersRepository $mailingListSubscribersRepo)
    {
        $this->mailingListSubscribersRepository = $mailingListSubscribersRepo;
    }

    /**
     * Display a listing of the mailing_list_subscribers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mailingListSubscribersRepository->pushCriteria(new RequestCriteria($request));
        $mailingListSubscribers = $this->mailingListSubscribersRepository->all();

        return view('admin.mailing_list_subscribers.index')
            ->with('mailingListSubscribers', $mailingListSubscribers);
    }

    /**
     * Show the form for creating a new mailing_list_subscribers.
     *
     * @return Response
     */
    public function create()
    {
        // Create random uid
        $uid = str_random(10);

        return view('admin.mailing_list_subscribers.create', ['uid' => $uid]);
    }

    /**
     * Store a newly created mailing_list_subscribers in storage.
     *
     * @param Createmailing_list_subscribersRequest $request
     *
     * @return Response
     */
    public function store(Createmailing_list_subscribersRequest $request)
    {
        $input = $request->all();

        $mailingListSubscribers = $this->mailingListSubscribersRepository->create($input)->id;

        // Add Last inserted mailing list subscribers

        $input['id'] = $mailingListSubscribers;
                
        $senderData = [
                        'to' => $input['email']     
                      ];

        /*Mail::send('emails.mailing_list_subscriber', $input, function($message) use ($senderData) {
            $message->to($senderData['to']);
            $message->subject('Notification Mailing Subscriber.');
        });*/

        if($request->ajax()){

            $message = "<p class='alert alert-success' style='text-align: justify;'>We have sent an email to you ".$request->first_name.".
             You will need to confirm your susbscription by clicking on the link in the email. Please check your SPAM folder if you don't see the message in your inbox in the next 30 minutes. Feel free to contact us if you have any questions.
             </p>";

            return $message;
        
        }else{

            Flash::success('Mailing List Subscribers saved successfully.');

            return redirect(route('admin.mailingListSubscribers.index'));
        }
    }

    /**
     * Display the specified mailing_list_subscribers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailingListSubscribers = $this->mailingListSubscribersRepository->findWithoutFail($id);

        if (empty($mailingListSubscribers)) {
            Flash::error('Mailing List Subscribers not found');

            return redirect(route('admin.mailingListSubscribers.index'));
        }

        return view('admin.mailing_list_subscribers.show')->with('mailingListSubscribers', $mailingListSubscribers);
    }

    /**
     * Show the form for editing the specified mailing_list_subscribers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailingListSubscribers = $this->mailingListSubscribersRepository->findWithoutFail($id);

        if (empty($mailingListSubscribers)) {
            Flash::error('Mailing List Subscribers not found');

            return redirect(route('admin.mailingListSubscribers.index'));
        }

        return view('admin.mailing_list_subscribers.edit')->with('mailingListSubscribers', $mailingListSubscribers);
    }

    /**
     * Update the specified mailing_list_subscribers in storage.
     *
     * @param  int              $id
     * @param Updatemailing_list_subscribersRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemailing_list_subscribersRequest $request)
    {
        $mailingListSubscribers = $this->mailingListSubscribersRepository->findWithoutFail($id);

        if (empty($mailingListSubscribers)) {
            Flash::error('Mailing List Subscribers not found');

            return redirect(route('admin.mailingListSubscribers.index'));
        }

        $mailingListSubscribers = $this->mailingListSubscribersRepository->update($request->all(), $id);

        Flash::success('Mailing List Subscribers updated successfully.');

        return redirect(route('admin.mailingListSubscribers.index'));
    }

    /**
     * Remove the specified mailing_list_subscribers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailingListSubscribers = $this->mailingListSubscribersRepository->findWithoutFail($id);

        if (empty($mailingListSubscribers)) {
            Flash::error('Mailing List Subscribers not found');

            return redirect(route('admin.mailingListSubscribers.index'));
        }

        $this->mailingListSubscribersRepository->delete($id);

        Flash::success('Mailing List Subscribers deleted successfully.');

        return redirect(route('admin.mailingListSubscribers.index'));
    }
    /**
     * Update OPtIn Status for Mailing List Subscriber
     * 
     * @param $id 
     * 
     */

    public function optin($id){

        $mailingListSubscriber = $this->mailingListSubscribersRepository->findWithoutFail($id);
        
        if (empty($mailingListSubscriber)) {
            Flash::error('Mailing List Subscribers not updated');

            return redirect(route('admin.mailingListSubscribers.optstatus'));
        }

        // update data

        $updateData = [
                        'opt_in' => 1
                      ];

        $mailingListSubscriber = $this->mailingListSubscribersRepository->update($updateData, $id);

        // Flash::success('Mailing List Subscribers updated successfully.');
        Session::flash('message', "You are now subscribed.");

        return redirect(route('admin.mailingListSubscribers.optstatus'));

    }

    public function optstatus(){

        return view('website.subscriptionstatus');
    }
}
