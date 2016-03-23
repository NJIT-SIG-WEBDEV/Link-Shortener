@extends('app')

@section('title')
	Laravel Link Shortener | SIG Web Dev
@stop

@section('content') 
	Home
	<hr>


	<h3>Shorten A URL!</h3>
	<form method="POST" action="/">
		<div class="form-group">
			<input class="form-control" type="text" name="url" placeholder="Enter URL"></input>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>		
	</form>

@stop