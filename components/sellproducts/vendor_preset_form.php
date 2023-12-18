<form method="post" action="upload_product.php">

  <div class="form-group">
    <label>Product Name</label>   
    <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group"> 
    <label>Category</label>
    <select name="category" class="form-control">
      <option value="seeds">Seeds</option>
      <option value="pesticides">Pesticides</option>    
      <option value="fertilizers">Fertilizers</option>
      <option value="farm_equipment">Equipment</option>  
    </select>
  </div>

  <div class="form-group">
    <label>Price</label>    
    <input type="number" name="price" class="form-control">
  </div>

  <div class="form-group">
    <label>Quantity Available</label>   
    <input type="number" name="quantity" class="form-control"> 
  </div>
  
  <div class="form-group">
    <label>Default Location</label>
    <input type="text" name="location" value="My Town, USA" class="form-control">
  </div>  

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>