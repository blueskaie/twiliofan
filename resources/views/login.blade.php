<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/login/animate.css">
	<link rel="stylesheet" type="text/css" href="css/login/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <div>
                    <img src="https://www.drupal.org/files/project-images/10525524-twilio-logo.png" style="width: 85%;" alt="AVATAR">
                </div>
                <div class="loginsec wrap-input100 validate-input m-b-10" data-validate = "Phone number is required">
                    <input id="phone" class="input100" type="text" name="phonenumber" placeholder="Phone number">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
                
                <div class="loginsec container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" id="login-btn">
                        Login
                    </button>
                </div>


                <div class="codesec wrap-input100 validate-input m-b-10" data-validate = "Code is required">
                    <input id="code" class="input100" type="text" name="code" placeholder="code">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="codesec container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" id="code-btn">
                        Verify
                    </button>
                </div>
			</div>
		</div>
	</div>
	
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="js/login.js"></script>
   
</body>
</html>