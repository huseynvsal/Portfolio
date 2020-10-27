<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="{{asset('portfolio/logos/portfolio.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portfolio/css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portfolio/css/toast.css')}}">
</head>
<body>
<div class="menu">
    <div class="menu_header">
        <img class="logo" src="{{asset('portfolio/logos/portfolio.png')}}">
        <p class="admin">Portfolio</p>
    </div>
    <a class="selected_table_link" href="/main_table"><i class="fa fa-table"></i>Projects</a>
    <a class="table_link" href="/messages_table"><i class="fa fa-table"></i>Messages</a>
    <a class="table_link" href="/additional_categories_table"><i class="fa fa-table"></i>Additional categories</a>
</div>
<div class="main_body">
    <div class="body_headers">
        <p class="table_name">Projects Table</p>
        <li class="dropdown">
            <a class="admin_name">
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu">
                <a class="dropdown_item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </li>
    </div>
@yield('admin_main')
</body>
<script src="{{asset('portfolio/js/admin.js')}}"></script>
<script src="{{asset('portfolio/js/toast.js')}}"></script>
</html>
