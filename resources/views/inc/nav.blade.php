<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}"><span>LARAVEL TUTORIAL |</span> Simple Store Management</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use></svg><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{url('users/profile')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							{{ Auth::user()->name }}
							</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
									<svg class="glyph stroked male-user"><use xlink:href="#stroked-cancel"></use></svg>
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>
