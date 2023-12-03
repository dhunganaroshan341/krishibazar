<nav class="bg-lightgreen navbar navbar-expand-lg navbar-light bg-light-red">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <?php if(!empty($links)): ?>
                <?php foreach ($links as $link): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $link['url']; ?>"><?php echo $link['name']; ?></a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="nav-item">
                    <span class="nav-link">No links available</span>
                </li>
            <?php endif; ?>
           <input type="text" name="searchbar" id="searchbar" placeholder = "search -products">
        </ul>
    </div>
</nav>



<style>
    li:nth-child(1){background:orange;}
/* Custom styles */
.bg-lightgreen {
    background-color: #90EE90; /* Light green background color */
}

.navbar-nav .nav-link {
    color: #333; /* Link color */
}

.navbar-nav .nav-link:hover {
    color: #fff; /* Link color on hover */
    background-color: #5cb85c; /* Background color on hover */
    transition: background-color 0.3s ease;
}
a :hover{color:white;}
/* Responsive styles */
@media (max-width: 991.98px) {
    .navbar-nav {
        text-align: center;
        margin-top: 10px;
    }
    .navbar-nav .nav-item {
        display: block;
        margin-bottom: 8px;
    }
}
</style>

<script>
 $(document).ready(function() {
        $('.nav-item').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Remove 'active' class from all nav-items
            $('.nav-item').removeClass('active');

            // Add 'active' class to the closest nav-item when clicked
            $(this).addClass('active');
        });
    });
</script>