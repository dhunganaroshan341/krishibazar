<div class="container">
    <div class=" search-options row align-items-center">
        <!-- Filter Section - Horizontal -->

        <div class="col-md-9">
            <div class="d-md-flex justify-content-between flex-md-row flex-column">
                <!-- Category Selection -->
                <div class="mb-3">
                    <h4 class = "d-inline" >Category</h4>
                    <select class="form-select mb-3" id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="pesticides">Pesticides</option>
                        <option value="seeds">Seeds</option>
                        <option value="others">Others</option>
                        <!-- Add other categories -->
                    </select>
                </div>

                <!-- Price Sorting -->
                <div>
                    <h4 class = "d-inline" >Price</h4>
                    <select class="form-select mb-3" id="priceSort">
                        <option value="low_to_high">Price: Low to High</option>
                        <option value="high_to_low">Price: High to Low</option>
                    </select>
                </div>

                <!-- Quantity Sorting -->
                <div>
                    <h4 class = "d-inline"  class = "d-inline" >Quantity</h4>
                    <select class="form-select mb-3" id="quantitySort">
                        <option value="high_to_low">Quantity: High to Low</option>
                        <option value="low_to_high">Quantity: Low to High</option>
                    </select>
                </div>
                <!-- Other Filter Options -->
            </div>
        </div>

        <!-- Search Bar - Right Side -->
        <!-- <div class="col-md-3">
            <div class="d-flex align-items-center justify-content-end">
                <input type="text" class="form-control mb-3" placeholder="Search...">
            </div>
        </div> -->
        
        <!-- Product Display Section -->
        <div class="col-md-12" id="productDisplay">
            <!-- Products will be displayed here -->
        </div>
    </div>
</div>
