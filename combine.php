<?php
	include("connect_db.php");

	mysql_query("truncate table final") or die(mysql_error());

	$select="select distinct contracts.contractname, contracts.status, contracts.bidPurchaseDeadline,	contracts.bidSubmissionDeadline,	contracts.bidOpeningDate,	contracts.tenderid,	contracts.publicationDate,	contracts.publishedIn, awards.contractDate,	awards.completionDate,	awards.awardee,	awards.awardeeLocation,	awards.Amount from contracts left join awards on contracts.contractname = awards.contractname";
	

	$sql = "insert into final (contractname, status, bidPurchaseDeadline, bidSubmissionDeadline, bidOpeningDate, tenderid, publicationDate, publishedIn, contractDate, completionDate, awardee, awardeeLocation, Amount) ".$select." ";
	mysql_query($sql) or die(mysql_error());

	$sql = "select * from final";



	$res=mysql_query($sql) or die(mysql_error());
	$line =array();
	while($row=mysql_fetch_assoc($res))
	{
		$line[] = $row;
	}

	
	$arrKeys =  array_keys($line[0]);
	if(!empty($arrKeys))
	{
		array_unshift($line, $arrKeys);
		if(file_exists("final.csv"))
		{
			unlink("final.csv");exit;
		}
		$file =fopen("final.csv","w");
		foreach ($line as  $data) {
		
			fputcsv($file, $data);
		}
	}

	header("Location:final.php");
?>
