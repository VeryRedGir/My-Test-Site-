<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
$photoArray = array(
  'AliceRequestforZero' => array(
		'name' => 'Alice',
		'date' => 'June 30th, 2012',
		'url' = 'http://i599.photobucket.com/albums/tt73/VeryRedGir/AliceRequestforZero.png'
		'description' => 'A request that I did for Zero'
	),
	'Another Photo' => array(
		'name' => 'Spring Afternoon',
		'date' => 'May 11th, 2012',
		'url' => 'http://www.deviantart.com/download/301374098/spring_afternoon_by_veryredgir-d4zfhqq.png',
		'description' => 'A nice spring afternoon'
	)
);
?>

<html>
  <table border="1">
   <tr> 
     <td colspan="2"><h1 align="center>"><p><u><center>Finished Art</center></u></p></h1></td>
   </tr>  
   <tr>
   <?php
   foreach(array_keys($photoArray) as $photo){
   	   $imageData = getimagesize($photoArray['url']);
   	   $height = $imageData[1]/2;
   	   $width = $imageData[0]/2;
	   echo "<td><h2 align='center'><p>".$photoArray['date']."</p></h2>\n";
	   echo "<img src='".$photoArray['url']."' height='".$height."' width='".$width"' /></td>";
   }
   ?> 
     </td>   
   </tr>    
</table>
    
    
</html>    