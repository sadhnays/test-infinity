// Validate the apointment form when it is submitted
jQuery.validator.addMethod('phoneFormat', function (value) {
    return  (!value.match(/[^0-9]/) || $.trim(value) == '');
}, 'Invalid phone number');

$('#contact_us').validate({
    
    rules: {
        "first_name": {
            required: true,
        },

        "last_name": {
            required: true,
        },
        
        "email": {
            required: true,
            email: true
        },
        
        "phone": {
            phoneFormat: true,
        },

        "subject": {
            required: true,
        },

        "country": {
            required: true,
        },

        "message": {
            required: true,
        }
    },
    messages: {
        "first_name": {
            required: 'First Name required',
        },
        "last_name": {
            required: 'Last Name required',
        },
        "email": {
            required: 'Email required',
        },
        "phone": {
            required: 'Phone Number required',
        },
        "subject": {
            required: 'Subject required',
        },
        "country": {
            required: 'Country required',
        },
        "message": {
            required: 'Message required',
        }
    },
    submitHandler: function(form) {
      submitForm();
    }
});

function submitForm()
{
    var formData 					= $('#contact_us').serializeArray();
    $('#status-msg').html('');
    // $('.lds-default').show();
    // $('#error_msg').html('');
    
    $.ajax({
      method: "POST",
      url: "save_contact_us.php",
      data: formData,
      statusCode: {
        404: function() {
            $.confirm({
                title: 'Invalid Request',
                content: 'Invalid Request',
                buttons: {
                    ok:  {
                        text: 'Ok',
                        btnClass: 'btn btn-primary'
                    }
                }
            });
        },
        500: function() {
            $.confirm({
                title: 'Network Error',
                content: 'Network Error',
                buttons: {
                    ok:  {
                        text: 'Ok',
                        btnClass: 'btn btn-primary'
                    }
                }
            });
        }
    }
    })
    .done(function( response ) {
        response = JSON.parse(response);
       if (typeof response.status != 'undefined' && response.status == true) {
            $('#status-msg').html('Thank you for your request. We will get back to you soon.');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#subject').val('');
            $('#country').val('');
            $('#message').val('');
       } else {
            $('#status-msg').html(response.error);
       }
         
    });
}
