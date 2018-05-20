











<li>
    <a href="{!! route('banks.index') !!}" class="waves-effect {{ Request::is('banks*') ? 'active' : '' }}">
        <i class="mdi mdi-pencil fa-fw"></i><span class="hide-menu">Banks</span>
    </a>
</li>
<li>
    <a href="{!! route('companies.index') !!}" class="waves-effect {{ Request::is('companies*') ? 'active' : '' }}">
        <i class="mdi mdi-pencil fa-fw"></i><span class="hide-menu">Companies</span>
    </a>
</li>

<li>
    <a href="{!! route('customers.index') !!}" class="waves-effect {{ Request::is('customers*') ? 'active' : '' }}">
        <i class="mdi mdi-pencil fa-fw"></i><span class="hide-menu">Customers</span>
    </a>
</li>
