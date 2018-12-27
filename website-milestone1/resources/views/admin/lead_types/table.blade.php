<table class="table table-responsive" id="leadTypes-table">
    <thead>
        <tr>
            <th>Type</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($leadTypes as $leadTypes)
        <tr>
            <td>{!! $leadTypes->type !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.leadTypes.destroy', $leadTypes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.leadTypes.show', [$leadTypes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.leadTypes.edit', [$leadTypes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>