<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOqibatRequest;
use App\Http\Requests\UpdateOqibatRequest;
use App\Repositories\OqibatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OqibatController extends AppBaseController
{
    /** @var  OqibatRepository */
    private $oqibatRepository;

    public function __construct(OqibatRepository $oqibatRepo)
    {
        $this->oqibatRepository = $oqibatRepo;
    }

    /**
     * Display a listing of the Oqibat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oqibats = $this->oqibatRepository->all();

        return view('oqibats.index')
            ->with('oqibats', $oqibats);
    }

    /**
     * Show the form for creating a new Oqibat.
     *
     * @return Response
     */
    public function create()
    {
        return view('oqibats.create');
    }

    /**
     * Store a newly created Oqibat in storage.
     *
     * @param CreateOqibatRequest $request
     *
     * @return Response
     */
    public function store(CreateOqibatRequest $request)
    {
        $input = $request->all();

        $oqibat = $this->oqibatRepository->create($input);

        Flash::success('Oqibat saved successfully.');

        return redirect(route('oqibats.index'));
    }

    /**
     * Display the specified Oqibat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oqibat = $this->oqibatRepository->find($id);

        if (empty($oqibat)) {
            Flash::error('Oqibat not found');

            return redirect(route('oqibats.index'));
        }

        return view('oqibats.show')->with('oqibat', $oqibat);
    }

    /**
     * Show the form for editing the specified Oqibat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oqibat = $this->oqibatRepository->find($id);

        if (empty($oqibat)) {
            Flash::error('Oqibat not found');

            return redirect(route('oqibats.index'));
        }

        return view('oqibats.edit')->with('oqibat', $oqibat);
    }

    /**
     * Update the specified Oqibat in storage.
     *
     * @param int $id
     * @param UpdateOqibatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOqibatRequest $request)
    {
        $oqibat = $this->oqibatRepository->find($id);

        if (empty($oqibat)) {
            Flash::error('Oqibat not found');

            return redirect(route('oqibats.index'));
        }

        $oqibat = $this->oqibatRepository->update($request->all(), $id);

        Flash::success('Oqibat updated successfully.');

        return redirect(route('oqibats.index'));
    }

    /**
     * Remove the specified Oqibat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oqibat = $this->oqibatRepository->find($id);

        if (empty($oqibat)) {
            Flash::error('Oqibat not found');

            return redirect(route('oqibats.index'));
        }

        $this->oqibatRepository->delete($id);

        Flash::success('Oqibat deleted successfully.');

        return redirect(route('oqibats.index'));
    }
}
