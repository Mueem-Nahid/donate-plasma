<!DOCTYPE html>

	<head>
		<title>Donate The Plasma</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Plasma Donation Website">
        <meta name="author" content="mueem">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	</head>



<?php
						include 'include/config.php';

						session_start();
                        session_destroy();
						$_SESSION[''] = "";

						if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){
							include 'include/adminnav.php';
						}else{
							header("Location: index.php");
						}
?>


<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donor List</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>

<div class="container" style="padding: 60px 0;">
	<div class="row data">

		<?php

				$sql = "SELECT * FROM donor";

				$result = mysqli_query($connection,$sql);

				if(mysqli_num_rows($result)>0){

					while($row = mysqli_fetch_assoc($result)) {

						$url = $row  ['link'];

						if($row['save_life_date']=='0'){

							echo'

							<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
									<span> <img class="img-responsive" width="100" height="130" src="images/'.$row['image'].'" /> </span>
									<span class="name"> '.$row['name'].' </span>
									<span> '.$row['city'].' </span>
									<span> '.$row['blood_group'].' </span>
									<span> '.$row['gender'].' </span>
									<span> '.$row['email'].' </span>
									<span> '.$row['contact_no'].' </span>
									<span> <a href="'.$url.'" >Facebook profile</a> </span>
									<span> '.$row['Rname'].' </span>
									<span> '.$row['Rcontact'].' </span>
							</div>
							';

						}else{

							$date = $row['save_life_date'];
							$start = date_create("$date");
							$end = date_create();
							$diff = date_diff($start, $end);

							$diffDay = $diff->d;

							if( $diffDay >= 7 ){


								echo'
								<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
										<span> <img  width="100" height="130" src="images/'.$row['image'].'" /> </span>
										<span class="name"> '.$row['name'].' </span>
										<span> '.$row['city'].' </span>
										<span> '.$row['blood_group'].' </span>
										<span> '.$row['gender'].' </span>
										<span> '.$row['email'].' </span>
										<span> '.$row['contact_no'].' </span>
										<span> <a href="'.$url.'" >Facebook profile</a> </span>
										<span> '.$row['Rname'].' </span>
										<span> '.$row['Rcontact'].' </span>
								</div>
								';

							}else{

								echo'
								<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
										<span> <img  width="100" height="130" src="images/'.$row['image'].'" /> </span>
										<span class="name"> '.$row['name'].' </span>
										<span> '.$row['city'].' </span>
										<span> '.$row['blood_group'].' </span>
										<span> '.$row['gender'].' </span>
										<span> '.$row['email'].' </span>
										<span> '.$row['contact_no'].' </span>
										<span> <a href="'.$url.'" >Facebook profile</a> </span>
										<span> '.$row['Rname'].' </span>
										<span> '.$row['Rcontact'].' </span>
										<hd class="name text-center">Donated</hd>
								</div>
								';

							}
						}
					}

				}else{
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		   <strong>Data not found.</strong>
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		     <span aria-hidden="true">&times;</span>
		   </button>
		 </div>';
				}

		 ?>

	</div>
</div>


<?php

	include ('include/footer.php');

?>
