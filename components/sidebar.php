<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
/* 
    .sticky-sidebar {
       

        position: sticky;
        top: 30px;
        z-index: 1000; /* Adjust z-index as needed */
    } */
</style>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 order-md-1 col-lg-2 order-lg-2 bg-success">
            <div class="sidebar content-right sticky-sidebar">
                <?php
                // Your PHP code here
                ?>
                <!-- Loop to display the links -->
                <ul class="nav flex-column">
                    <?php foreach ($links as $link): ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo $link['url'];?>"><?php echo $link['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    window.onscroll = function() {
        // Get the sidebar element
        var sidebar = document.querySelector('.sticky-sidebar');
        
        // Get the distance from the top of the sidebar to the top of the document
        var sidebarTop = sidebar.getBoundingClientRect().top;
        
        // Add a class to fix the sidebar when it reaches a certain point
        if (sidebarTop <= 0) {
            sidebar.classList.add('fixed-sidebar');
        } else {
            sidebar.classList.remove('fixed-sidebar');
        }
    };
</script>
