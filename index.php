<?php

require_once 'vendor/start.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<title>Easy Ship Me</title>

	<link rel="stylesheet" type="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
	body {

		margin: 100px auto;
		width: 400px;
		text-align: center;

	}
	</style>
</head>
<body>
<h2>Easy Ship Me</h2>

<?php if (!isset($_SESSION['facebook'])): ?>

	<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Inicar Sesi&oacute;n con Facebook!</a>

<?php else: ?>

	<p>Bienvenido, <?php echo $facebook_user->getName(); ?>
	</p>
	<a href="vendor/logout.php" class="btn btn-danger">Cerrar Sesi&oacute;n</a>

<?php endif; ?>

</body>
</html>

