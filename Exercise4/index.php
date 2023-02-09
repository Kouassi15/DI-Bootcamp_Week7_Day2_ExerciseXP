<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="https://www.google.com/search" method="get">
        
        <label for="recherche">recherche</label>
        <input type="text" id="searchQuery"name ="q">
        <input type="submit" name="submit" value="Submit">
   </form>
  <?php
   if(isset($_POST['submit']))
   {
      $q = $_POST['q'];
      echo "Rechercher";
   }
  ?>
</body>
</html>