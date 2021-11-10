<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePadresRequest;
use App\Http\Requests\UpdatePadresRequest;
use App\Repositories\PadresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PadresController extends AppBaseController
{
    /** @var  PadresRepository */
    private $padresRepository;

    public function __construct(PadresRepository $padresRepo)
    {
        $this->padresRepository = $padresRepo;
    }

    /**
     * Display a listing of the Padres.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $padres = $this->padresRepository->all();

        return view('padres.index')
            ->with('padres', $padres);
    }

    /**
     * Show the form for creating a new Padres.
     *
     * @return Response
     */
    public function create()
    {
        return view('padres.create');
    }

    /**
     * Store a newly created Padres in storage.
     *
     * @param CreatePadresRequest $request
     *
     * @return Response
     */
    public function store(CreatePadresRequest $request)
    {
        $input = $request->all();

        $padres = $this->padresRepository->create($input);

        Flash::success('Padres saved successfully.');

        return redirect(route('padres.index'));
    }

    /**
     * Display the specified Padres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $padres = $this->padresRepository->find($id);

        if (empty($padres)) {
            Flash::error('Padres not found');

            return redirect(route('padres.index'));
        }

        return view('padres.show')->with('padres', $padres);
    }

    /**
     * Show the form for editing the specified Padres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $padres = $this->padresRepository->find($id);

        if (empty($padres)) {
            Flash::error('Padres not found');

            return redirect(route('padres.index'));
        }

        return view('padres.edit')->with('padres', $padres);
    }

    /**
     * Update the specified Padres in storage.
     *
     * @param int $id
     * @param UpdatePadresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePadresRequest $request)
    {
        $padres = $this->padresRepository->find($id);

        if (empty($padres)) {
            Flash::error('Padres not found');

            return redirect(route('padres.index'));
        }

        $padres = $this->padresRepository->update($request->all(), $id);

        Flash::success('Padres updated successfully.');

        return redirect(route('padres.index'));
    }

    /**
     * Remove the specified Padres from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $padres = $this->padresRepository->find($id);

        if (empty($padres)) {
            Flash::error('Padres not found');

            return redirect(route('padres.index'));
        }

        $this->padresRepository->delete($id);

        Flash::success('Padres deleted successfully.');

        return redirect(route('padres.index'));
    }
}
