<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <?php if(isset($_SESSION['name'])){?>
        <a href="action.php?pages=products" class="navbar-brand">PRODUCTS</a>
        <h2 class="text-white">Dashboard</h2>
        <?php }else{  ?>
        <a href="action.php?pages=products" class="navbar-brand">PRODUCTS</a>
        <?php }  ?>
        <div class="navbar-nav">
            <?php if(isset($_SESSION['name'])){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://user-images.githubusercontent.com/97863651/153309749-6598d9bd-fa96-489f-abf8-f87e6316954c.png" width="40" height="40" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <h5 class="text-center"><?php echo $_SESSION['name']?></h5>
                        <hr />
                        <a class="dropdown-item" href="action.php?pages=dashboard">Dashboard</a>
                        <a class="dropdown-item" href="action.php?pages=data-entry">Product Entry</a>
                        <a class="dropdown-item" href="action.php?pages=all-data">All Product List</a>
                        <a class="dropdown-item" href="action.php?pages=logs">Logs</a>
                        <a class="dropdown-item" href="action.php?pages=task">App</a>
                        <a class="dropdown-item" href="action.php?pages=signout">Log Out</a>
                    </div>
                </li>
            <?php }else{  ?>
                <li class="nav-item"><a class="nav-link text-white" href="action.php?pages=login"><i class="fa-solid fa-right-to-bracket"></i> SignIn</a></li>
                <li class="nav-link text-white">|</li>
                <li class="nav-item"><a class="nav-link text-white" href="action.php?pages=registration">SignUp</a></li>
            <?php }  ?>
        </div>
    </div>
</nav>




