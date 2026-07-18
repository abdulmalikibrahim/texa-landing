<?php
	if ( ! isset($heading))
	{
		$heading = 'Not Found';
	}

	if ( ! isset($message))
	{
		$message = 'The controller/method pair you requested was not found.';
	}

	fwrite(STDERR, $heading."\n\n".$message."\n");
