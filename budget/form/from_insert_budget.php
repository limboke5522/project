<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD PROJECT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="../budget_insert.php" id="formUser" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
				ADD BUDGET
				</span>



				<?php
					include '../../cn_db.php';

					$namepj=$_GET['name_pj'];


					$sql = "SELECT list_pj_bg FROM budget WHERE list_pj_bg = '$namepj' ";
					$stm = $con->prepare($sql);

					
					$stm->execute();

					$row = $stm->fetch(PDO::FETCH_ASSOC);
					

					
					

				?>

				<label class="label-input100" >List  Project</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="list_pj_bg" value="<?php echo $namepj; ?>" readonly>
					<span class="focus-input100"></span>
				</div>



				<label class="label-input100" for="first-name">Doc No. *</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="doc_no" placeholder="Documents NO.">
					<span class="focus-input100"></span>
				</div>
				
				

				<label class="label-input100" >List Budget *</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="list" placeholder="List Project">
					<span class="focus-input100"></span>
				</div>

				
				<div>
				<label class="label-input100" for="first-name">Revenue *</label>
				<div class="wrap-input100  validate-input">
					<input id="first-name" class="input100" type="text" name="revenue" placeholder="0.00">
					<span class="focus-input100"></span>
				</div>
				</div>
				<div>
				<label class="label-input100" for="first-name">Expenditure *</label>
				<div class="wrap-input100  validate-input">
					<input class="input100" type="text" name="expenditure" placeholder="0.00">
					<span class="focus-input100"></span>
				</div></div>

				<div>
				
				<label class="label-input100" for="first-name">Date *</label>
				<div class="wrap-input100  validate-input">
				<input type="date" id="start" name="date"
					value="DATE TIME"
					>

					<span class="focus-input100"></span>
				</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
