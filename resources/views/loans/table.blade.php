<table class="table table-hover manage-u-table color-table inverse-table" id="loans-table">
    <thead>
        <tr>
            <th>Principal</th>
        <th>Interest</th>
        <th>Term</th>
        <th>Fee</th>
        <th>Type Term</th>
        <th>Customer Id</th>
            <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($loans as $loan)
        <tr>
            <td>{!! $loan->principal !!}</td>
            <td>{!! $loan->interest !!}</td>
            <td>{!! $loan->term !!}</td>
            <td>{!! $loan->fee !!}</td>
            <td>{!! $loan->type_term !!}</td>
            <td>{!! $loan->customer_id !!}</td>
            <td class="text-center">
                {!! Form::open(['route' => ['loans.destroy', $loan->id], 'method' => 'delete']) !!}
                    <a href="{!! route('loans.show', [$loan->id]) !!}" class='btn btn-info btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-info' data-toggle="tooltip" data-placement="top"
                        data-original-title="View client">
                        <i class="ti-eye"></i>
                    </a>
                    <a href="{!! route('loans.edit', [$loan->id]) !!}" class='btn btn-warning btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-warning' data-toggle="tooltip" data-placement="top"
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