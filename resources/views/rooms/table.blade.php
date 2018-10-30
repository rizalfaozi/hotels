<table class="table table-responsive" id="rooms-table">
    <thead>
        <tr>
            <th>Provinces Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Type</th>
        <th>Description</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rooms as $room)
        <tr>
            <td>{!! $room->provinces_id !!}</td>
            <td>{!! $room->name !!}</td>
            <td>{!! $room->price !!}</td>
            <td>{!! $room->type !!}</td>
            <td>{!! $room->description !!}</td>
            <td>{!! $room->status !!}</td>
            <td>
                {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rooms.show', [$room->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rooms.edit', [$room->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>