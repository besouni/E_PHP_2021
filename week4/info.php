<?php
   include "blocks/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>INFO</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <header></header>
   <main>
      <nav>
         <ul>
            <li><a href="info.php">HOME</a></li>
            <li><a href="?action=insert">INSERT</a></li>
         </ul>
      </nav>
      <div class="content">
         <?php
            if(isset($_GET["action"])&&$_GET["action"]=="insert"){
               include "blocks/insert.php";
            }else{
               include "blocks/info.php";
            }
         ?>
      </div>
   </main>
   <footer></footer>
</body>
</html>