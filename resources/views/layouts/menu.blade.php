<li class="{{ Request::is('virtuals*') ? 'active' : '' }}">
    <a href="{!! route('virtuals.index') !!}"><i class="fa fa-edit"></i><span>Virtuals</span></a>
</li>


<li class="{{ Request::is('provinces*') ? 'active' : '' }}">
    <a href="{!! route('provinces.index') !!}"><i class="fa fa-edit"></i><span>Provinces</span></a>
</li>

<li class="{{ Request::is('rooms*') ? 'active' : '' }}">
    <a href="{!! route('rooms.index') !!}"><i class="fa fa-edit"></i><span>Rooms</span></a>
</li>

<li class="{{ Request::is('chats*') ? 'active' : '' }}">
    <a href="{!! route('chats.index') !!}"><i class="fa fa-edit"></i><span>Chats</span></a>
</li>

