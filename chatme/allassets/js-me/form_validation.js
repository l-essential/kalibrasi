jQuery.extend(jQuery.validator.messages, {
    required: "Field ini harus diisi",
    remote: "Please fix this field.",
    email: "Alamat email tidak valid.",
    url: "Please enter a valid URL.",
    date: "Masukkan tanggal yang benar (format: yyyy-mm-dd)",
    dateISO: "Please enter a valid date (ISO).",
    number: "Harus diisi dengan angka",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Tidak boleh lebih dari {0} karakter."),
    minlength: jQuery.validator.format("Minimal isi dengan {0} karakter."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

var form_validation = {
	validateDefault: function(opt) {
		if(!opt.selector || !opt.rules) {
			alert('Form Validation => plase provice selector and rules')
			return;
		}

	    var form1 = $(opt.selector);
	    var error1 = $('.alert-danger', form1);
	    var success1 = $('.alert-success', form1);

	    form1.validate({
	        errorElement: 'span', //default input error message container
	        errorClass: 'help-block help-block-error', // default input error message class
	        focusInvalid: false, // do not focus the last invalid input
	        ignore: "",  // validate all fields including form hidden input
	        messages: {
	            select_multi: {
	                maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
	                minlength: jQuery.validator.format("At least {0} items must be selected")
	            }
	        },
	        rules: opt.rules,

	        invalidHandler: function (event, validator) { //display error alert on form submit              
	            success1.hide();
	            error1.show();
	            App.scrollTo(error1, -200);
	        },

	        highlight: function (element) { // hightlight error inputs
	            $(element)
	                .closest('.form-group').addClass('has-error'); // set error class to the control group
	        },

	        unhighlight: function (element) { // revert the change done by hightlight
	            $(element)
	                .closest('.form-group').removeClass('has-error'); // set error class to the control group
	        },

	        success: function (label) {
	            label
	                .closest('.form-group').removeClass('has-error'); // set success class to the control group
	        },

	        submitHandler: function (form) {
	            success1.show();
	            error1.hide();

	            if(opt.callback) opt.callback(form);
	        }
	    });
	}

}