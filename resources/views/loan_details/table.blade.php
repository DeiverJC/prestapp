<table class="table table-hover manage-u-table color-table inverse-table" id="loanDetails-table">
    <thead>
        <tr>
            <th>Fee</th>
        <th>Balance</th>
        <th>Loan Id</th>
        <th>Created At</th>
            <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($loanDetails as $loanDetail)
        <tr>
            <td>{!! $loanDetail->fee !!}</td>
            <td>{!! $loanDetail->balance !!}</td>
            <td>{!! $loanDetail->loan_id !!}</td>
            <td>{!! $loanDetail->created_at !!}</td>
            <td class="text-center">
                {!! Form::open(['route' => ['loanDetails.destroy', $loanDetail->id], 'method' => 'delete']) !!}
                    <a href="{!! route('loanDetails.show', [$loanDetail->id]) !!}" class='btn btn-info btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-info' data-toggle="tooltip" data-placement="top"
                        data-original-title="View client">
                        <i class="ti-eye"></i>
                    </a>
                    <a href="{!! route('loanDetails.edit', [$loanDetail->id]) !!}" class='btn btn-warning btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-warning' data-toggle="tooltip" data-placement="top"
                        data-original-title="Edit client">
                        <i class="ti-pencil-alt"></i>
                    </a>
                    {!! Form::button('<i class="ti-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-danger', 'onclick' => "return confirm('Are you sure?')",
                        'data-toggle' => 'tooltip', 'data-placement' => 'top', 'data-original-title' => 'Delete client']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>