<table class="table table-responsive" id="mailingLists-table">
    <thead>
        <tr>
            <th>Uid</th>
      
        <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mailingLists as $mailingLists)
        <tr>
            <td>{!! $mailingLists->uid !!}</td>

            <td>{!! $mailingLists->name !!}</td>

            <td>
                {!! Form::open(['route' => ['admin.mailingLists.destroy', $mailingLists->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.mailingLists.show', [$mailingLists->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.mailingLists.edit', [$mailingLists->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>