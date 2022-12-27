
<nav class="navbar navbar-expand-md bg-white shadow-lg">
    <div class="container">
        <a href="" class="navbar-brand">Laravel-clurd</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('add-category') }}" class="dropdown-item">Add category</a></li>
                    <li><a href="{{route('manage-category')}}" class="dropdown-item">Manage category</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('add-blog') }}" class="dropdown-item">Add Blog</a></li>
                    <li><a href="{{ route('manage-blog') }}" class="dropdown-item">Manage Blog</a></li>
                </ul>
            </li>
            <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li><a href="{{ route('register') }}" class="nav-link">register</a></li>
        </ul>
    </div>
</nav>
