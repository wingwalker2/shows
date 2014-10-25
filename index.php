<?php include('config/setup.php'); ?>

<!DOCTYPE httml>
<html>
	<head>
		<title><?php echo $site_title; ?></title>

		<?php include('config/css.php'); ?>

	
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include('config/js.php'); ?>
		<?php include(DIR_TEMPLATE . '/header.php'); ?>
		<?php include(DIR_TEMPLATE . '/navigation.php'); ?>

		<div class="container">
#			<h1><?php echo $page['header']; ?></h1>
			<?php echo $page['body_formated']; ?>
			
			<?php if(isset($_GET['debug']) == 1) { ?>
				<pre>
					<?php print_r($page); ?>
				</pre>
			<?php } ?>
		</div>
		<?php if(isset($msg)) { ?>
			<p>
				<?php echo $msg; ?>
			</p>
		<?php } ?>
		<?php include(DIR_TEMPLATE . '/footer.php'); ?>
		<div id="console-debug">
			Test debug window
		</div>
		<?php
			if (window.jQuery) {  
				echo "<p>jquery loaded.</p>";  
			}
		?>
	</body>
</html>