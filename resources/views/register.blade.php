@extends('style')

@section('content')

@include('PreLoader')
 <div class="checkout-section mt-150 mb-150">
  <div class="container">
  	<div class="row">
      <div class="col-lg-8">
      	<div class="checkout-accordion-wrap">
      	  <div class="accordion" id="accordionExample">
      	  	<div class="card single-accordion">
     
             <div class="card-header" id="headingOne">
				 <h5 class="mb-0">
				   Register
			    </h5>
			 </div>

			 <div id="collapseOne" class="collapse show">
			  <div class="card-body">
			  	<div class="billing-address-form">
			  	 <form class="billing-address-form" method="post" action="{{ route('insert.data') }}">
			  	     {{ csrf_field() }}
			  	   <p><input type="text" placeholder="Name" name="name"></p>
			  	   <span style="color:red;">
			  	   	@if($errors->has('name'))
                     {{ $errors->first('name') }}
			  	   	@endif
			  	   </span>
				   <p><input type="email" placeholder="Email" name="email"></p>
				    <span style="color:red;">
			  	   	@if($errors->has('email'))
                     {{ $errors->first('email') }}
			  	   	@endif
			  	   </span>
				   <p><input type="password" placeholder="password" name="password"></p>
                   <p><input type="password" placeholder="password_c" name="password_confirmation"></p>
                   <span style="color:red;">
			  	   	@if($errors->has('password'))
                     {{ $errors->first('password') }}
			  	   	@endif
			  	   </span>
				   <p><input type="text" placeholder="Address" name="address"></p>
				    <span style="color:red;">
			  	   	@if($errors->has('address'))
                     {{ $errors->first('address') }}
			  	   	@endif
			  	   </span>
			  	   <br>
			  	   <input type="submit" name="Submit" value="REGISTER">
			  	 </form>		
			  	</div>
			  </div>
			 </div>
      	  	</div>
      	  </div>	
      	</div>
      </div>
      
      <div class="col-lg-4">
      	<div class="order-details-wrap">
      	 <div class="checkout-accordion-wrap">
      	  <div class="accordion">
      	  	<div class="card single-accordion">
      	  	 <div class="card-header">
      	  	  <h5 class="mb-0">
				 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Login
				 </button>
			  </h5>
      	  	 </div>

             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			   <div class="card-body">
				  <div class="billing-address-form">
				    <form action="index.php">
					 <p><input type="text" placeholder="Name"></p>
					 <p><input type="email" placeholder="Email"></p>
				   </form>
				 </div>
			  </div>
		     </div>
		     <input style="background:#CC19C2;" type="submit" alue="Login">
      	  	</div>
      	  </div>
      	 </div>
      	</div>
      </div>
  	</div>
  </div>
 </div>
@endsection