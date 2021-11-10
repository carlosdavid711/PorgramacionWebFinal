<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportesRequest;
use App\Http\Requests\UpdateReportesRequest;
use App\Repositories\ReportesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReportesController extends AppBaseController
{
    /** @var  ReportesRepository */
    private $reportesRepository;

    public function __construct(ReportesRepository $reportesRepo)
    {
        $this->reportesRepository = $reportesRepo;
    }

    /**
     * Display a listing of the Reportes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reportes = $this->reportesRepository->all();

        return view('reportes.index')
            ->with('reportes', $reportes);
    }

    /**
     * Show the form for creating a new Reportes.
     *
     * @return Response
     */
    public function create()
    {
        return view('reportes.create');
    }

    /**
     * Store a newly created Reportes in storage.
     *
     * @param CreateReportesRequest $request
     *
     * @return Response
     */
    public function store(CreateReportesRequest $request)
    {
        $input = $request->all();

        $reportes = $this->reportesRepository->create($input);

        Flash::success('Reportes saved successfully.');

        return redirect(route('reportes.index'));
    }

    /**
     * Display the specified Reportes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportes = $this->reportesRepository->find($id);

        if (empty($reportes)) {
            Flash::error('Reportes not found');

            return redirect(route('reportes.index'));
        }

        return view('reportes.show')->with('reportes', $reportes);
    }

    /**
     * Show the form for editing the specified Reportes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportes = $this->reportesRepository->find($id);

        if (empty($reportes)) {
            Flash::error('Reportes not found');

            return redirect(route('reportes.index'));
        }

        return view('reportes.edit')->with('reportes', $reportes);
    }

    /**
     * Update the specified Reportes in storage.
     *
     * @param int $id
     * @param UpdateReportesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportesRequest $request)
    {
        $reportes = $this->reportesRepository->find($id);

        if (empty($reportes)) {
            Flash::error('Reportes not found');

            return redirect(route('reportes.index'));
        }

        $reportes = $this->reportesRepository->update($request->all(), $id);

        Flash::success('Reportes updated successfully.');

        return redirect(route('reportes.index'));
    }

    /**
     * Remove the specified Reportes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportes = $this->reportesRepository->find($id);

        if (empty($reportes)) {
            Flash::error('Reportes not found');

            return redirect(route('reportes.index'));
        }

        $this->reportesRepository->delete($id);

        Flash::success('Reportes deleted successfully.');

        return redirect(route('reportes.index'));
    }
}
