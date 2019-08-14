
	<?php
	// This code is adapted from http://www.totallyphp.co.uk/scripts/random_image.htm

	$end= "64";

	//picks four random numbers between 20 and 65
	$start= "40";
	$random1 = mt_rand(20, 65);
	$random2 = mt_rand($start, $end);
	$random3 = mt_rand($start, $end);
	$random4 = mt_rand($start, $end);

	//use that number to create the names of images
	$image_name1= $random1 . ".jpg";
	$image_name2= $random2 . ".jpg";
	$image_name3= $random3 . ".jpg";
	$image_name4= $random4 . ".jpg";

	//print the images that have been selected
	print("<p><img src=\"images/$image_name1\" alt=\"$image_name1\"/></p>");
	print("<p><img src=\"images/$image_name2\" alt=\"$image_name2\"/></p>");
	print("<p><img src=\"images/$image_name3\" alt=\"$image_name3\"/></p>");
	print("<p><img src=\"images/$image_name4\" alt=\"$image_name4\"/></p>");

	?>
