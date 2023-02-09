<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
    <h1>Exercise 3 : Valid Integer.</h1>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="Submit">
    </form>
      <?php

      if(isset($_POST['submit']))
      {
        $number = $_POST['number'];
        echo "Le nombre integer est:";
      }
         function myFunction($value)
         {
            try{
                if(filter_var($value, FILTER_VALIDATE_INT)=== false){
                    throw new Exception("The valeu is not integer");
                    }else{

                        echo "validation complete";
                      }
                    }catch(Exception $e){
                        echo"Erro". $e->getMessage();
                    }finally{

                    }
                    }
                $value = 2;
                myFunction($value);
        
      ?>
</body>
</html>