<form>

  <div class="form-group">
    <label>Product</label>
    <select name="product">
      <option value="1">Product 1</option>
      <option value="2">Product 2</option>
    </select>
  </div>

  <div class="form-group">     
    <label>Quantity</label>
    <input type="number" name="quantity" value="1">
  </div>

  <div class="form-group">
    <label>Price Per Item </label>
    <input type="number" name="price" value="10">  
  </div>

  <div class="form-group">
    <label>Discount</label>
    <select name="discount">
      <option value="0">None</option>  
      <option value="10">10% off</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <strong>Total Price: </strong> 
    <span id="totalPrice"></span>
  </div>
   -->
  <div class="form-group">     
    <label>Total Price</label>  
    <input type="number" name="total_price" disabled>
  </div>

  <button type="submit" name="add_to_sell">Add to Sell</button>


</form>

<script>

  const calcButton = document.getElementById('calc');

  calcButton.addEventListener('click', () => {

    const quantity = document.getElementById('quantity').value;  
    const price = document.getElementById('price').value;
    const discount = document.getElementById('discount').value;
    
    // Calculate total price after discount

    const totalPrice = quantity * price * (100 - discount) / 100;  

    document.getElementById('totalPrice').innerHTML = totalPrice;

  });

</script>   