<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('front.index') }}">CareerVibe</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="{{ route('front.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('front.findJop') }}">Find Jobs</a>
                    </li>	
					<li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('myprofile.index') }}">My Profile</a>
                    </li>									
				</ul>
				@if (! Auth::check())
				    <a class="btn btn-outline-primary me-2" href="{{ route('login') }}" type="submit">Login</a>
				@else
				<form action="{{ route('logout') }}" method="POST" class="d-inline" onclick="this.closest('form').submit();return false;">
					@csrf
				    <a class="btn btn-outline-danger me-2" href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;">Logout</a>
				</form>
				@endif				
				
				<a class="btn btn-primary" href="{{ route('jobs.create') }}" type="submit">Post a Job</a>
			</div>
		</div>
	</nav>
</header>
