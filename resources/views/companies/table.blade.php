<table class="table table-hover manage-u-table color-table inverse-table" id="companies-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->name !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-info btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-info' data-toggle="tooltip" data-placement="top"
                        data-original-title="View client">
                        <i class="ti-eye"></i>
                    </a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-warning btn-outline btn-circle btn-lg m-r-5 center-icon-lg tooltip-warning' data-toggle="tooltip" data-placement="top"
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