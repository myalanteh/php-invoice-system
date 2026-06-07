<?php
$items = $_POST['item'] ?? ['Website Fix'];
$prices = $_POST['price'] ?? ['100'];
$total = 0;
?>
<!doctype html><html><head><meta charset="utf-8"><title>PHP Invoice System</title><link rel="stylesheet" href="style.css"></head><body>
<main><h1>PHP Invoice System</h1><form method="post"><label>Item</label><input name="item[]" value="<?= htmlspecialchars($items[0] ?? '') ?>"><label>Price</label><input name="price[]" value="<?= htmlspecialchars($prices[0] ?? '') ?>"><button>Generate Invoice</button></form>
<section class="invoice"><h2>Invoice</h2><p><strong>Client:</strong> Sample Client</p><table><tr><th>Description</th><th>Price</th></tr><?php foreach($items as $i=>$item): $price=(float)($prices[$i] ?? 0); $total+=$price; ?><tr><td><?= htmlspecialchars($item) ?></td><td>$<?= number_format($price,2) ?></td></tr><?php endforeach; ?><tr><td><strong>Total</strong></td><td><strong>$<?= number_format($total,2) ?></strong></td></tr></table></section></main>
</body></html>
