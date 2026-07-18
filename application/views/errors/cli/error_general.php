<?php
	if ( ! isset($heading))
	{
		$heading = 'An Error Was Encountered';
	}

	fwrite(STDERR, $heading."\n\n".$message."\n");
