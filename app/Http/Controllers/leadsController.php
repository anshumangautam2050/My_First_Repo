<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateleadsRequest;
use App\Http\Requests\UpdateleadsRequest;
use App\Repositories\leadsRepository;
use App\Repositories\lead_typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class leadsController extends AppBaseController
{
    /** @var  leadsRepository */
    private $leadsRepository;

    public function __construct(leadsRepository $leadsRepo, lead_typesRepository $lead_typesRepo)
    {
        $this->leadsRepository = $leadsRepo;
        $this->lead_types = $lead_typesRepo->pluck('type','id')->all();
    }

    /**
     * Display a listing of the leads.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->leadsRepository->pushCriteria(new RequestCriteria($request));
        $leads = $this->leadsRepository->all();

        return view('admin.leads.index')
            ->with('leads', $leads);
    }

    /**
     * Show the form for creating a new leads.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.leads.create')->with(['lead_types' => $this->lead_types]);
    }

    /**
     * Store a newly created leads in storage.
     *
     * @param CreateleadsRequest $request
     *
     * @return Response
     */
    public function store(CreateleadsRequest $request)
    {
        $input = $request->all();

        $leads = $this->leadsRepository->create($input);

        Flash::success('Leads saved successfully.');

        return redirect(route('admin.leads.index'));
    }

    /**
     * Display the specified leads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('admin.leads.index'));
        }

        return view('admin.leads.show')->with('leads', $leads);
    }

    /**
     * Show the form for editing the specified leads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('admin.leads.index'));
        }

        return view('admin.leads.edit')->with(['leads' => $leads, 'lead_types' => $this->lead_types]);
    }

    /**
     * Update the specified leads in storage.
     *
     * @param  int              $id
     * @param UpdateleadsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateleadsRequest $request)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('admin.leads.index'));
        }

        $leads = $this->leadsRepository->update($request->all(), $id);

        Flash::success('Leads updated successfully.');

        return redirect(route('admin.leads.index'));
    }

    /**
     * Remove the specified leads from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('admin.leads.index'));
        }

        $this->leadsRepository->delete($id);

        Flash::success('Leads deleted successfully.');

        return redirect(route('admin.leads.index'));
    }
}
