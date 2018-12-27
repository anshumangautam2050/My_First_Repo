<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmail_templatesRequest;
use App\Http\Requests\Updatemail_templatesRequest;
use App\Repositories\mail_templatesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class mail_templatesController extends AppBaseController
{
    /** @var  mail_templatesRepository */
    private $mailTemplatesRepository;

    public function __construct(mail_templatesRepository $mailTemplatesRepo)
    {
        $this->mailTemplatesRepository = $mailTemplatesRepo;
    }

    /**
     * Display a listing of the mail_templates.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mailTemplatesRepository->pushCriteria(new RequestCriteria($request));
        $mailTemplates = $this->mailTemplatesRepository->all();

        return view('admin.mail_templates.index')
            ->with('mailTemplates', $mailTemplates);
    }

    /**
     * Show the form for creating a new mail_templates.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.mail_templates.create');
    }

    /**
     * Store a newly created mail_templates in storage.
     *
     * @param Createmail_templatesRequest $request
     *
     * @return Response
     */
    public function store(Createmail_templatesRequest $request)
    {
        $input = $request->all();

        $mailTemplates = $this->mailTemplatesRepository->create($input);

        Flash::success('Mail Templates saved successfully.');

        return redirect(route('admin.mailTemplates.index'));
    }

    /**
     * Display the specified mail_templates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('admin.mailTemplates.index'));
        }

        return view('admin.mail_templates.show')->with('mailTemplates', $mailTemplates);
    }

    /**
     * Show the form for editing the specified mail_templates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('admin.mailTemplates.index'));
        }

        return view('admin.mail_templates.edit')->with('mailTemplates', $mailTemplates);
    }

    /**
     * Update the specified mail_templates in storage.
     *
     * @param  int              $id
     * @param Updatemail_templatesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemail_templatesRequest $request)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('admin.mailTemplates.index'));
        }

        $mailTemplates = $this->mailTemplatesRepository->update($request->all(), $id);

        Flash::success('Mail Templates updated successfully.');

        return redirect(route('admin.mailTemplates.index'));
    }

    /**
     * Remove the specified mail_templates from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('admin.mailTemplates.index'));
        }

        $this->mailTemplatesRepository->delete($id);

        Flash::success('Mail Templates deleted successfully.');

        return redirect(route('admin.mailTemplates.index'));
    }
}
