<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoanDetailRequest;
use App\Http\Requests\UpdateLoanDetailRequest;
use App\Repositories\LoanDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LoanDetailController extends AppBaseController
{
    /** @var  LoanDetailRepository */
    private $loanDetailRepository;

    public function __construct(LoanDetailRepository $loanDetailRepo)
    {
        $this->loanDetailRepository = $loanDetailRepo;
    }

    /**
     * Display a listing of the LoanDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->loanDetailRepository->pushCriteria(new RequestCriteria($request));
        $loanDetails = $this->loanDetailRepository->all();

        return view('loan_details.index')
            ->with('loanDetails', $loanDetails);
    }

    /**
     * Show the form for creating a new LoanDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('loan_details.create');
    }

    /**
     * Store a newly created LoanDetail in storage.
     *
     * @param CreateLoanDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateLoanDetailRequest $request)
    {
        $input = $request->all();

        $loanDetail = $this->loanDetailRepository->create($input);

        Flash::success('Loan Detail saved successfully.');

        return redirect(route('loanDetails.index'));
    }

    /**
     * Display the specified LoanDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $loanDetail = $this->loanDetailRepository->findWithoutFail($id);

        if (empty($loanDetail)) {
            Flash::error('Loan Detail not found');

            return redirect(route('loanDetails.index'));
        }

        return view('loan_details.show')->with('loanDetail', $loanDetail);
    }

    /**
     * Show the form for editing the specified LoanDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $loanDetail = $this->loanDetailRepository->findWithoutFail($id);

        if (empty($loanDetail)) {
            Flash::error('Loan Detail not found');

            return redirect(route('loanDetails.index'));
        }

        return view('loan_details.edit')->with('loanDetail', $loanDetail);
    }

    /**
     * Update the specified LoanDetail in storage.
     *
     * @param  int              $id
     * @param UpdateLoanDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoanDetailRequest $request)
    {
        $loanDetail = $this->loanDetailRepository->findWithoutFail($id);

        if (empty($loanDetail)) {
            Flash::error('Loan Detail not found');

            return redirect(route('loanDetails.index'));
        }

        $loanDetail = $this->loanDetailRepository->update($request->all(), $id);

        Flash::success('Loan Detail updated successfully.');

        return redirect(route('loanDetails.index'));
    }

    /**
     * Remove the specified LoanDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $loanDetail = $this->loanDetailRepository->findWithoutFail($id);

        if (empty($loanDetail)) {
            Flash::error('Loan Detail not found');

            return redirect(route('loanDetails.index'));
        }

        $this->loanDetailRepository->delete($id);

        Flash::success('Loan Detail deleted successfully.');

        return redirect(route('loanDetails.index'));
    }
}
