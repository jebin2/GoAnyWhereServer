<?php
// header('Content-type: text/plain');
$con=mysqli_connect("localhost","jebin","JebinEinstein!1","temp");

    if (mysqli_connect_errno($con)) {
    	echo "Please try again later";
   }
   $From 	 = $_POST['from'];
	$To 	 = $_POST['to'];
	$Date 	 = $_POST['date'];
	$Day 	 = $_POST['day'];
	$Year 	 = $_POST['year'];
	$From 	 = "chennai";
	$To 	 = "tiruppattur";
   $sql = "SELECT * FROM busdetails";
	//$sql = "SELECT * FROM busdetails WHERE busdetails.from = '".$From."' and busdetails.to = '".$To."'";
   //"SELECT * FROM toho_shows WHERE toho_shows.show ='". $show. "'";
   if ($result=mysqli_query($con,$sql))
  {
  	// echo $result;
  // Fetch one and one row
  	$i=0;
  while ($row=mysqli_fetch_row($result))
    {
    	$totalrow[$i]->busid = $row[0];
    	$totalrow[$i]->busname = $row[1];
    	$totalrow[$i]->dtime = $row[2];
    	$totalrow[$i]->atime = $row[3];
    	$totalrow[$i]->boardingpoint = $row[4];
    	$totalrow[$i]->from = $row[5];
    	$totalrow[$i]->to = $row[6];
    	$i++;
    }
    	$totalrow1[details] = $totalrow;
  		echo json_encode($totalrow1);
}

?>
