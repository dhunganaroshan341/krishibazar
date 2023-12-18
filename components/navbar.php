<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<nav class="bg-lightgreen navbar navbar-expand-lg navbar-light bg-light-red">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <?php if (!empty($links)): ?>
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
          
            <?php if (basename($_SERVER['PHP_SELF']) !== 'farmer.php'): ?>
                <li class="nav-item">
                    <input style="margin:0.3em 0em" type="text" name="searchbar" id="searchbar" placeholder="Search Products">
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
