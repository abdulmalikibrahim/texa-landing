<?php
	if ( ! isset($heading))
	{
		$heading = 'Database Error';
	}

	fwrite(STDERR, $heading."\n\n".$message."\n");
