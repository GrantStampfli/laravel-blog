@extends('app')
@section('content')
	<div class="row">
		<div class="content col-md-10 col-md-offset-1">
			<div class="title">About {{ $name }}</div>
			<div class="quote">{{ Inspiring::quote() }}</div>
		</div>
	</div>
@stop