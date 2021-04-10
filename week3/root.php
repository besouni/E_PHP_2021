<!DOCTYPE html>
<html lang="en">
<head>
   <title>Root</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="root">
      <h2>Files</h2>
      <?php
         $root = scandir("root");
         for($i=2; $i<count($root); $i++){
            echo '<p><a href="root.php?file='.$i.'">'.$root[$i].'</a></p>';
         }
      ?>
   </div>
   <div class="info">
         <?php
            if(isset($_GET['file'])){
               $file = $_GET['file'];
               $file = "root/".$root[$file];
               $f = fopen($file, 'r');
               $finfo = fread($f, filesize($file));
               fclose($f);
               $posts = explode("===", $finfo);
            }
            if(count($posts)!=0){
               for($i=0; $i<count($posts)-1; $i++){
                  $post = explode("--", $posts[$i]);
                  echo "<p class='title'>$post[0]</p>";
                  echo "<p class='text'>$post[1]</p>";
                  echo "<p class='author'>$post[2] $post[3]</p>";
               }
            }
         ?>
   </div>
</body>
</html>