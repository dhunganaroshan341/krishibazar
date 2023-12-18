<!-- Recent Transactions Table Template with Bootstrap for Mobile Responsiveness -->
<div  id = "recent-table" class="recent-transactions">
    <h2>Recent Transactions</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Type</th>
                    <th>To</th>
                    <th>product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example rows (You can dynamically generate these rows based on data) -->
                <tr>
                    <td>Sale</td>
                    <td>John Doe</td>
                    <td>Product A</td>
                    <td>$20</td>
                    <td>3</td>
                    <td>$60</td>
                </tr>
                <tr>
                    <td>Purchase</td>
                    <td>Jane Smith</td>
                    <td>Product B</td>
                    <td>$15</td>
                    <td>2</td>
                    <td>$30</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="total">
        <p class="font-weight-bold">Total Sale: $90</p>
        <p class="font-weight-bold">Total Purchase: $30</p>
        <p class="font-weight-bold">Final Total (Sale - Purchase): $60</p>
    </div>
</div>
  