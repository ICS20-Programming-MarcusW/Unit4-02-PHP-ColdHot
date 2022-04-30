<!DOCTYPE html>
<html lang="en-ca">
   <head>
      <!-- Metadata -->
      <meta charset="utf-8">
      <meta name="description" content="If/Else Statements, with PHP">
      <meta name="keywords" content="immaculata, ics2o">
      <meta name="author" content="Marcus Wehbi">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Code for the favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
      <link rel="manifest" href="./favicon/site.webmanifest">
      <!-- Link to CSS file -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Title -->
      <title>Cold vs. Warm Temperatures</title>
   </head>
   <body>
      <!-- php echo to print the html to the page -->
      <?php 
         echo "<h1>Is it Cold or Warm?</h1>";
         echo "<h3>Enter a Temperature (°C):</h3>";
         ?>
      <!-- form to get the users temperature -->
      <form action="./results.php" method="post" target="results">
         <label for="tempInput">Temperature (°C):</label>
         <input type="number" id="userTemp" step="1" placeholder="0 °C" name="userTemp"><br><br>
         <input type="submit" value="Display Number">
      </form>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results"></iframe>
   </body>
</html>