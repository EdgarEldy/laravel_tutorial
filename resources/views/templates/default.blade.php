<!DOCTYPE html>
<html>
@include('inc.head')
<body>
  @include('inc.nav')
  @include('inc.sidebar')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			@yield('content')
		</div><!--/.row-->
	</div>	<!--/.main-->
@include('inc.scripts')
</body>

</html>
