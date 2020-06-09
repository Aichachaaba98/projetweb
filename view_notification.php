<?php
$conn = new mysqli("localhost","root","","makhla");

$sql="UPDATE commentss SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from commentss ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response  .
	"<a class='dropdown-item media bg-flat-color-1' href='#''>".
	"<span class='message media-body'>".
	"<span class='name float-left'>" . $row["subject"] . "</span>". "<br>" .
	"<p>" . $row["comment"]  . "</p>" .
                                "</span>" .
                            "</a>";
}
if(!empty($response)) {
	print $response;
}


?>