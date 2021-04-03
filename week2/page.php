<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHP 2</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
      <h1>PHP 2</h1>
      <hr>
      <h3>Validation</h3>
      <?php
         $error = [
            'user'=>[
               "",
               ""
            ],
            'pass'=>[
               "",
               ""
            ]
         ];

         if (isset($_POST['user']))
         {
            $user = $_POST['user'];
            if(empty($user)){
               $error['user'][0] = "ველი ცარიელია!!";
            }
            if(strlen($user)<3){
               $error['user'][1] = "მონაცემი არასწორია!!";
            }
         }

         if (isset($_POST['pass']))
         {
            $pass = $_POST['pass'];
            if(empty($pass)){
               $error['pass'][0] = "ველი ცარიელია!!";
            }
            if(strlen($pass)<3){
               $error['pass'][1] = "მონაცემი არასწორია!!";
            }
         }
   
      ?>
      <form method="post">
         <input type="text" name="user">  <label><?=$error['user'][0]?></label> <label><?=$error['user'][1]?></label>
         <br><br>
         <input type="password" name="pass">  <label><?=$error['pass'][0]?></label> <label><?=$error['pass'][1]?></label>
         <br><br>
         <button>SEND</button>
      </form>
      <hr>
      <h3>Multidimensional Arrays</h3>
      <?php
         $m_m = [ 'saxeli'=>"Nika", 
                  'gvari'=>"Baqradze", 
                  'asaki'=>21,
                  204,
                  "Informatika",
                  'skola'=>[
                     'saxelwodeba'=>77,
                     5,
                     'direqtori'=>[
                        "Daviti",
                        "Dvali"
                     ]
                  ], 
                  'gadasaxadi'=>2250
               ];
        echo "<pre>";
        print_r($m_m);
        echo "</pre>";
        echo $m_m['skola'][0];
        echo "<br>";
        echo $m_m['skola']['direqtori'][1];
      ?>
      <hr>
      <h3>Indexed Arrays</h3>
      <?php
         $m = ["nika", 23, 29.7, "baqradze"];
         print_r($m);
         $n = array("nika", 23, 29.7, "baqradze");
         echo "<br>";
         print_r($n);
      ?>
      <hr>
      <h3>Associative Arrays</h3>
      <?php
         $m_a = ["Nika", "baqradze", 21, 2250];
         print_r($m_a);
         echo "<br>";
         echo $m_a[2];
         $m_aa = ['saxeli'=>"Nika", 'gvari'=>"Baqradze", 'asaki'=>21, 'gadasaxadi'=>2250];
         echo "<br>";
         print_r($m_aa);
         echo "<br>";
         echo $m_aa['asaki'];
      ?>
   </main>
</body>
</html>