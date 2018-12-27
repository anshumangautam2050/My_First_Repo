<table class="table table-responsive" id="mailTemplates-table">
    <thead>
        <tr>
            <th>Uid</th>
        
        <th>Name</th>
        
        <th>Subject</th>
        
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mailTemplates as $mailTemplates)
        <tr>
            <td>{!! $mailTemplates->uid !!}</td>
            
            <td>{!! $mailTemplates->name !!}</td>
           
            <td>{!! $mailTemplates->subject !!}</td>
            
            <td>
                {!! Form::open(['route' => ['admin.mailTemplates.destroy', $mailTemplates->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.mailTemplates.show', [$mailTemplates->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.mailTemplates.edit', [$mailTemplates->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>