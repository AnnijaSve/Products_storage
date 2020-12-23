<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet"
          type="text/css"
          href="/app\Views\style.css"/>
</head>
<body>
<form method="post" action="/product">
    <nav class="nav">
        <div class="div1">
            <p class="p1">Product list</p>
            <input type="hidden" name="_method" value="DELETE"/>
            <button class="p2" type="submit" name="delete" id="delete">MASS DELETE</button>
            <label class="label1"><a class="a1" style="text-decoration: none" href="/product/add">ADD</a></label>
            <hr>
        </div>
    </nav>
    <?php foreach ($products as $product): ?>
        <div class="inline">
            <div class="product">
                <p class="checkbox"><input type="checkbox" name="checkbox[]" value="<?php echo $product->getSku(); ?>"></p>
                <p><?php echo $product->getSku(); ?></p>
                <p><?php echo $product->getName(); ?></p>
                <p><?php echo $product->getPrice(); ?></p>
                <?php if ($product->getSize() > 0): ?>
                    <p>Size: <?php echo $product->getSize(); ?></p>
                <?php endif; ?>
                <?php if ($product->getWeight() > 0): ?>
                    <p>Weight: <?php echo $product->getWeight(); ?></p>
                <?php endif; ?>
                <?php if ($product->getHeight() > 0 && $product->getWidth() > 0 && $product->getLength() > 0): ?>
                    <p> Dimensions: <?php echo $product->getDimensions(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</form>
</body>
</html>