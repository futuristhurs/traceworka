<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		include "../includes/connection.php";

		try{
			$stmt = $conn->prepare("DELETE FROM category WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Category deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select category to delete first';
	}

	header('location: category.php');
	
?>