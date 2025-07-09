<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View SC TESDA Inventory System</title>
    <link rel="stylesheet" href="css/styles.css?v=<?= time() ?>">
</head>
<body class="view-SC-page">
    <?php include 'sidebar.php'; ?>
    <?php require 'config.php'; ?>

<?php
if (!isset($_GET['ris_id'])) {
        die("❌ Error: RIS ID not specified in the URL.");
    }

    $ris_id = (int)$_GET['ris_id'];

    // Fetch RIS header
    $ris_result = $conn->query("SELECT * FROM ris WHERE ris_id = $ris_id");

    if (!$ris_result) {
        die("❌ Database error: " . $conn->error);
    }

    if ($ris_result->num_rows === 0) {
        die("❌ No RIS record found for RIS ID: $ris_id");
    }

    $ris = $ris_result->fetch_assoc();

    // Fetch RIS items
    $item_result = $conn->query("SELECT * FROM ris_items WHERE ris_id = $ris_id");
?>
    
</body>
</html>