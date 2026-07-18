<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>An uncaught Exception was encountered</title>
	<style type="text/css">
	body { background-color: #fff; margin: 40px; font: 13px/20px normal Helvetica, Arial, sans-serif; color: #4F5155; }
	.container { margin: 10px; border: 1px solid #D0D0D0; box-shadow: 0 0 8px #D0D0D0; }
	.header { background-color: #ff4433; padding: 6px 10px; }
	.header h1 { color: #fff; font-size: 20px; margin: 0; }
	.header h2 { color: #fff; font-size: 15px; margin: 4px 0 0; font-weight: normal; }
	.meta { padding: 10px 15px; font-size: 13px; }
	pre.trace { background: #f9f9f9; border-top: 1px solid #D0D0D0; margin: 0; padding: 10px 15px; font-size: 12px; overflow: auto; white-space: pre-wrap; }
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>An uncaught Exception was encountered</h1>
			<h2><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></h2>
		</div>
		<p class="meta">
			<strong>File:</strong> <?php echo htmlspecialchars($exception->getFile(), ENT_QUOTES, 'UTF-8'); ?><br>
			<strong>Line:</strong> <?php echo (int) $exception->getLine(); ?>
		</p>
		<pre class="trace"><?php echo htmlspecialchars($exception->getTraceAsString(), ENT_QUOTES, 'UTF-8'); ?></pre>
	</div>
</body>
</html>
