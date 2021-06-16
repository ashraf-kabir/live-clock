<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  date_default_timezone_set('America/Los_Angeles');
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Date & Time</title>
</head>
<body>

  <div class="timezone">Timezone: <?=date_default_timezone_get();?></div><br>
  <div class="current_date">Current Date: <?=date('m/d/Y');?></div><br>
  <div>Current Time: <span class="timestamp"></span></div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      setInterval(timestamp, 1000);
    });

    function timestamp() {
      $.ajax({
        url: '/live_clock/timestamp.php',
        success: function(data) {
          $('.timestamp').html(data);
        },
      });
    }
  </script>
</body>
</html>
