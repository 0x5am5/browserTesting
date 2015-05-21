<!DOCTYPE>
<html>
<head>
  <title>Browser Testing</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="wrap">
    <h1>Browser Testing</h1>
    <p>Here i am testing what a user is ACTUALLY using Vs what the browser tells me it is and log this information.</p>
    <p>Please fill in as much information as you can below...</p>
    <form action="log.php">
      <label for="device">Device</label>
      <input type="text" id="device" name="device"/>
      <br>
      <label for="browser">Browser (Optional)</label>
      <input type="text" id="browser" name="browser"/>
      <input type="checkbox" class="access" name="checkbox"/>
      <input type="hidden" value="" name="window" id="widow-width">
      <br>
      <input type="submit">
    </form>
    <footer>
      Website created by Sam Gregory.
    </footer>
  </div>
  <script type="text/javascript">
      var windowWidth = window.innerWidth || screen.width,
          d = document;
    d.getElementById('widow-width').value = windowWidth;
  </script>
</body>
</html>