<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/client/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/client/css/util.css">
	<link rel="stylesheet" type="text/css" href="/client/css/main.css">
<!--===============================================================================================-->
 <!-- Material Design Bootstrap -->
 <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>

	<div class="contact1">
	@if (count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors as $key => $value)
				<ul>
          		<?php echo $value;?>
				</ul>
				@endforeach
				@for ($i = 0; $i > count($errors); $i++)
				<ul>
          		<?php echo $errors[$i];?>
				</ul>
				@endfor
			</div>
		@endif
		<div class="container-contact1">
		
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="/client/images/img-01.png" alt="IMG">
			</div>
			<form class="contact1-form validate-form" id="client_form" action="/client/save" method="post">
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			
				<span class="contact1-form-title">
					Client Contact
				</span>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>
				
				<div class="wrap-input1 validate-input" style="margin-left:30px;" data-validate = "Valid email is required: ex@abc.xyz">
					
									<!--Checkbox butons-->
							<div class="btn-group" data-toggle="buttons">

							<label class="btn btn-default active form-check-label">
								<input class="form-check-input" type="radio" name="gender" value=0 checked autocomplete="off"> Male
							</label>

							<label class="btn btn-default form-check-label">
								<input class="form-check-input" type="radio" name="gender" value=1 autocomplete="off"> Female
							</label>

							<label class="btn btn-default form-check-label">
								<input class="form-check-input" type="radio" name="gender" value=2 autocomplete="off"> Other
							</label>

							</div>
							<!--Checkbox butons-->
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Valid 10 digit phone number is reuired.">
					<input type="number" class="input1" name="phone" placeholder="Phone">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>


				<div class="wrap-input1 validate-input" data-validate = "Address is required">
					<textarea class="input1" name="address" placeholder="Address"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Nationality is required">
					<input class="input1" type="text" name="nationality" placeholder="Nationality">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Date of birth is required">
					<input class="input1" type="date" name="dob" placeholder="Date of Birth">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" >
					<textarea class="input1" name="eduction_background" placeholder="Education Background"></textarea>
					<span class="shadow-input1"></span>
				</div>
				<h3 style="display: block;width: 100%;margin-left:90px;font-family: Montserrat-Bold;font-size: 15px;line-height: 1.5;color: #666666;"> Preffered Mode of Contact</h3>
				<div class="wrap-input1 validate-input" style="margin-left:30px;" data-validate = "Valid email is required: ex@abc.xyz">
					
									<!--Checkbox butons-->
							<div class="btn-group" data-toggle="buttons">

							<label class="btn btn-default active form-check-label">
								<input class="form-check-input" type="radio" name="contact_preferred_mode" value="0" checked autocomplete="off"> Phone
							</label>

							<label class="btn btn-default form-check-label">
								<input class="form-check-input" type="radio" name="contact_preferred_mode" value=1 autocomplete="off"> Email
							</label>

							<label class="btn btn-default form-check-label">
								<input class="form-check-input" type="radio" name="contact_preferred_mode" value=2 autocomplete="off"> None
							</label>

							</div>
							<!--Checkbox butons-->
				</div>

				<div class="container-contact1-form-btn">
				
					<button class="contact1-form-btn" type="submit" form="client_form" value="Submit">
						<span>
							Save Client
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="/client/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/client/vendor/bootstrap/js/popper.js"></script>
	<script src="/client/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/client/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/client/vendor/tilt/tilt.jquery.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="/client/js/main.js"></script>

</body>
</html>
