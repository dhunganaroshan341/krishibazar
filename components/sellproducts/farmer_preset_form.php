<form method="post" action="upload_product.php" enctype="multipart/form-data">

  <div class="form-group"> 
    <label>Product Name</label>    
    <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <option value="grain">Grain</option>
      <option value="vegetables">Vegetables</option>
      <option value="fruit">Fruit</option>    
      <option value="dairy">Dairy</option>
      <option value="meat">Meat</option>
    </select>
  </div>

  <div class="form-group">
    <label>Quantity (lbs, bushels etc)</label>   
    <input type="text" name="quantity" class="form-control">
  </div>

  <div class="form-group">
    <label>Price (per unit)</label>    
    <input type="number" name="price" class="form-control"> 
  </div>

  <div class="form-group">
    <label>Harvest Date</label>   
    <input type="date" name="harvest_date" class="form-control">
  </div>  

  <div class="form-group">
    <label>Location</label>   
    <input type="text" name="location" class="form-control">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>