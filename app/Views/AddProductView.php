<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Add product</title>
    <link rel="stylesheet"
          type="text/css"
          href="/app\Views\style.css"/>
</head>
<body>
<form action="/product/add" method="post" id="productForm">
    <nav class="nav">
        <div class="div1">
            <p class="p1">Product Add</p>
            <button class="p2" type="submit">Save</button>
            <label class="label1"><a class="a1" style="text-decoration: none" href="/product">Cancel</a></label>
            <hr>
        </div>
    </nav>
    <div class="fields">
        <labe for="sku">SKU</labe>
        <p><input type="text" name="sku" id="sku"></p>
        <p class="error"><?php echo $message; ?></p>
    </div>
    <div class="fields">
        <label for="name">Name</label>
        <p><input type="text" id="name" name="name"></p>
    </div>
    <div class="fields">
        <label for="price">Price ($)</label>
        <p><input type="text" id="price" name="price"></p>
    </div>
    <div class="fields">
        Type switcher:
        <Select id="typeSwitcher">
            <option value="">Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </Select>
    </div>
    <div id="dvd" class="productType" style="display:none">
        <div class="new">
            <p><label for="size">Size (MB)</label></p>
            <input type="text" name="size" id="size">
            <p>"Please, provide size"</p>
        </div>
    </div>
    <div id="book" class="productType" style="display:none">
        <div class="new">
            <p><label for="weight">Weight (KG)</label></p>
            <input type="text" name="weight" id="weight">
            <p>"Please, provide weight"</p>
        </div>
    </div>
    <div id="furniture" class="productType" style="display:none">
        <div class="new">
            <p><label for="height">Height (CM)</label></p>
            <input type="text" name="height" id="height">
            <p><label for="width">Width (CM)</label></p>
            <input type="text" name="width" id="width">
            <p><label for="length">Length (CM)</label></p>
            <input type="text" name="length" id="length">
            <p>"Please, provide dimensions in HxWxL format"</p>
        </div>
    </div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="/app\Resources\js\validation.js" type="text/javascript"></script>












