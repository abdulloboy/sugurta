<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObyektRequest;
use App\Http\Requests\UpdateObyektRequest;
use App\Repositories\ObyektRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ObyektController extends AppBaseController
{
    /** @var  ObyektRepository */
    private $obyektRepository;

    public function __construct(ObyektRepository $obyektRepo)
    {
        $this->obyektRepository = $obyektRepo;
    }

    /**
     * Display a listing of the Obyekt.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $obyekts = $this->obyektRepository->all();

        return view('obyekts.index')
            ->with('obyekts', $obyekts);
    }

    /**
     * Show the form for creating a new Obyekt.
     *
     * @return Response
     */
    public function create()
    {
        return view('obyekts.create');
    }

    /**
     * Store a newly created Obyekt in storage.
     *
     * @param CreateObyektRequest $request
     *
     * @return Response
     */
    public function store(CreateObyektRequest $request)
    {
        $input = $request->all();

        $obyekt = $this->obyektRepository->create($input);

        Flash::success('Obyekt saved successfully.');

        return redirect(route('obyekts.index'));
    }

    /**
     * Display the specified Obyekt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obyekt = $this->obyektRepository->find($id);

        if (empty($obyekt)) {
            Flash::error('Obyekt not found');

            return redirect(route('obyekts.index'));
        }

        return view('obyekts.show')->with('obyekt', $obyekt);
    }

    /**
     * Show the form for editing the specified Obyekt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obyekt = $this->obyektRepository->find($id);

        if (empty($obyekt)) {
            Flash::error('Obyekt not found');

            return redirect(route('obyekts.index'));
        }

        return view('obyekts.edit')->with('obyekt', $obyekt);
    }

    /**
     * Update the specified Obyekt in storage.
     *
     * @param int $id
     * @param UpdateObyektRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObyektRequest $request)
    {
        $obyekt = $this->obyektRepository->find($id);

        if (empty($obyekt)) {
            Flash::error('Obyekt not found');

            return redirect(route('obyekts.index'));
        }

        $obyekt = $this->obyektRepository->update($request->all(), $id);

        Flash::success('Obyekt updated successfully.');

        return redirect(route('obyekts.index'));
    }

    /**
     * Remove the specified Obyekt from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obyekt = $this->obyektRepository->find($id);

        if (empty($obyekt)) {
            Flash::error('Obyekt not found');

            return redirect(route('obyekts.index'));
        }

        $this->obyektRepository->delete($id);

        Flash::success('Obyekt deleted successfully.');

        return redirect(route('obyekts.index'));
    }
}
