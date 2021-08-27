<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Principal
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Mantenimiento</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Item:</h6>
            @can('principal.users.index')
                <a class="collapse-item" href="{{ route('principal.users.index')}}">Usuario</a>
            @endcan

            @can('principal.roles.index')
                <a class="collapse-item" href="{{ route('principal.roles.index')}}">Roles</a>
            @endcan
            <a class="collapse-item" href="#">Paises</a>
        </div>
    </div>
</li>