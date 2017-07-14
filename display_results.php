<?php

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);

  $heard_from = filter_input(INPUT_POST, 'heard_from');
  if ($heard_from == NULL){
      $heard_from = 'Unknown' ; 
  }
  
  $wants_updates = isset($_POST['wants_updates']);
   
  if ($wants_updates == TRUE){
      $wants_updates = 'Yes' ; 
    else
      $wants_updates = 'No';
  } 
  
  $contact_via = filter_input(INPUT_POST, 'contact_via');
  $comments = filter_input(INPUT_POST, 'comments');
  $comments = nl2br($comments, false);
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Heard From:</label>
        <span><?php echo $heard_from; ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo $wants_updates; ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo $contact_via; ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo htmlspecialchars($comments); ?></span><br>        
    </main>
</body>
</html>