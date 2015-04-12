@extends('app')
@section('content')
	<div class="container contact">
		<div class="row">
	      <div class="col-md-6 col-md-offset-3">
	        <div class="well well-sm">
	          <form class="form-horizontal" action="" method="post">
	          <fieldset>
	            <legend class="text-center">Contact us</legend>
	            <div class="form-group">
	              <div class="col-md-12">
	                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
	              </div>
	              <div class="col-md-12">
	                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
	              </div>
	              <div class="col-md-12">
	                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
	              </div>
	              <div class="col-md-12 text-right">
	                <button type="submit" style="display:block; width: 100%;" class="btn btn-primary btn-lg">Submit</button>
	              </div>
	            </div>
	          </fieldset>
	          </form>
	        </div>
	      </div>
		</div>
	</div>
@stop