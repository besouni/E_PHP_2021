<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHP 1</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
      <h1>PHP 1</h1>
      <hr>
      <?php
          echo "Hello PHP";
          $n = 24;
          echo "<br>";
          echo $n+23;
          echo "<h4>This is HTML tag</h4>";
      ?>
      <hr>
      <p>
         <a href="?x=10&y=98">This Page With Variables</a>
      </p>
      <?php
         echo "<h3>GET Variables</h3>";
         if(isset($_GET['x'])){
            echo "x=".$_GET['x'];
         } 
         echo "<br>";
         if(isset($_GET['y'])){
            echo "y=".$_GET['y'];
         }
      ?>
      <hr>
      <a href="?">Refresh PAGE</a>
      <br><br>
      <form method="post">
         <input type="text" name="userName">
         <br><br>
         <input type="password" name="userPassword">
         <br><br>
         <button>POST METHOD</button>
      </form>
      <?php
         echo "<h3>POST from Form</h3>";
         if(isset($_POST['userName'])){
            echo "userName=".$_POST['userName'];
         } 
         echo "<br>";
         if(isset($_POST['userPassword'])){
            echo "userPassword=".$_POST['userPassword'];
         }
      ?>
      <hr>
      <form method="get">
         <input type="text" name="userName">
         <br><br>
         <input type="password" name="userPassword">
         <br><br>
         <button>GET METHOD</button>
      </form>
      <?php
         echo "<h3>GET from Form</h3>";
         if(isset($_GET['userName'])){
            echo "userName=".$_GET['userName'];
         } 
         echo "<br>";
         if(isset($_GET['userPassword'])){
            echo "userPassword=".$_GET['userPassword'];
         }
      ?>
      <hr>
   </main>
</body>
</html>