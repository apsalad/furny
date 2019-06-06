<!DOCTYPE html>
<?php session_start(); ?>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="/css/indexcss.css">
	<!--link rel="stylesheet" type="text/css" href="banner.xml"-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

	<link href="/js/toastr.css" rel="stylesheet"/>
	<script type="text/javascript" src="/js/toastr.min.js"></script>

	<title>Furny:)</title>
</head>
<body>


<script>
toastr.options = {
					"closeButton": true,
					"debug": false,
					"newestOnTop": true,
					"progressBar": false,
					"positionClass": "toast-top-right",
					"preventDuplicates": true,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "3000",
					"extendedTimeOut": "2000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}
	//alert('');
</script>

<?php if(isset($_SESSION['success'])){ ?>
<script>
	toastr.success("<?php echo $_SESSION['success']; ?>");
</script>
<?php
		unset($_SESSION['success']);
			}
?>

<?php if(isset($_SESSION['warning'])){ ?>
<script>
	toastr.warning("<?php echo $_SESSION['warning']; ?>");
</script>
<?php
		unset($_SESSION['warning']);
			}
?>

<?php if(isset($_SESSION['info'])){ ?>
<script>
	toastr.info("<?php echo $_SESSION['info']; ?>");
</script>
<?php
		unset($_SESSION['info']);
			}
?>

<?php if(isset($_SESSION['danger'])){ ?>
<script>
	toastr.success("<?php echo $_SESSION['danger']; ?>");
</script>
<?php
		unset($_SESSION['danger']);
			}
?>
