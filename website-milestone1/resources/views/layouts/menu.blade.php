<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('admin.users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>


<li class="{{ Request::is('leads*') ? 'active' : '' }}">
    <a href="{!! route('admin.leads.index') !!}"><i class="fa fa-fighter-jet"></i><span>Leads</span></a>
</li>

<li class="{{ Request::is('mailTemplates*') ? 'active' : '' }}">
    <a href="{!! route('admin.mailTemplates.index') !!}"><i class="fa fa-file-code-o"></i><span>Mail Templates</span></a>
</li>

<li class="{{ Request::is('mailingLists*') ? 'active' : '' }}">
    <a href="{!! route('admin.mailingLists.index') !!}"><i class="fa fa-list"></i><span>Mailing Lists</span></a>
</li>

<li class="{{ Request::is('mailingListSubscribers*') ? 'active' : '' }}">
    <a href="{!! route('admin.mailingListSubscribers.index') !!}"><i class="fa fa-users"></i><span>Mailing List Subscribers</span></a>
</li>

