<?php
$student_id = $_GET['id'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=tuqa-table", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("UPDATE students SET deleted_at = NOW() WHERE student_id = ?");
    $stmt->execute([$student_id]);
    
    echo "Student record soft deleted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
