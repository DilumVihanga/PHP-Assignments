<html>
   
   <head>
      <title>PhP Practical</title>
   </head>
   
   <body>


    <br>
    <h1>Please Input Your Name:</h1>
    <form method="post">
        <input type="text" name="number" value=" ">
        <input type="submit"  name="btngenarate" value="submit" />

        <?php
            if($_POST){
                $num = $_POST['number'];

                if($num%2==0){
                    echo "<h1>$num is an Even Number</h1>";
                }else{
                    echo "<h1>$num is an Odd Number</h1>";
                }   
            }
        ?>
    </form>


    </body>

</html>