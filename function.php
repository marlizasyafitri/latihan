<?php
function recursion ($a = 10)
{
	if ($a < 20)
	{
		echo "$a\n";
		recursion ($a + 1);
	}
	
}
?>