@extends('layouts.app')
@section('content')
<div class="container">
	<form action="" method="post">
	@csrf
		<div class="form-group">
		<label for="number">Add Phone Number:</label>
			<input type="text" class="form-control" id="number" name="phone_number">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form> 
</div>
@endsection