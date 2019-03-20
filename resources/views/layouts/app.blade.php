<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/main/img/favicon.ico">
    <!-- basic stype -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    @yield('style')
</head>

<body>
    @yield('header')
    @yield('menu')
    @yield('content')
    @yield('footer')

    @yield('javascript')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#logout").click(function(){
        $.ajax({
            type:'POST',
            url:'/logout',
            success:function(data){
              window.location.href="/";
            }
        });
      });
    </script>
</body>
</html>