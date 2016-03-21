<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       {!! Html::style('assets/css/bootstrap.min.css') !!}
       {!! Html::style('assets/css/style.css') !!}
       {!! Html::style('assets/css/font/font-awesome.min.css') !!}
       {!! Html::style('assets/css/responsive.css') !!}
       {!! Html::script('assets/js/jquery.min.js') !!}
</head>
<body>
    <section class="content">
	    @yield('main')
	</section>

    {!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/plugins.js') !!}
    <section class="content">
	    @yield('footer')
	</section>
</body>
</html>