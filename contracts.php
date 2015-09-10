  <?php
    if($file=fopen("contracts.csv", "r"))
    {


      echo ('<table border="1">');
      while(!feof($file))
      {
      		
        $line= array();
      	$line = fgetcsv($file);
        $i=0;
      	echo "<tr>";
        	foreach ($line as $value)
          {
            echo "<td>" .$value. "</td>";
          } 
      	echo "</tr>";
      }
      echo '</table>';
      fclose($file);
    }

    else
    {
      echo '<p style="color:#f00;"><b>ERROR: </b>contracts.csv does not exist...';
    }
  ?>
