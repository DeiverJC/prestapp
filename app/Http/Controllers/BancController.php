<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBancRequest;
use App\Http\Requests\UpdateBancRequest;
use App\Repositories\BancRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BancController extends AppBaseController
{
    /** @var  BancRepository */
    private $bancRepository;

    public function __construct(BancRepository $bancRepo)
    {
        $this->bancRepository = $bancRepo;
    }

    /**
     * Display a listing of the Banc.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bancRepository->pushCriteria(new RequestCriteria($request));
        $bancs = $this->bancRepository->all();

        return view('bancs.index')
            ->with('bancs', $bancs);
    }

    /**
     * Show the form for creating a new Banc.
     *
     * @return Response
     */
    public function create()
    {
        return view('bancs.create');
    }

    /**
     * Store a newly created Banc in storage.
     *
     * @param CreateBancRequest $request
     *
     * @return Response
     */
    public function store(CreateBancRequest $request)
    {
        $input = $request->all();

        $banc = $this->bancRepository->create($input);

        Flash::success('Banc saved successfully.');

        return redirect(route('bancs.index'));
    }

    /**
     * Display the specified Banc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banc = $this->bancRepository->findWithoutFail($id);

        if (empty($banc)) {
            Flash::error('Banc not found');

            return redirect(route('bancs.index'));
        }

        return view('bancs.show')->with('banc', $banc);
    }

    /**
     * Show the form for editing the specified Banc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banc = $this->bancRepository->findWithoutFail($id);

        if (empty($banc)) {
            Flash::error('Banc not found');

            return redirect(route('bancs.index'));
        }

        return view('bancs.edit')->with('banc', $banc);
    }

    /**
     * Update the specified Banc in storage.
     *
     * @param  int              $id
     * @param UpdateBancRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBancRequest $request)
    {
        $banc = $this->bancRepository->findWithoutFail($id);

        if (empty($banc)) {
            Flash::error('Banc not found');

            return redirect(route('bancs.index'));
        }

        $banc = $this->bancRepository->update($request->all(), $id);

        Flash::success('Banc updated successfully.');

        return redirect(route('bancs.index'));
    }

    /**
     * Remove the specified Banc from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banc = $this->bancRepository->findWithoutFail($id);

        if (empty($banc)) {
            Flash::error('Banc not found');

            return redirect(route('bancs.index'));
        }

        $this->bancRepository->delete($id);

        Flash::success('Banc deleted successfully.');

        return redirect(route('bancs.index'));
    }
}
