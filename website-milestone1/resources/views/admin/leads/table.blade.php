<table class="table table-responsive" id="leads-table">
    <thead>
        <tr>
 
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company</th>
         <th>Mobile</th>
        <th>Email</th>
        <th>Subject</th>

            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($leads as $leads)
        <tr>

            <td>{!! $leads->first_name !!}</td>
            <td>{!! $leads->last_name !!}</td>
            <td>{!! $leads->company !!}</td>

            <td>{!! $leads->mobile !!}</td>
            <td>{!! $leads->email !!}</td>

            <td>{!! $leads->subject !!}</td>

            <td>
                {!! Form::open(['route' => ['admin.leads.destroy', $leads->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.leads.show', [$leads->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.leads.edit', [$leads->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>