<!DOCTYPE html>
<html>
<head>
	<title>Crud Operation</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<div class="container mt-2">
		<div class="card">
			<div class="card-header">

				<h3>Crud Operation</h3>
				
			</div>


			
				<div class="card-body">

					<form action="{{ route('crud.store') }}" method="post">

					@csrf

					@include('messages')
						
					<div class="form-group">

					<label for="name">Name</label>
					<input type="text"  class="form-control col-md-4" name="name" placeholder="Enter Your Name">

				</div>

				<div class="form-group">
					
					<label for="name">Email</label>
					<input type="email" class="form-control col-md-4" name="email" placeholder="Enter Your Email">

				</div>


				<div class="form-group">
					
					<label for="name">Phone</label>
					<input type="number" class="form-control col-md-4"  name="phone" placeholder="Enter Your Phone">

				</div>

				<input type="submit" name="submit" value="Add Information" class="btn btn-success">
					</form>

			
				

			   </div>
			
		</div>
		
				

</div>

</body>
</html>