<form class="col-md-9" action="submit_product.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="productName" class="form-label">Product Name:</label>
        <input type="text" class="form-control" id="productName" name="productName" required>
    </div>

    <div class="form-group">
        <label for="productImage" class="form-label">Product Image:</label>
        <input type="file" class="form-control-file" id="productImage" name="productImage" accept="image/*" required>
    </div>

    <div class="form-group">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>

    <div class="form-group">
        <label for="unitOfMeasurement" class="form-label">Unit of Measurement:</label>
        <input type="text" class="form-control" id="unitOfMeasurement" name="unitOfMeasurement" required>
    </div>

    <div class="form-group">
        <label for="price" class="form-label">Price:</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group">
        <label for="productType" class="form-label">Product Type:</label>
        <select class="form-select" id="productType" name="productType" required>
            <option value="">Select</option>
            <option value="vegetables">Vegetables</option>
            <option value="fruits">Fruits</option>
            <option value="grains">Grains</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
