<!DOCTYPE>
<html>
<head>
  <title>Test page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <style type="text/css">
    .wrap {
      max-width: 970px;
      background: #ccc; 
      margin:0 auto;
    }
  </style>

  <div class="wrap">
    <h1>Here is some stuff to send</h1>
    <p>It has also been logged!</p>
    <p>
      <?php 
          $useragent = $_SERVER['HTTP_USER_AGENT'] . "\r\n";
          $device = $_GET['device'];
          $browser = $_GET['browser'];

          if (strlen($device)>0) { $message = "Device: " . $device . "\r\n"; }
          if (strlen($browser)>0) { $message = $message . "Browser: " . $browser . "\r\n"; }
          $message = $message . "Window Width: " . $_GET['window'] . "\r\n";
          $message = $message . "User Agent: " . $useragent . "\r\n"; 
          $message = $message .  "--------------\r\n";
          
          file_put_contents("log.txt", $message, FILE_APPEND);
         ?>
    </p>
    <p>
      <?php if (strlen($device)>0) { ?>
        <b>Device:</b> <?php echo $device; ?> <br>
      <?php } ?>
      <?php if (strlen($browser)>0) { ?>
        <b>Browser:</b> <?php echo $browser; ?> <br>
      <?php } ?>
      <b>User Agent:</b> <?php echo $useragent; ?>
    </p>

    <p>
      <b>Window width: </b>
      <script type="text/javascript">
      document.write(window.innerWidth);
      </script>
    </p>
  </div>
</body>
</html>