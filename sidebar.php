<div class="col-lg-2 mt-2">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'menu') ? 'active link-light' : 'link-dark' ; ?>" 
            href="menu">Daftar Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active link-light' : 'link-dark' ; ?>" 
            href="order">Order</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'dapur') ? 'active link-light' : 'link-dark' ; ?>" 
            href="dapur">Dapur</a>
        </li>
        <?php if($hasil['level']==1){ ?>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark' ; ?>" 
            href="user">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark' ; ?>" 
            href="report">Report</a>
        </li>
        <?php } ?>
    </ul>
    </div>