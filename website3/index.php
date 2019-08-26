<?php
    // message vars
    $msg = '';
    $msgClass = "";


  //check for submit
  if(filter_has_var(INPUT_POST,'submit')){
    //echo "We Received Your Application...";
    //get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
      // check required fields 
      if(!empty($name) && !empty($email) && !empty($message)){
        //pass
        //check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
          //Failed
          $msg = "Please enter a validate email...";
          $msgClass = 'alert-danger';
        } else {
            //echo 'Passed';
            //set up mail recipient 
            $toEmail = 'zhunan@bu.edu';
            $subject = "Contact request from".$name;
            $body = '<h2>Contact Request</h2>
                <h4>name</h4><p>'.$name.'</p>
                <h4>email</h4><p>'.$email.'</p>
                <h4>message</h4><p>'.$message.'</p>
                ';

                //email headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "content-Type:text/html;charset=UTF-8" ."\r\n";
                
                //Additional headers
                if(mail($toEmail, $subject, $body, $headers)) {
                  //Email sent
                  $msg = 'Your email has sent';
                  $msgClass = 'alert-success';
                } else {
                  //Failed
                  $msg = 'Your message not sent...';
                  $msgClass = 'alert-danger' ;
                }
        }
      } else {
        //Failed
        $msg = 'Please fill in all fields...';
        $msgClass = 'alert-danger' ;
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">My Website</a>
        </div>
      </div>
    </nav>
    <div class="container">
        <?php if($msg != '') : ?> 
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <!-- isset output the name if name exist or output nothing-->
                <!--value is set to be the correct one and won't be affect by other wrong input-->
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
