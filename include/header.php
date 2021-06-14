<!DOCTYPE html>

	<head>
		<title>Donate Plasma</title>
		<meta charset="utf-8">

        <meta name="google-site-verification" content="rk9g-Sg34_uYrCUsnSoOilfKeN2D-GCdYHLsw2pluJA" >

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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>



<?php
						include 'config.php';

						session_start();

						if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){
							include 'usernav.php';
						}else{
							include 'navigation.php';
						}
?>
