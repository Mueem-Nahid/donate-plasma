<?php

	include ('include/header.php');

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
			<h1 class="text-center">Donors</h1>
			<hr class="white-bar">
			<h2 style="color:white" class="text-center">Contact with your near by donors of your place.</h2>
		</div>
	</div>
</div>

<!--
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Are you delete this record?</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form target="" method="post">
                <br>
                <input type="hidden" name="delId" value="">
                <button type="submit" name="delete" class="btn btn-danger">Yes</button>

                <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
                </button>
            </form>
     </div>

     <br>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->

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
