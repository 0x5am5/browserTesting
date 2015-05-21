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
    .access {
      position: absolute;
      left: -9999px;
    }
  </style>

  <div class="wrap">
    <h1>Browser testing</h1>
    <p>Here i am testing </p>
    <form action="log.php">
      <label for="device">Device</label>
      <input type="text" id="device" name="device"/>
      <br>
      <label for="browser">Browser (Optional)</label>
      <input type="text" id="browser" name="browser"/>

      <input type="checkbox" selected="selected" class="access" name="checkbox"/>

      <input type="hidden" value="" name="window" id="widow-width">
      
      <input type="submit">
    </form>
    <p><b>Window width: </b>
    <script type="text/javascript">
        var windowWidth = window.innerWidth || screen.width,
            d = document;
      d.write(windowWidth);
      d.getElementById('widow-width').value = windowWidth;
    </script>
    </p>
  </div>
</body>
</html>