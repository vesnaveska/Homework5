<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('user')}}">View All Users</a></li>
			<li><a href="{{ URL::to('user/create')}}">Create a User</a></li>
			<li><a href="{{ URL::to('book')}}">View All Books</a></li>
			<li><a href="{{ URL::to('book/create')}}">Create a Book</a></li>
			<li><a href="{{ URL::to('userbook') }}">Books and Users</a></li>
		</ul>
	</nav>

    <h1>@yield('pagetitle')</h1>

    @if(Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>