<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmailing_listsRequest;
use App\Http\Requests\Updatemailing_listsRequest;
use App\Repositories\mailing_listsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mailing_listsController extends AppBaseController
{
    /** @var  mailing_listsRepository */
    private $mailingListsRepository;

    public function __construct(mailing_listsRepository $mailingListsRepo)
    {
        $this->mailingListsRepository = $mailingListsRepo;
    }

    /**
     * Display a listing of the mailing_lists.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mailingListsRepository->pushCriteria(new RequestCriteria($request));
        $mailingLists = $this->mailingListsRepository->all();

        return view('admin.mailing_lists.index')
            ->with('mailingLists', $mailingLists);
    }

    /**
     * Show the form for creating a new mailing_lists.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.mailing_lists.create');
    }

    /**
     * Store a newly created mailing_lists in storage.
     *
     * @param Createmailing_listsRequest $request
     *
     * @return Response
     */
    public function store(Createmailing_listsRequest $request)
    {
        $input = $request->all();

        $mailingLists = $this->mailingListsRepository->create($input);

        Flash::success('Mailing Lists saved successfully.');

        return redirect(route('admin.mailingLists.index'));
    }

    /**
     * Display the specified mailing_lists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailingLists = $this->mailingListsRepository->findWithoutFail($id);

        if (empty($mailingLists)) {
            Flash::error('Mailing Lists not found');

            return redirect(route('admin.mailingLists.index'));
        }

        return view('admin.mailing_lists.show')->with('mailingLists', $mailingLists);
    }

    /**
     * Show the form for editing the specified mailing_lists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailingLists = $this->mailingListsRepository->findWithoutFail($id);

        if (empty($mailingLists)) {
            Flash::error('Mailing Lists not found');

            return redirect(route('admin.mailingLists.index'));
        }

        return view('admin.mailing_lists.edit')->with('mailingLists', $mailingLists);
    }

    /**
     * Update the specified mailing_lists in storage.
     *
     * @param  int              $id
     * @param Updatemailing_listsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemailing_listsRequest $request)
    {
        $mailingLists = $this->mailingListsRepository->findWithoutFail($id);

        if (empty($mailingLists)) {
            Flash::error('Mailing Lists not found');

            return redirect(route('admin.mailingLists.index'));
        }

        $mailingLists = $this->mailingListsRepository->update($request->all(), $id);

        Flash::success('Mailing Lists updated successfully.');

        return redirect(route('admin.mailingLists.index'));
    }

    /**
     * Remove the specified mailing_lists from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailingLists = $this->mailingListsRepository->findWithoutFail($id);

        if (empty($mailingLists)) {
            Flash::error('Mailing Lists not found');

            return redirect(route('admin.mailingLists.index'));
        }

        $this->mailingListsRepository->delete($id);

        Flash::success('Mailing Lists deleted successfully.');

        return redirect(route('admin.mailingLists.index'));
    }
}
