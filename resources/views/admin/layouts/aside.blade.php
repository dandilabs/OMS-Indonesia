<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <a href="index.html"> <img alt="image" src="{{asset('vendor/img/logo.png')}}" class="header-logo" /> <span
        class="logo-name">OMS</span>
    </a>
    </div>
    <ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="dropdown">
        <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="home"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="bookmark"></i><span>Category</span></a>
        <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{route('category.index')}}">List Category</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>Tags</span></a>
        <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{route('tags.index')}}">List Tags</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Post</span></a>
        <ul class="dropdown-menu">
        <li><a class="nav-link" href="email-inbox.html">List Post</a></li>
        <li><a class="nav-link" href="email-compose.html">List Post Trash</a></li>
        </ul>
    </li>
    <li class="menu-header">Media</li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>information</span></a>
        <ul class="dropdown-menu">
        <li><a class="nav-link" href="light-gallery.html">List Information</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>User</span></a>
        <ul class="dropdown-menu">
            <li><a href="carousel.html">List User</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="/" class="nav-link"><i data-feather="globe"></i><span>Web Base</span></a>
    </li>
    </ul>
</aside>