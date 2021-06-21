<!DOCTYPE html>
<html>
<head>
<title>Webeey - Telephony</title>
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