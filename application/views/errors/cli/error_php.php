<?php

	fwrite(STDERR, 'A PHP Error was encountered'."\n\n"
		.'Severity: '.$severity."\n"
		.'Message: '.$message."\n"
		.'Filename: '.$filepath."\n"
		.'Line Number: '.$line."\n"
	);
