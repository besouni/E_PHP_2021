<!DOCTYPE html>
<html lang="en">
<head>
   <title>Upload</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="upload">
      <?php
         if(isset($_GET['folder'])){
            mkdir("root");
            header('location:page.php');
         }
      ?>
      <p>
         <?php
            if(is_dir('root')){
               echo  '<a target="new" href="root.php">Root Folder is here</a>';
            }else{
               echo '<a href="page.php?folder=root">Make Root Folder</a>';
            }
         ?> 
      </p>
      <?php
         $file_size_error = "";
         $file_type_error = "";
         if(isset($_POST['upload'])){
            $file = $_FILES['file'];
            $file_size = $file['size'];
            if($file_size > 10*1024*1024){
               $file_size_error = "File size Error!!!";
            }
            $file_type = pathinfo($file['name'], PATHINFO_EXTENSION);
            if($file_type!='txt'){
               $file_type_error = "File Type Error!!!";
            }
            if(empty($file_size_error)&&empty($file_type_error)){
               date_default_timezone_set("Asia/Tbilisi");
               $file_patch = "root/".date('Y-m-d-h-i-sa').'.txt';
               move_uploaded_file($file['tmp_name'], $file_patch);
            }
         }
      ?>
      <p>
         <?=$file_size_error?>
      </p>
      <p>
         <?=$file_type_error?>
      </p>
      <form method="post" enctype="multipart/form-data">
         <input type="file" name="file">
         <br><br>
         <button name="upload">Upload File</button>
      </form>   
   </div>
</body>
</html>