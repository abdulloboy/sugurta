<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRiskRequest;
use App\Http\Requests\UpdateRiskRequest;
use App\Repositories\RiskRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RiskController extends AppBaseController
{
    /** @var  RiskRepository */
    private $riskRepository;

    public function __construct(RiskRepository $riskRepo)
    {
        $this->riskRepository = $riskRepo;
    }

    /**
     * Display a listing of the Risk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $risks = $this->riskRepository->all();

        return view('risks.index')
            ->with('risks', $risks);
    }

    /**
     * Show the form for creating a new Risk.
     *
     * @return Response
     */
    public function create()
    {
        return view('risks.create');
    }

    /**
     * Store a newly created Risk in storage.
     *
     * @param CreateRiskRequest $request
     *
     * @return Response
     */
    public function store(CreateRiskRequest $request)
    {
        $input = $request->all();

        $risk = $this->riskRepository->create($input);

        Flash::success('Risk saved successfully.');

        return redirect(route('risks.index'));
    }

    /**
     * Display the specified Risk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $risk = $this->riskRepository->find($id);

        if (empty($risk)) {
            Flash::error('Risk not found');

            return redirect(route('risks.index'));
        }

        return view('risks.show')->with('risk', $risk);
    }

    /**
     * Show the form for editing the specified Risk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $risk = $this->riskRepository->find($id);

        if (empty($risk)) {
            Flash::error('Risk not found');

            return redirect(route('risks.index'));
        }

        return view('risks.edit')->with('risk', $risk);
    }

    /**
     * Update the specified Risk in storage.
     *
     * @param int $id
     * @param UpdateRiskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRiskRequest $request)
    {
        $risk = $this->riskRepository->find($id);

        if (empty($risk)) {
            Flash::error('Risk not found');

            return redirect(route('risks.index'));
        }

        $risk = $this->riskRepository->update($request->all(), $id);

        Flash::success('Risk updated successfully.');

        return redirect(route('risks.index'));
    }

    /**
     * Remove the specified Risk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $risk = $this->riskRepository->find($id);

        if (empty($risk)) {
            Flash::error('Risk not found');

            return redirect(route('risks.index'));
        }

        $this->riskRepository->delete($id);

        Flash::success('Risk deleted successfully.');

        return redirect(route('risks.index'));
    }
}
