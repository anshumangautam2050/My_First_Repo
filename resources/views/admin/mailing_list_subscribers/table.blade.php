<table class="table table-responsive" id="mailingListSubscribers-table">
    <thead>
        <tr>
            <th>List Uid</th>
        
        <th>First Name</th>
        <th>Email</th>
          <th>Opt In</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mailingListSubscribers as $mailingListSubscribers)
        <tr>
            <td>{!! $mailingListSubscribers->list_uid !!}</td>
           
            <td>{!! $mailingListSubscribers->first_name !!}</td>
            <td>{!! $mailingListSubscribers->email !!}</td>
           <td>{!! $mailingListSubscribers->opt_in !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.mailingListSubscribers.destroy', $mailingListSubscribers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.mailingListSubscribers.show', [$mailingListSubscribers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.mailingListSubscribers.edit', [$mailingListSubscribers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>