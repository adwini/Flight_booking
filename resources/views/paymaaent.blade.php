<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <!------ Include the above in your HEAD tag ---------->

    <script type="text/javascript" src="{{ URL::asset('jquery/jquery-3.6.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('jquery.validate/jquery.validate.min.js') }}"></script>
    
    <title>Payment</title>
</head>
<body>
     <div
            class="p-5 text-center bg-image"
            style="
            background-image: url('https://images.unsplash.com/photo-1587019158091-1a103c5dd17f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
            height: 900px; ">
            
            <div class="col-md-6 offset-md-3">
            
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary" >
                        <div class="card-body" style=" background: hsla(300, 12%, 86%, 0.652)">
                           
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            {{-- <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div> --}}
                            
                            <form id="formPayment">

                                {{-- <div class="form-group form-outline">
                                    <label class="form-label" for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="cc_name" name="cc_name"  title="First name" required="required">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Last Name" id="cc_lname" name="cc_lname" title="Last name" required="required">
                                    <label class="form-label" for="cc_lname"></label>
                                </div> --}}
                                
                                <div class="form-group form-outline">
                                    <label class="form-label" for="cc_num">Card Number</label>
                                    <input type="number" id="cc_num" name="cc_num" class="form-control" placeholder="4263982640269299" autocomplete="off" maxlength="16" pattern="\d{16}" title="Credit card number" required="required">
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
                                        <input type="number" class="form-control" name="cvv" id="cvv" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="required" placeholder="CVV">
                                    </div>
                                 </div>
                              
                                 <hr>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
                                    </div>
                                   
                                        <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>

                                    </div>
                                </div>

                                <div id="myModal" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon-box">
                                                    <i class="material-icons">&#xE876;</i>
                                                </div>				
                                                <h4 class="modal-title w-100">Awesome!</h4>	
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">Your booking has been confirmed.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-success btn-block" href="done" >OK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
                       
                   
            </div>
</body>
</html>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
