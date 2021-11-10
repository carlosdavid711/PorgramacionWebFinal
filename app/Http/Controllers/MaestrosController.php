<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaestrosRequest;
use App\Http\Requests\UpdateMaestrosRequest;
use App\Repositories\MaestrosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MaestrosController extends AppBaseController
{
    /** @var  MaestrosRepository */
    private $maestrosRepository;

    public function __construct(MaestrosRepository $maestrosRepo)
    {
        $this->maestrosRepository = $maestrosRepo;
    }

    /**
     * Display a listing of the Maestros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $maestros = $this->maestrosRepository->all();

        return view('maestros.index')
            ->with('maestros', $maestros);
    }

    /**
     * Show the form for creating a new Maestros.
     *
     * @return Response
     */
    public function create()
    {
        return view('maestros.create');
    }

    /**
     * Store a newly created Maestros in storage.
     *
     * @param CreateMaestrosRequest $request
     *
     * @return Response
     */
    public function store(CreateMaestrosRequest $request)
    {
        $input = $request->all();

        $maestros = $this->maestrosRepository->create($input);

        Flash::success('Maestros saved successfully.');

        return redirect(route('maestros.index'));
    }

    /**
     * Display the specified Maestros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maestros = $this->maestrosRepository->find($id);

        if (empty($maestros)) {
            Flash::error('Maestros not found');

            return redirect(route('maestros.index'));
        }

        return view('maestros.show')->with('maestros', $maestros);
    }

    /**
     * Show the form for editing the specified Maestros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maestros = $this->maestrosRepository->find($id);

        if (empty($maestros)) {
            Flash::error('Maestros not found');

            return redirect(route('maestros.index'));
        }

        return view('maestros.edit')->with('maestros', $maestros);
    }

    /**
     * Update the specified Maestros in storage.
     *
     * @param int $id
     * @param UpdateMaestrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaestrosRequest $request)
    {
        $maestros = $this->maestrosRepository->find($id);

        if (empty($maestros)) {
            Flash::error('Maestros not found');

            return redirect(route('maestros.index'));
        }

        $maestros = $this->maestrosRepository->update($request->all(), $id);

        Flash::success('Maestros updated successfully.');

        return redirect(route('maestros.index'));
    }

    /**
     * Remove the specified Maestros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maestros = $this->maestrosRepository->find($id);

        if (empty($maestros)) {
            Flash::error('Maestros not found');

            return redirect(route('maestros.index'));
        }

        $this->maestrosRepository->delete($id);

        Flash::success('Maestros deleted successfully.');

        return redirect(route('maestros.index'));
    }
}
