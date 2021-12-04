<?php

	$text = 10;

	foreach ($_POST as $k => $v) {
		$text .= $k. '=>' .$v;
	}

	file_put_contents("text.txt", $text)

	echo "10";