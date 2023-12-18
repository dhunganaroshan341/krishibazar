<!-- Product Card Layout with Bootstrap Modal for Enlarged View -->
<div class="product">
    <div class="product-image">
        <img src="media/product-images/cauliflower.jpeg" alt="Product Image" data-toggle="modal" data-target="#productDetailsModal">
    </div>
    <div class="product-info">
        <h3 class="product-title">Cauliflower</h3>
        <p class="bg-warning quantity">300</p>
        <label for="quantity" class="quantity_measurement">kg</label>
        <p class="product-price">$99.99</p>
        <button class="bg-success add-to-cart">Buy Now</button>
        <button class="add-to-cart">Add to Cart</button>
    </div>
</div>

<!-- Product Details Modal -->
<div class="modal fade" id="productDetailsModal" tabindex="-1" role="dialog" aria-labelledby="productDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Additional product details -->
                <img src="media/product-images/cauliflower.jpeg" class="img-fluid" alt="Product Image">
                <h3 class="modal-product-title">Cauliflower</h3>
                <p class="bg-warning modal-quantity">300</p>
                <label for="quantity" class="quantity_measurement">kg</label>
                <p class="modal-product-price">$99.99</p>
                <p>Seller: Seller Name</p>
                <!-- Add more product details here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Add to Cart</button>
                <!-- Add other buttons or actions if needed -->
            </div>
        </div>
    </div>
</div>
