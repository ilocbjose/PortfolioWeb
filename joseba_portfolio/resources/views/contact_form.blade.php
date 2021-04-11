@extends('layout')
@section('content')

	<!-- Seccion de formulario de contacto -->

	<div class="col-md-12">
    	<div class="card">
        	<div class="card-header" style="background: black;">
            	<h4 class="headerwhite">Contact form</h4>
            	<p class="category headerwhite">Contact me through this form, then I will
            						write you to the email address submited.</p>
        	</div>
        		<div class="card-body">
        			<form method="POST" action="contact_api">
        			  <div class="form-group">
					    <label for="name_form">Name</label>
					    <input type="name" class="form-control" name="name_form" placeholder="John Doe">
					  </div>
					  <div class="form-group">
					    <label for="email_form">Email address</label>
					    <input type="email" class="form-control" name="email_form" placeholder="johndoe@example.com">
					  </div>
					  <div class="form-group">
					    <label for="select_form">Select interest option</label>
					    <select class="form-control selectpicker" name="option_form" data-style="btn btn-link" id="exampleFormControlSelect2">
					      <option>Work</option>
					      <option>Just to  say Hi!</option>
					      <option>Other</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="text_form">Reason of contact:</label>
					    <textarea class="form-control" name="text_form" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  <center>
					  <button type="submit" class="btn btn-default">Submit</button>
					  </center>
					</form>

        		</div>
    		</div>
  		</div>
	</div>

@endsection