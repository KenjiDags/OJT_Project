<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Stock Card</title>
</head>
<body>
    <h2>Stock Card</h2>

        <div style="margin-bottom: 10px;">
        <input type="text" id="itemSearch" placeholder="🔍 Search stock no., description, or unit..."
            style="width: 100%; padding: 6px; font-size: 16px;">
    </div>
        <div class="table-container">
        <table id="itemsTable">
            <thead>
                <tr>
                    <th>Stock No.</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM items ORDER BY id DESC");
                while ($row = $result->fetch_assoc()):
                ?>
                <tr data-id="<?= $row['id'] ?>">
                    <td class="stock_no"><?= htmlspecialchars($row['stock_no']) ?></td>
                    <td class="description"><?= htmlspecialchars($row['description']) ?></td>
                    <td class="unit"><?= htmlspecialchars($row['unit']) ?></td>
                    <td class="unit_cost"><?= htmlspecialchars($row['unit_cost'] ?? '0') ?></td>
                    <td class="quantity"><?= htmlspecialchars($row['quantity'] ?? '0') ?></td>
                    <td>
                        <button class="btn edit">Check</button>
                        <button class="btn delete">Export</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>