<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Emailify</title>
		<!-- <script src="{{ asset('js/app.js') }}"></script> -->
		<script src="{{ asset('js/index.js') }}"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

	</head>
	<body>
		<div class="container-fluid">
			<h1>Emails</h1>
			<br>
			<div class="row justify-content-center">
				<table class="table table-striped" data-endpoint="{{ route('api.email.index') }}">
					<thead></thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</body>
</html>
