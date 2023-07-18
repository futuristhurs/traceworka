<?php
	// include 'includes/session.php';
	session_start();

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		// $conn = $pdo->open();
		include '../includes/connection.php';

		try{
			$stmt = $conn->prepare("DELETE FROM products WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Product deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select product to delete first';
	}

	header('location: products.php');
	
?>