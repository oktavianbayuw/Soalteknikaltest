<?php
	$string1  = "aabbckkkml";
   
   foreach (count_chars($string1, 1) as $i => $val)
    {
    echo chr($i). $val;
  }
?>