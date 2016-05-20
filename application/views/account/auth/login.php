<html>
<head>
  <title>HackTM</title>

    <!-- Bootstrap -->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<style>
		.login-form {
			display: inline-block;
    text-align: center;
    position: absolute;
    
    top:25%; 
    left: 40%;
    border: 2px solid #E6E6E6;
    border-radius: 15px;

		}
		.user-field, .password-field{
			/*margin-bottom: 20px;*/
			margin: 20px;
		}
		.login-form, .show-btn{
			margin: 0;
		}
		.login-form .title{
			margin-top: 30px;
		}
		.login-btn, .create-btn{
			width:50%;
			margin: 5px;
		}
		.create-btn{
			background:none!important;
     border:none; 
     padding:0!important;
     font: inherit;
     /*border is optional*/
     border-bottom: 1px solid #444; 
     cursor: pointer;
     margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<div class="login-form">
		<div class="title">
			Login
		</div>
		<div class="input-group user-field">
			<span class="input-group-addon" id="basic-addon1">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
		</div>
		<div class="input-group password-field">
			<span class="input-group-addon" id="basic-addon1">
				<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
			</span>
			<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
		</div>
		<div>
				<button type="button" class="btn btn-info login-btn">Login</button>
		</div>
		<div>
				<button type="button" class="btn btn-default create-btn">Create account</button>
		</div>
	</div>
</body>
</html>