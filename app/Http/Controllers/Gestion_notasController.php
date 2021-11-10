<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGestion_notasRequest;
use App\Http\Requests\UpdateGestion_notasRequest;
use App\Repositories\Gestion_notasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Gestion_notasController extends AppBaseController
{
    /** @var  Gestion_notasRepository */
    private $gestionNotasRepository;

    public function __construct(Gestion_notasRepository $gestionNotasRepo)
    {
        $this->gestionNotasRepository = $gestionNotasRepo;
    }

    /**
     * Display a listing of the Gestion_notas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gestionNotas = $this->gestionNotasRepository->all();

        return view('gestion_notas.index')
            ->with('gestionNotas', $gestionNotas);
    }

    /**
     * Show the form for creating a new Gestion_notas.
     *
     * @return Response
     */
    public function create()
    {
        return view('gestion_notas.create');
    }

    /**
     * Store a newly created Gestion_notas in storage.
     *
     * @param CreateGestion_notasRequest $request
     *
     * @return Response
     */
    public function store(CreateGestion_notasRequest $request)
    {
        $input = $request->all();

        $gestionNotas = $this->gestionNotasRepository->create($input);

        Flash::success('Gestion Notas saved successfully.');

        return redirect(route('gestionNotas.index'));
    }

    /**
     * Display the specified Gestion_notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gestionNotas = $this->gestionNotasRepository->find($id);

        if (empty($gestionNotas)) {
            Flash::error('Gestion Notas not found');

            return redirect(route('gestionNotas.index'));
        }

        return view('gestion_notas.show')->with('gestionNotas', $gestionNotas);
    }

    /**
     * Show the form for editing the specified Gestion_notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gestionNotas = $this->gestionNotasRepository->find($id);

        if (empty($gestionNotas)) {
            Flash::error('Gestion Notas not found');

            return redirect(route('gestionNotas.index'));
        }

        return view('gestion_notas.edit')->with('gestionNotas', $gestionNotas);
    }

    /**
     * Update the specified Gestion_notas in storage.
     *
     * @param int $id
     * @param UpdateGestion_notasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGestion_notasRequest $request)
    {
        $gestionNotas = $this->gestionNotasRepository->find($id);

        if (empty($gestionNotas)) {
            Flash::error('Gestion Notas not found');

            return redirect(route('gestionNotas.index'));
        }

        $gestionNotas = $this->gestionNotasRepository->update($request->all(), $id);

        Flash::success('Gestion Notas updated successfully.');

        return redirect(route('gestionNotas.index'));
    }

    /**
     * Remove the specified Gestion_notas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gestionNotas = $this->gestionNotasRepository->find($id);

        if (empty($gestionNotas)) {
            Flash::error('Gestion Notas not found');

            return redirect(route('gestionNotas.index'));
        }

        $this->gestionNotasRepository->delete($id);

        Flash::success('Gestion Notas deleted successfully.');

        return redirect(route('gestionNotas.index'));
    }
}
