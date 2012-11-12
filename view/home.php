<!DOCTYPE html>
<html>
<head>
	<style>
		body { 
			font-family: 'Segoe UI', Arial, Helvetica, sans-serif; 
			font-size:14px;
		}
	</style>
</head>
<body>
<h1>Hey, it works!</h1>
<p><?php echo $hello; ?></p>
<p>Go to <a href="<?php echo $this->location('subcontroller'); ?>">Subcontroller home</a> or go to default <a href="<?php echo $this->location(); ?>">controller</a>.
<?php 
	$executionTime = $this->getExecutionTime(); 
	$pagePerSecond = 1000/$executionTime;
?>
<p>This page is a "hello world" page from PanadaLite Framework. <br />
This page is generated in <strong><?php echo sprintf( "%.5f", $executionTime ); ?></strong> seconds. <br />
Current web server performance in generating this page is <strong><?php echo sprintf( "%d", $pagePerSecond ); ?></strong> pages per second.</p>
</body>
</html>