<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
</head>
<body>
			<section class="color-1">
			<a href="{{ route('client.create') }}"><button class="btn btn-7 btn-7g btn-icon-only icon-plus">Add</button></a>
			</section>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100" style="margin-top:-400px">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Name</th>
								<th class="column100 column2" data-column="column2">Address</th>
								<th class="column100 column3" data-column="column3">Gender</th>
								<th class="column100 column4" data-column="column4">Nationality</th>
								<th class="column100 column5" data-column="column5">DOB</th>
								<th class="column100 column6" data-column="column6">Education</th>
								<th class="column100 column7" data-column="column7">Phone</th>
								<th class="column100 column8" data-column="column8">Email</th>
								<th class="column100 column9" data-column="column9">Contact Mode</th>
							</tr>
						</thead>
						<tbody>
                        @if(count($data)>0)
                            @foreach($data as $data)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$data['Name']}}</td>
								<td class="column100 column2" data-column="column2">{{$data['address']}}</td>
								<td class="column100 column3" data-column="column3">{{$data['Gender']}}</td>
								<td class="column100 column4" data-column="column4">{{$data['Nationality']}}</td>
								<td class="column100 column5" data-column="column5">{{$data['DOB']}}</td>
								<td class="column100 column6" data-column="column6">{{$data['Education']}}</td>
								<td class="column100 column7" data-column="column7">{{$data['Phone']}}</td>
								<td class="column100 column8" data-column="column8">{{$data['Mail']}}</td>
								<td class="column100 column9" data-column="column9">{{$data['preferredMode']}}</td>
							</tr>
                            @endforeach
                        @endif
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>