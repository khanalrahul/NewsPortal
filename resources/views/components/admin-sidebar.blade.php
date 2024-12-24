<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">
             <i data-feather="book" class="header-logo"></i>
            <span class="logo-name">NewsPortal</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i data-feather="monitor"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="settings"></i><span>Settings</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('company.index') }}">Company Details</a></li>
                <li><a class="nav-link" href="{{route('category.index')}}">Categories</a></li>
            </ul>
        </li>

        <li class="menu-header">Manage</li>
        <li class="dropdown active">
            <a href="{{route('post.index')}}" class="nav-link"><i data-feather="clipboard"></i><span>Post</span></a>
        </li>
        <li class="dropdown active">
            <a href="index.html" class="nav-link"><i data-feather="film"></i><span>Advertise</span></a>
        </li>

    </ul>
</aside>
