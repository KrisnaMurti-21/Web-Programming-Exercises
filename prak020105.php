<html>
 	<head>Headings</head>
 	<body>
 	<?php
     $i = 0;
 		do {
            $i++; 
            if($i % 2 == 0 ){
                echo "<h".$i." style = 'color : red'>Heading ".$i."</h".$i.">";
             } else {
                echo "<h".$i.">Heading ".$i."</h".$i.">";
             }
 			
 		} while ($i <= 6);
 	?>
 	</body>
</html>