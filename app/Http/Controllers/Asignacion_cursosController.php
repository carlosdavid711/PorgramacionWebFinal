<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsignacion_cursosRequest;
use App\Http\Requests\UpdateAsignacion_cursosRequest;
use App\Repositories\Asignacion_cursosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Asignacion_cursosController extends AppBaseController
{
    /** @var  Asignacion_cursosRepository */
    private $asignacionCursosRepository;

    public function __construct(Asignacion_cursosRepository $asignacionCursosRepo)
    {
        $this->asignacionCursosRepository = $asignacionCursosRepo;
    }

    /**
     * Display a listing of the Asignacion_cursos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $asignacionCursos = $this->asignacionCursosRepository->all();

        return view('asignacion_cursos.index')
            ->with('asignacionCursos', $asignacionCursos);
    }

    /**
     * Show the form for creating a new Asignacion_cursos.
     *
     * @return Response
     */
    public function create()
    {
        return view('asignacion_cursos.create');
    }

    /**
     * Store a newly created Asignacion_cursos in storage.
     *
     * @param CreateAsignacion_cursosRequest $request
     *
     * @return Response
     */
    public function store(CreateAsignacion_cursosRequest $request)
    {
        $input = $request->all();

        $asignacionCursos = $this->asignacionCursosRepository->create($input);

        Flash::success('Asignacion Cursos saved successfully.');

        return redirect(route('asignacionCursos.index'));
    }

    /**
     * Display the specified Asignacion_cursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asignacionCursos = $this->asignacionCursosRepository->find($id);

        if (empty($asignacionCursos)) {
            Flash::error('Asignacion Cursos not found');

            return redirect(route('asignacionCursos.index'));
        }

        return view('asignacion_cursos.show')->with('asignacionCursos', $asignacionCursos);
    }

    /**
     * Show the form for editing the specified Asignacion_cursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asignacionCursos = $this->asignacionCursosRepository->find($id);

        if (empty($asignacionCursos)) {
            Flash::error('Asignacion Cursos not found');

            return redirect(route('asignacionCursos.index'));
        }

        return view('asignacion_cursos.edit')->with('asignacionCursos', $asignacionCursos);
    }

    /**
     * Update the specified Asignacion_cursos in storage.
     *
     * @param int $id
     * @param UpdateAsignacion_cursosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsignacion_cursosRequest $request)
    {
        $asignacionCursos = $this->asignacionCursosRepository->find($id);

        if (empty($asignacionCursos)) {
            Flash::error('Asignacion Cursos not found');

            return redirect(route('asignacionCursos.index'));
        }

        $asignacionCursos = $this->asignacionCursosRepository->update($request->all(), $id);

        Flash::success('Asignacion Cursos updated successfully.');

        return redirect(route('asignacionCursos.index'));
    }

    /**
     * Remove the specified Asignacion_cursos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asignacionCursos = $this->asignacionCursosRepository->find($id);

        if (empty($asignacionCursos)) {
            Flash::error('Asignacion Cursos not found');

            return redirect(route('asignacionCursos.index'));
        }

        $this->asignacionCursosRepository->delete($id);

        Flash::success('Asignacion Cursos deleted successfully.');

        return redirect(route('asignacionCursos.index'));
    }
}
