<!DOCTYPE html>
<html>
<head>
<title>Webeey - Telephony</title>
    
<!-- Start AJAXING -->
<script>

    $(document).ready(function() {

    // process the form
    $('form').submit(function(event) {
        
        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'smessage'              : $('input[name=smessage]').val(),
            'number'                : $('input[name=number]').val(),
            'cidnumber'             : $('input[name=cidnumber]').val()
            
        };
        
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'send_sms.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data);

                // here we will handle errors and validation messages
            
                if ( ! data.success) {

            // handle errors for name ---------------
                        if (data.errors.smessage) {
                            $('#sms-group').addClass('has-error'); // add the error class to show red input
                            $('#sms-group').append('<div class="help-block">' + data.errors.smessage + '</div>'); // add the actual error message under our input
                        }
                       
                       
                        } else {
                          // ALL GOOD! just show the success message!
                          //$('form').html('<div class="alert alert-success">' + data.message + '</div>');
                        
                         $('#sms-group').removeClass('has-error').addClass('help-block'); // add the success class to show green                             
                        $('#sms-group').append('<div class="help-block">' + data.message     + '</div>'); // add the actual error message under our input
                            
                        }

            
                //end ERROR HANDLING
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});
    
    
    /* SHORTHAND AJAX
    
        $.post('process.php', function(formData) {

        // place success code here

        })
        .fail(function(data) {
            // place error code here
        });
    
    */
    
</script>
    

<!-- END AJAX -->
    
</head>
<body>


    
<!-- START FORM -->    
    
<div class="col-sm-6 col-sm-offset-3" id="sms-container">

  

    <!-- OUR FORM -->
    <form action="send_sms.php" method="POST">
        
        <!-- Call ID Number -->
        <div id="cidnumber-group" class="form-group">
            <input type="text" class="form-control" name="cidnumber" value="<?php echo "+1" . $effective_caller_id_number; ?>" readonly >
            <!-- errors will go here -->
        </div>

        
         <!-- DestinationNumber -->
        <div id="number-group" class="form-group">
            <input type="text" class="form-control" name="number" placeholder="To:">
            <!-- errors will go here -->
        </div>

        <!-- Message -->
        <div id="sms-group" class="form-group">
            <input type="text" class="form-control" name="smessage" placeholder="Type a message...">
            <!-- errors will go here -->
        </div>


        <button type="submit" class="btn btn-success">Send <span class="fa fa-arrow-right"></span></button>

    </form>

</div>
    

    
<!-- END FORM -->    

</body> 
</html>