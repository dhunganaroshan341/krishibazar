<div class="product">
    <div class="product-image">
        <img src="media/product-images/cauliflower.jpeg"     alt="Product Image">
    </div>
    <div class="product-info">
        <h3 class="product-title">Caulilflower</h3>
        <p class="bg-warning quantity">300</p>
        <label for="quantity" class="quantity_measurement">kg</label>
        <p class="product-price">$99.99</p>
        <button class="bg-success add-to-cart">buy Now</button>
        <button class="add-to-cart">Add to Cart</button>

    </div>
</div>


<style>
    /* Basic styles to create a grid layout */
.product {
    display: flex;
    flex-direction: column;
    border: 1px solid #ccc;
    margin: 10px;
    width: 250px; /* Set your desired width */
}

.product-image img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ccc;
}

.product-info {
    padding: 10px;
}

.product-title {
    font-size: 16px;
    margin-top: 0;
    margin-bottom: 5px;
}

.product-price {
    color: #007bff;
    margin: 0;
}

.add-to-cart {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart:hover {
    background-color: #0056b3;
}

</style>