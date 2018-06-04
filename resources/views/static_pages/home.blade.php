@extends('layouts/default')

@section('content')
	<div class="jumbotron">
		<h1>Hello Laravel</h1>
		<p class="lead">
			你现在所看到是 练习
		</p>
		<p>
			一切， 从这里开始
		</p>
		<p>
			<a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register Now!</a>
		</p>
	</div>
@stop