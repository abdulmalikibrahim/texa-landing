<?php

	fwrite(STDERR, 'An uncaught Exception was encountered'."\n\n"
		.$message."\n"
		.'File: '.$exception->getFile()."\n"
		.'Line: '.$exception->getLine()."\n\n"
		.$exception->getTraceAsString()."\n"
	);
