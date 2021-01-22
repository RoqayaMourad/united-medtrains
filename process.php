<?php
        $EmailFrom = "From: United MedTrans USA Landing Page<philippe.lauture@gmail.com>";
        $EmailTo = "philippe.lauture@gmail.com, jacknelsonquad@gmail.com, frankwilson.quad@gmail.com,emmymillerquad@gmail.com ";
        $name    = $_POST['name-form'];
        $email   = $_POST['email-form'];
        $phone   = $_POST['phone-form'];
        
        $pickup   = $_POST['pickup'];
        $dropoff  = $_POST['dropoff'];
        $condition   = $_POST['condition'];
        
        $message = $_POST['message-form'];
        
        //echo $name." / ".$email." / ".$phone." / ".$message;die();
        
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";
        $Body .= "Phone: ";
        $Body .= $phone;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
        
        $Body .= "Pick up location: ";
        $Body .= $pickup;
        $Body .= "\n";
        
        $Body .= "Drop off location: ";
        $Body .= $dropoff;
        $Body .= "\n";
        
        $Body .= "Patient condition: ";
        $Body .= $condition;
        $Body .= "\n";
        
        
        $Body .= "Message: ";
        $Body .= $message;
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "This is message sent from United MedTrans USA landing page";

        $Subject = "Contact Form Submission(".$name.")";
        
 
        // send email 
        if(str_replace(' ', '', $name) != "" && str_replace(' ', '', $email)  != "" && str_replace(' ', '', $phone) != "" ){
            $data['success'] = mail($EmailTo, $Subject, $Body, $EmailFrom);
        }else{
            $data['success'] = "false";
        }

        // redirect to success page 
       if ($data['success'] == "false"){
            //echo json_encode($data);
            print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
       }
       else{
            // $data["success"] = $success  ;
            // echo json_encode($data);
            print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
       }
?>