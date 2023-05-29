<html>
   
   <head>
      <title>PhP Practical</title>
   </head>
   
   <body>


    <br>
    <h1>Please Input Your Name:</h1>
    <form method="post">
        <input type="text" name="name" value=" ">
        <input type="submit"  name="btngenarate" value="submit" />
        <h1>Hi my Name is :</h1>
        <?php
            if($_POST){
                $name = $_POST['name'];
                echo "<h1>$name</h1>";
            }
        ?>
    </form>


    </body>

</html>