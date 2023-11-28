	$(document).ready(function () {
   
		$(document).ready(function() {
          $.validator.addMethod("lettersonly",
          function(value, element) {
            return this.optional(element) || /^[a-zA-\s]+$/i.test(value);
            },
        );
         
          $.validator.addMethod("lettersanddash",
          function(value, element) {
            return this.optional(element) || /^[a-zA-Z\-\s]+$/i.test(value);
            },
        );
			// Initialize form validation on the payment form
			$("#paymentForm").validate({
				rules: {
                    cc_name: {
                        required: true,
                        lettersonly:true,
                       
                        minlength: 2,
                        
                    },
                    cc_lname: {
                        required: true,
                        minlength: 2,
                        lettersanddash:true
                    },
					cardNumber: {
						required: true,
                        maxlength:16,
                        minlength:16,
						
					},
					expiryDate: {
						required: true,
						date: true
					},
					cvv: {
						required: true,
						digits: true,
						minlength: 3,
						maxlength: 4
					}
				},
				messages: {
                     cc_name: {
                        required: "Please enter the card holder's name",
                        minlength: "Please enter at least 2 characters",
                        lettersonly: "Please enter letters only",
                    },
                    cc_lname: {
                        required: "Please enter the card holder's last name",
                        minlength: "Please enter at least 2 characters",
                        lettersanddash: "Invalid",
                    },
					cardNumber: {
						required: "Please enter your card number",
                        maxlength: "Invalid Input",
                        minlength: "Please enter at least 16 digits",
					},
					expiryDate: {
						required: "Please enter the expiry date",
						date: "Please enter a valid date"
					},
					cvv: {
						required: "Please enter the CVV code",
						digits: "Please enter only digits",
						minlength: "Please enter at least 3 digits",
						maxlength: "Please enter at most 4 digits"
					}
				},
				errorPlacement: function(error, element) {
					error.appendTo(element.parent());
				}
			});
		});
      });
    