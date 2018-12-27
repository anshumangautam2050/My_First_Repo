<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createlead_picturesRequest;
use App\Http\Requests\Updatelead_picturesRequest;
use App\Repositories\lead_picturesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class lead_picturesController extends AppBaseController
{
    /** @var  lead_picturesRepository */
    private $leadPicturesRepository;

    public function __construct(lead_picturesRepository $leadPicturesRepo)
    {
        $this->leadPicturesRepository = $leadPicturesRepo;
    }

    /**
     * Display a listing of the lead_pictures.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->leadPicturesRepository->pushCriteria(new RequestCriteria($request));
        $leadPictures = $this->leadPicturesRepository->all();

        return view('admin.lead_pictures.index')
            ->with('leadPictures', $leadPictures);
    }

    /**
     * Show the form for creating a new lead_pictures.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.lead_pictures.create');
    }

    /**
     * Store a newly created lead_pictures in storage.
     *
     * @param Createlead_picturesRequest $request
     *
     * @return Response
     */
    public function store(Createlead_picturesRequest $request)
    {
        $input = $request->all();

        $leadPictures = $this->leadPicturesRepository->create($input);

        Flash::success('Lead Pictures saved successfully.');

        return redirect(route('admin.leadPictures.index'));
    }

    /**
     * Display the specified lead_pictures.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leadPictures = $this->leadPicturesRepository->findWithoutFail($id);

        if (empty($leadPictures)) {
            Flash::error('Lead Pictures not found');

            return redirect(route('admin.leadPictures.index'));
        }

        return view('admin.lead_pictures.show')->with('leadPictures', $leadPictures);
    }

    /**
     * Show the form for editing the specified lead_pictures.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leadPictures = $this->leadPicturesRepository->findWithoutFail($id);

        if (empty($leadPictures)) {
            Flash::error('Lead Pictures not found');

            return redirect(route('admin.leadPictures.index'));
        }

        return view('admin.lead_pictures.edit')->with('leadPictures', $leadPictures);
    }

    /**
     * Update the specified lead_pictures in storage.
     *
     * @param  int              $id
     * @param Updatelead_picturesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatelead_picturesRequest $request)
    {
        $leadPictures = $this->leadPicturesRepository->findWithoutFail($id);

        if (empty($leadPictures)) {
            Flash::error('Lead Pictures not found');

            return redirect(route('admin.leadPictures.index'));
        }

        $leadPictures = $this->leadPicturesRepository->update($request->all(), $id);

        Flash::success('Lead Pictures updated successfully.');

        return redirect(route('admin.leadPictures.index'));
    }

    /**
     * Remove the specified lead_pictures from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leadPictures = $this->leadPicturesRepository->findWithoutFail($id);

        if (empty($leadPictures)) {
            Flash::error('Lead Pictures not found');

            return redirect(route('admin.leadPictures.index'));
        }

        $this->leadPicturesRepository->delete($id);

        Flash::success('Lead Pictures deleted successfully.');

        return redirect(route('admin.leadPictures.index'));
    }
}
