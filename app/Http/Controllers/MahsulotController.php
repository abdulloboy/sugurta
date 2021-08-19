<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMahsulotRequest;
use App\Http\Requests\UpdateMahsulotRequest;
use App\Repositories\MahsulotRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Obyekt;
use App\Models\Risk;
use App\Models\Oqibat;

class MahsulotController extends AppBaseController
{
    /** @var  MahsulotRepository */
    private $mahsulotRepository;

    public function __construct(MahsulotRepository $mahsulotRepo)
    {
        $this->mahsulotRepository = $mahsulotRepo;
    }

    /**
     * Display a listing of the Mahsulot.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mahsulots = $this->mahsulotRepository->all();

        return view('mahsulots.index')
            ->with('mahsulots', $mahsulots);
    }

    /**
     * Show the form for creating a new Mahsulot.
     *
     * @return Response
     */
    public function create()
    {
        $obyekts = Obyekt::all();

        return view('mahsulots.create')
            ->with('obyekts', $obyekts);
    }

    /**
     * Store a newly created Mahsulot in storage.
     *
     * @param CreateMahsulotRequest $request
     *
     * @return Response
     */
    public function store(CreateMahsulotRequest $request)
    {
        $input = $request->all();

        $mahsulot = $this->mahsulotRepository->create($input);

        Flash::success('Mahsulot saved successfully.');

        return redirect(route('mahsulots.index'));
    }

    /**
     * Display the specified Mahsulot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mahsulot = $this->mahsulotRepository->find($id);

        if (empty($mahsulot)) {
            Flash::error('Mahsulot not found');

            return redirect(route('mahsulots.index'));
        }

        return view('mahsulots.show')
            ->with('mahsulot', $mahsulot);
    }

    /**
     * Show the form for editing the specified Mahsulot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mahsulot = $this->mahsulotRepository->find($id);
        $obyekts = Obyekt::all();
        $risks = Risk::all();
        $oqibats = Oqibat::all();

        if (empty($mahsulot)) {
            Flash::error('Mahsulot not found');

            return redirect(route('mahsulots.index'));
        }

        return view('mahsulots.edit')
        ->compcats('mahsulot','obyekts'
            ,'risks','oqibats');
    }

    /**
     * Update the specified Mahsulot in storage.
     *
     * @param int $id
     * @param UpdateMahsulotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMahsulotRequest $request)
    {
        $mahsulot = $this->mahsulotRepository->find($id);

        if (empty($mahsulot)) {
            Flash::error('Mahsulot not found');

            return redirect(route('mahsulots.index'));
        }

        $mahsulot = $this->mahsulotRepository->update($request->all(), $id);

        Flash::success('Mahsulot updated successfully.');

        return redirect(route('mahsulots.index'));
    }

    /**
     * Remove the specified Mahsulot from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mahsulot = $this->mahsulotRepository->find($id);

        if (empty($mahsulot)) {
            Flash::error('Mahsulot not found');

            return redirect(route('mahsulots.index'));
        }

        $this->mahsulotRepository->delete($id);

        Flash::success('Mahsulot deleted successfully.');

        return redirect(route('mahsulots.index'));
    }
}
