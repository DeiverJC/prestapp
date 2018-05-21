<table class="table table-hover manage-u-table color-table inverse-table" id="banks-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($banks as $bank)
        <tr>
            <td>{!! $bank->name !!}</td>
            <td class="text-center">
                {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
                    <a href="{!! route('banks.show', [$bank->id]) !!}" class='btn btn-info btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-info' data-toggle="tooltip" data-placement="top"
                        data-original-title="View client">
                        <i class="ti-eye"></i>
                    </a>
                    <a href="{!! route('banks.edit', [$bank->id]) !!}" class='btn btn-warning btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-warning' data-toggle="tooltip" data-placement="top"
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