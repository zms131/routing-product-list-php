<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>

<h1>Product Details</h1>

<div>
    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
    <p><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
    <p><strong>Price:</strong> $<?php echo number_format($product['price'], 2); ?></p>
    <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Product Image" style="max-width: 300px;">
</div>

<p><a href="/">Back to Product List</a></p>

</body>
</html>
