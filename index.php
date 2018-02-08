<?php

$conn = mysqli_connect('localhost','root','','import_excel');

$query = mysqli_query($conn,"Select * from excel");
if(!$query){
	echo "error in query".mysqli_error($conn);
}

if(mysqli_num_rows($query)){
	while($row = mysqli_fetch_assoc($query)){
		// $name = $row['name'];
		// $email = $row['email'];
		// $row = array();
		// echo $name."<br>".$email."<br>";

		$rows[] =$row ;



	}
	echo "-------JSON DATA-----------"."<br>";
	echo json_encode($rows)."<br>";


	// echo "-------------After JSON Conversion-----------"."<br>";
	
	// echo json_decode($rows);
}

// $json_data = json_encode($query);
// echo $json_data;

// $data->name = "prakash";
// $data->roll=0;

// $json_data = json_encode($data);
// echo $json_data;


$json = '{"name":"alex","class":12}';
$json_decode =json_decode($json,true);

echo $json_decode['name'];


$fruits = array('name'=>'apple','color'=>'red');
$json_encode = json_encode($fruits);
echo $json_encode;

//echo $json_encode_parse


?>