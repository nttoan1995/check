<?php
   ob_start();
   session_start();
?>

<?php
   $array = array(
      "dklch30dcd38e5a"=>["Le Duong Tuan Anh", 2],
      "dklchdbf89b3361"=>["Pham Anh Quoc", 2],
      "dklch56231d3385"=>["Le Thanh Binh", 1],
      "dklchd76b5cf399"=>["Vu Duy Khanh",1],
      "dklch94abf4cb32"=>["Tran Trung Hieu", 2],
      "dklch22a77d8638"=>["Vo Thi My Ny",1],
      "dklch99b858d35b"=>["Vo Thinh Chuan", 2],
      "dklche46f83710b"=>["Vo Thi Ngoc Duyen",1],
      "dklcha1aeddb6fd"=>["Bui Chi Dung", 2],
      "dklch4e05e7a4d8"=>["Le Van Hai", 1],
      "dklch71f51e7d68"=>["Pham Minh Hoang", 2],
      "dklch8095230438"=>["Tran Hao Nam", 1],
      "dklch1538cc1445"=>["Huynh Viet Tham", 2],
      "dklch0bdd0eff6d"=>["Hoang Thien Nu", 2],
      "dklch67c910d6a5"=>["Do Huu Nhat Nguyen", 2],
      "dklchcc3b731629"=>["Dao Hong Nho", 2],
      "dklch1561082a6f"=>["Nguyen Thi My Tien", 1],
      "dklchf5bf948559"=>["Tran Kien Quoc", 2],
      "dklchda29902246"=>["Truong Minh An", 1],
      "dklchfce0f40d05"=>["Vo Truong An", 1],
      "dklch826a2bb23b"=>["Tran Quang Huy", 1],
      "dklch409d48cc47"=>["Pham Dang Dang Khoa", 1]
   );

   $team = array(
      2,
      2,
      2,
      1,
      1,
      1,
      2,
      1,
      1,
      1,
      2,
      1,
      2,
      2,
      2,
      2,
      1,
      2,
      1,
      1,
      2,
      1
   );

   $msg = ""   
?>


<html lang = "en">
   
   <head>
   <title>Đoàn khoa - Liên chi hội Khoa CNTT</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
   
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
   <div class="limiter">
      <?php
         function checkPassword($password, $array) {
            return array_key_exists($password, $array);
         }
         if (!empty($_POST['password'])) {
            if (checkPassword($_POST['password'], $array)) {   
               $msg =  'Hi ' . $array[$_POST['password']][0] . ".<br/>You belong to team " . $array[$_POST['password']][1];
            }else {
               $msg = 'Wrong code';
            }
         }
      ?>
      <div class="container-login100">
            <div class="login100-pic js-tilt" data-tilt>
               <img src="images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
               <div class="wrap-input100 validate-input" data-validate = "Password is required">
                  <input class="input100" type="password" name="password" placeholder="What's your code?">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                     <i class="fa fa-lock" aria-hidden="true"></i>
                  </span>
               </div>
               
               <div class="container-login100-form-btn">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">
                     Find Team!
                  </button>
               </div>
               <div style="text-align: center">
                  <br/>
                  <span style="color: white">
                     <?php echo $msg ?>
                  </span>
               </div>  
            </form>
         </div>
   </div>
   


</body>
</html>
