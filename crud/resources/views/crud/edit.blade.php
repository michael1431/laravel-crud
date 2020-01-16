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

				<h3>Update Information</h3>
				
			</div>


			
				<div class="card-body">

					<form action="{{ route('crud.update', $user->id) }}" method="post">

					@csrf

					@include('messages')
						
					<div class="form-group">

					<label for="name">Name</label>
					<input type="text"  class="form-control col-md-4" name="name" value="{{ $user->name }}">

				</div>

				<div class="form-group">
					
					<label for="name">Email</label>
					<input type="email" class="form-control col-md-4" name="email" value="{{ $user->email }}">

				</div>


				<div class="form-group">
					
					<label for="name">Phone</label>
					<input type="number" class="form-control col-md-4"  name="phone" value="{{ $user->phone }}">

				</div>

				<input type="submit" name="submit" value="Update Information" class="btn btn-success">
			</form>
			
				

			   </div>
			
		</div>
		
				

</div>

</body>
</html>