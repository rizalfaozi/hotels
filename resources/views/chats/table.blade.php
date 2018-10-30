<table class="table table-responsive" id="chats-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($chats as $chat)
        <tr>
            <td>{!! $chat->user_id !!}</td>
            <td>{!! $chat->description !!}</td>
            <td>
                {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('chats.show', [$chat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('chats.edit', [$chat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>