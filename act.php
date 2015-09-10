<?php
  	session_start();
  	include("connect_db.php");

	if(isset($_POST['submit_contract']))
	{
		$handle = fopen('contracts.csv', "r");
		$i=0;
		$sql ="truncate table contracts";
		mysql_query($sql) or die(mysql_error());

		while(($data = fgetcsv($handle,1000,","))!==FALSE)
		{
			if($i>0)
			{
				$sql="insert into contracts values('". $data[0]."','". $data[1]."','". $data[2]."','". $data[3]."','". $data[4]."','". $data[5]."','". $data[6]."','". $data[7]."')";

				mysql_query($sql) or die(mysql_error());
			}
			$i++;
		}
		fclose($handle);
		$_SESSION['contractsMsg']="Import of contracts into database successful";
		

	}

	if(isset($_POST['submit_award']))
	{
		
		$handle = fopen("awards.csv", "r");
		$i=0;
		while(($data = fgetcsv($handle,1000,","))!==FALSE)
		{
			if($i>0)
			{
				$sql="insert into awards values('". $data[0]."','". $data[1]."','". $data[2]."','". $data[3]."','". $data[4]."','". $data[5]."')";

				mysql_query($sql) or die(mysql_error());
			}
			$i++;
		}
		fclose($handle);
		$_SESSION['awardsMsg']="Import of awards into database successful";

	}

	header("Location:index.php");

?>
