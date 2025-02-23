<?php
$student_id = $_GET['id'];

echo "<script>
    if (confirm('Are you sure you want to delete this student?')) {
        window.location.href = 'soft_delete.php?id={$student_id}';
    } else {
        window.location.href = 'index.php';
    }
</script>";
?>
