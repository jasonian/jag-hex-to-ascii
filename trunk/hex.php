<?php

if  (isset ($_POST['hex'])) {
	$output = hex2ascii($_POST['hex']);
	echo "ascii: " . $output;
}
echo "<html><head><title>Convert Hex to Ascii</text><body>";
echo "<form action='" . $_SERVER['PHP_SELF'] ."' method='post'>";
echo "<input name='hex' type='text' />";
echo "<input name='Convert' type='submit' />";
echo "</form>";
echo "</body></html>";


/********************************************
 Function Credit: 
 http://www.php.net/hexdec
 djneoform at gmail dot com
 20-Jun-2005 09:51
 
 Takes HEX strings (in ASCII) and converts 
 each two digit HEX code into it's ASCII 
 equivilent.
 
 See usage above

*********************************************/
function hex2ascii($str)
{
   $p = '';
   for ($i=0; $i < strlen($str); $i=$i+2)
   {
       $p .= chr(hexdec(substr($str, $i, 2)));
   }
   return $p;
}
?>