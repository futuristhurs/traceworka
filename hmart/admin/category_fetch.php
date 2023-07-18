<?php
	// include 'includes/session.php';
	session_start();

	$output = '';

	// $conn = $pdo->open();
	include '../includes/connection.php';

	$stmt = $conn->prepare("SELECT * FROM category");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['id']."' class='append_items'>".$row['name']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>