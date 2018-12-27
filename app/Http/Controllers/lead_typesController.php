<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createlead_typesRequest;
use App\Http\Requests\Updatelead_typesRequest;
use App\Repositories\lead_typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class lead_typesController extends AppBaseController
{
    /** @var  lead_typesRepository */
    private $leadTypesRepository;

    public function __construct(lead_typesRepository $leadTypesRepo)
    {
        $this->leadTypesRepository = $leadTypesRepo;
    }

    /**
     * Display a listing of the lead_types.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->leadTypesRepository->pushCriteria(new RequestCriteria($request));
        $leadTypes = $this->leadTypesRepository->all();

        return view('admin.lead_types.index')
            ->with('leadTypes', $leadTypes);
    }

    /**
     * Show the form for creating a new lead_types.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.lead_types.create');
    }

    /**
     * Store a newly created lead_types in storage.
     *
     * @param Createlead_typesRequest $request
     *
     * @return Response
     */
    public function store(Createlead_typesRequest $request)
    {
        $input = $request->all();

        $leadTypes = $this->leadTypesRepository->create($input);

        Flash::success('Lead Types saved successfully.');

        return redirect(route('admin.leadTypes.index'));
    }

    /**
     * Display the specified lead_types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leadTypes = $this->leadTypesRepository->findWithoutFail($id);

        if (empty($leadTypes)) {
            Flash::error('Lead Types not found');

            return redirect(route('admin.leadTypes.index'));
        }

        return view('admin.lead_types.show')->with('leadTypes', $leadTypes);
    }

    /**
     * Show the form for editing the specified lead_types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leadTypes = $this->leadTypesRepository->findWithoutFail($id);

        if (empty($leadTypes)) {
            Flash::error('Lead Types not found');

            return redirect(route('admin.leadTypes.index'));
        }

        return view('admin.lead_types.edit')->with('leadTypes', $leadTypes);
    }

    /**
     * Update the specified lead_types in storage.
     *
     * @param  int              $id
     * @param Updatelead_typesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatelead_typesRequest $request)
    {
        $leadTypes = $this->leadTypesRepository->findWithoutFail($id);

        if (empty($leadTypes)) {
            Flash::error('Lead Types not found');

            return redirect(route('admin.leadTypes.index'));
        }

        $leadTypes = $this->leadTypesRepository->update($request->all(), $id);

        Flash::success('Lead Types updated successfully.');

        return redirect(route('admin.leadTypes.index'));
    }

    /**
     * Remove the specified lead_types from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leadTypes = $this->leadTypesRepository->findWithoutFail($id);

        if (empty($leadTypes)) {
            Flash::error('Lead Types not found');

            return redirect(route('admin.leadTypes.index'));
        }

        $this->leadTypesRepository->delete($id);

        Flash::success('Lead Types deleted successfully.');

        return redirect(route('admin.leadTypes.index'));
    }
}
