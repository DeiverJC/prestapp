<table class="table table-hover manage-u-table color-table inverse-table" id="customers-table">
    <thead>
        <tr>
            <th>Full Name</th>
        <th>Dni</th>
        <th>Cellphone</th>
        <th>Address</th>
        <th>Bank</th>
        <th>Company</th>
            <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->full_name !!}</td>
            <td>{!! $customer->dni !!}</td>
            <td>{!! $customer->cellphone !!}</td>
            <td>{!! $customer->address !!}</td>
            <td>{!! $customer->bank->name !!}</td>
            <td>{!! $customer->company->name !!}</td>
            <td class="pull-right">
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-info btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-info' data-toggle="tooltip" data-placement="top"
                        data-original-title="View client">
                        <i class="ti-eye"></i>
                    </a>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-warning btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-warning' data-toggle="tooltip" data-placement="top"
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