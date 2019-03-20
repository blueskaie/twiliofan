<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Twilio Fan MVP</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>

    <body style="background-color:#343a40">
    <span id="logout" type="button" class="btn-danger">Logout</span>
        <div class="container">
            <h1 style="color: white; text-align:center; margin: 30px">Phone List captured by Twilio</h1>
            <h5 style="color: white; font-style: oblique; ">This is my Twilio Number +1 (817) 270-6225, You can get download link by sending message</h5>
            @yield('content')
        </div>
    </body>
</html>