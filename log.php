<?php 
  $useragent = $_SERVER['HTTP_USER_AGENT'] . "\r\n";
  $device = $_GET['device'];
  $browser = $_GET['browser'];

  if ($GET['checkbox'] === false) {
    if (strlen($device)>0) { $message = "Device: " . $device . "\r\n"; }
    if (strlen($browser)>0) { $message = $message . "Browser: " . $browser . "\r\n"; }
    $message = $message . "Window Width: " . $_GET['window'] . "\r\n";
    $message = $message . "User Agent: " . $useragent . "\r\n"; 
    $message = $message .  "--------------\r\n";
            
    file_put_contents("log.txt", $message, FILE_APPEND);
  }

?>

<!DOCTYPE>
<html>
<head>
  <title>Browser Testing</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="wrap">
    <h1>Browser Testing - Results</h1>
    <p>Here you can see what the browser is telling me it is Vs the information you know yourself to be true.</p>
    <div class="results">
      <?php if (strlen($device)>0 || strlen($browser)>0) { ?>
        <h2>What you told me...</h2>
      <?php } else { ?>
        <h2>You didn't tell me anything :( (No worries)</h2>
      <?php } ?>
      <?php if (strlen($device)>0) { ?>
      <p>
        <b>Device:</b> <?php echo $device; ?>
      </p>
      <?php } ?>
      <?php if (strlen($browser)>0) { ?>
      <p>
        <b>Browser:</b> <?php echo $browser; ?> <br>
      </p>
      <?php } ?>
      <h2>Here's what the browser is telling me it is...</h2>
      <p>
        <?php echo $useragent; ?>
      </p>
    </div>    
    <footer>
      Website created by Sam Gregory.
    </footer>
  </div>
</body>
</html>