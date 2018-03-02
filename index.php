<?php
   ob_start();
   session_start();
?>

<?php
   $array = array(
      "dklch30dcd38e5a"=>["Le Duong Tuan Anh", 2],
      "dklchdbf89b3361"=>["Pham Anh Quoc", 2],
      "dklch56231d3385"=>["Le Thanh Binh", 2],
      "dklchd76b5cf399"=>["Vu Duy Khanh",1],
      "dklch94abf4cb32"=>["Tran Trung Hieu", 1],
      "dklch22a77d8638"=>["Vo Thi My Ny",1],
      "dklch99b858d35b"=>["Vo Thinh Chuan", 2],
      "dklche46f83710b"=>["Vo Thi Ngoc Duyen",1],
      "dklcha1aeddb6fd"=>["Bui Chi Dung", 1],
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
      "dklch826a2bb23b"=>["Tran Quang Huy", 2],
      "dklch409d48cc47"=>["Pham Dang Dang Khoa", 1]
   );
   $passcode = array(
		"Le Duong Tuan Anh"=>"20312200303030012101203121003030320121103111201",
		"Pham Anh Quoc"=>"20312201210120212120320032112020303030303120301",
		"Le Thanh Binh"=>"20312200311031203020303030112100303030303200311",
		"Vu Duy Khanh"=>"20312201210031303121202031112031212030303210321",
		"Tran Trung Hieu"=>"20312200321031012011202121203101203120203030302",
		"Vo Thi My Ny"=>"20312200302030212010313031312100320031203030320",
		"Vo Thinh Chuan"=>"20312200321032112020320031103201210030303111202",
		"Vo Thi Ngoc Duyen"=>"20312201211031003121212032003030313030103001202",
		"Bui Chi Dung"=>"20312201201030112011211121012101202031212121210",
		"Le Van Hai"=>"20312200310121103000311121103131201031012100320",
		"Pham Minh Hoang"=>"20312200313030112120311030112110313121003120320",
		"Tran Hao Nam"=>"20312200320030003210311030203030300031003030320",
		"Huynh Viet Tham"=>"20312200301031103030320120312030301031003100311",
		"Hoang Thien Nu"=>"20312200300120212101210030012111212121203121210",
		"Do Huu Nhat Nguyen"=>"20312200312031312030321030103001210031212010311",
		"Dao Hong Nho"=>"20312201203120303031202031303030301031203020321",
		"Nguyen Thi My Tien"=>"20312200301031103120301030003200302120103121212",
		"Tran Kien Quoc"=>"20312201212031112021212032103100320031103110321",
		"Truong Minh An"=>"20312201210120103020321032103000302030203100312",
		"Vo Truong An"=>"20312201212120312110300121203100300121003000311",
		"Tran Quang Huy"=>"20312200320030203121201030212021202030203031202",
		"Pham Dang Dang Khoa"=>"20312200310030003211210031003201203120303100313"
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
         function checkExists($key, $dict) {
            return array_key_exists($key, $dict);
		 }
		 
         if (!empty($_POST['password'])) {
            if (checkExists($_POST['password'], $array)) {   
               $msg =  'Hi <b><span style="color: yellow; ">' . $array[$_POST['password']][0] . "</span></b>.<br/>You belong to team <b>" . $array[$_POST['password']][1] . '</b>';
            }else {
				if (checkExists($_POST['password'], $passcode)) {
					$msg = 'Welcome <b><span style="color: yellow; ">' . $_POST['password'] . '</span></b> to the game!<br/>Your key is: <b>' . $passcode[$_POST['password']] . '</b><br/><i><b>Hint:</b> If you think you are close but it is not working, try adding a leading 1!</i>';
				}
				else{
					$msg = 'Anh là ai? Tôi không biết! Anh đi ra đi!';
				}
            }
         }
         else{
               $msg = '';
         }
      ?>
	  
      <div class="container-login100" style="text-align: center">
			<row>
				<div style="width: 100%">
					<h1 style="color: white">Quartenary</h2><br/> 
					<h3 style="color: white">What is the flag?</h2>
				<div>
			</row>
			<hr/>

			<div class="login100-pic js-tilt" data-tilt style="width: 100%">
               <img src="images/img-01.png" alt="IMG">
            </div>
            <form style="padding-top: 20px; width: 100%" class="login100-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                  <div style="text-align: center; padding-bottom: 10px">
                        <span style="color: white">
                              Your Name/Passcode?
                        </span>
                        
                  </div>  

               <div class="wrap-input100 validate-input" data-validate = "Required!">
                  <input class="input100" name="password" placeholder="Enter here...">
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
