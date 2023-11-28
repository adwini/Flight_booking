<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <meta name="csrf-token" content="{{ csrf_token() }}"/>
    </head>
<body>
<div
    class="p-5 text-center bg-image"
    style="
    background-image: url('https://images.unsplash.com/photo-1587019158091-1a103c5dd17f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
    height: 900px; ">
<div class="col-md-6 offset-md-3">  
 
<hr class="my-5">
    <style>
        .error {
            color: red;
        }
    </style>

     <div class="card card-outline-secondary" >
        <div class="card-body" style=" background: hsla(300, 13%, 86%, 0.53) ">
            
            <h3 class="text-center">Credit Card Payment</h3>
            <hr>

	{{-- <div class="container py-5"> --}}
		<form action="{{ route ('payment') }}" method="post" id="paymentForm" >
            @csrf
         
            <div class="form-group form-outline">
                <label for="cc_name" class="form-label">Card Holder's Name</label>
                <input type="text" id="cc_name" name="cc_name" class="form-control" placeholder="First Name" required>
            </div>

            <div class="form-group form-outline">
                <label  for="cc_lname" class="form-label"></label>
                <input type="text" id="cc_lname" name="cc_lname" class="form-control" placeholder="Last Name" required>
            </div>

             <div class="form-group form-outline">
                <label for="cardNumber" class="form-label" >Card Number</label>
                <input type="number" id="cardNumber" name="cardNumber" class="form-control" placeholder="4263982640269299" title="Credit card number" required>
            </div>
            <div class="form-group row form-outline">
              <label class="col-md-12">Card Exp. Date</label>
                <div class="col-md-4">
                    <select class="form-control" name="cc_exp_mo" id="cc_exp_mo" size="0" required="required">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col-md-4 form-outline">
                    <select class="form-control" name="cc_exp_yr" id="cc_exp_yr" size="0" required="required">
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        
                    </select>
                </div>
                <div class="col-md-4 form-outline">
                    <input type="number" class="form-control" name="cvv" id="cvv" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required placeholder="CVV">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger btn-lg btn-block">Cancel</button>
                 </div>
                 <div class="col-md-6">
                   {{-- <button href="success" onclick="event.preventDefault(); document.getElementById('paymentForm').submit();">Submit</button> --}}

                    <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
                 </div>
            </div>
        </form>
	</div>
         </div>
        </div>
     </div>
    </div>

<script type="text/javascript" src="{{ URL::asset('jquery/jquery-3.6.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('jquery.validate/jquery.validate.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/payment.js') }}"></script>

</body>
</html>
