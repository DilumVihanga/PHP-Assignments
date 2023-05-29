<html>
   
   <head>
      <title>PhP Practical</title>
   </head>
   
   <body>

      <form method="post">
      <input type="submit"  name="btngenarate" value="genarate" />
      </form>
      <?php
      echo "Click the Button to genarate randum number Between 1-10 <br>";
      if(isset($_POST['btngenarate'])) {
         genarate();
      }
      function genarate(){
         echo("<br>".rand(1,10)."<br>");
      }
      ?>
      </form> 
      



   </body>

</html>