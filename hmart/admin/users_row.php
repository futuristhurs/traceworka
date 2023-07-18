<?php 
session_start();
	// include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		// $conn = $pdo->open();
		include '../includes/connection.php';

		$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>