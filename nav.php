<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-dark sticky-top p-0">
    <a href="home.php" class="navbar-brand bg-dark d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white" style="background-color: black;">BACKPACKERS</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="home.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'goa.php' || basename($_SERVER['PHP_SELF']) == 'aboutgoa.php'  || basename($_SERVER['PHP_SELF']) == 'himachal.php' || basename($_SERVER['PHP_SELF']) == 'abouthimachalpradesh.php' || basename($_SERVER['PHP_SELF']) == 'aboutrajasthan.php'  || basename($_SERVER['PHP_SELF']) == 'rajasthan.php' || basename($_SERVER['PHP_SELF']) == 'aboutkerala.php' || basename($_SERVER['PHP_SELF']) == 'kerala.php' || basename($_SERVER['PHP_SELF']) == 'aboutmaharashtra.php' || basename($_SERVER['PHP_SELF']) == 'maharashtra.php' || basename($_SERVER['PHP_SELF']) == 'aboututtarpradesh.php' || basename($_SERVER['PHP_SELF']) == 'uttarpradesh.php' || basename($_SERVER['PHP_SELF']) == 'hotels.php'  || basename($_SERVER['PHP_SELF']) == 'hotel-details.php' || basename($_SERVER['PHP_SELF']) == 'booking.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Explore backpackers</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="goa.php" class="dropdown-item">GOA</a>
                    <a href="himachal.php" class="dropdown-item">HIMACHAL PRADESH</a>
                    <a href="rajasthan.php" class="dropdown-item">RAJASTHAN</a>
                    <a href="kerala.php" class="dropdown-item">KERALA</a>
                    <a href="maharashtra.php" class="dropdown-item">MAHARASHTRA</a>
                    <a href="uttarpradesh.php" class="dropdown-item">UTTAR PRADESH</a>
                </div>
            </div>
            <a href="gearshop.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'gearshop.php' ? 'active' : ''; ?>">GEAR SHOP</a>
            <?php if(isset($_SESSION['login'])) { 
                $usersession= $_SESSION['login'];
                $stmt = $dbh->prepare("SELECT * FROM users WHERE email= :email");
                $stmt->bindParam(':email', $usersession);
                $stmt->execute();
                $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'MyProfile.php' || basename($_SERVER['PHP_SELF']) == 'UpdatePassword.php' || basename($_SERVER['PHP_SELF']) == 'PostBlog.php' || basename($_SERVER['PHP_SELF']) == 'MyBlogs.php' || basename($_SERVER['PHP_SELF']) == 'Login and Signup Form/logout-user.php' || basename($_SERVER['PHP_SELF']) == 'my-booking.php' || basename($_SERVER['PHP_SELF']) == 'my-orders.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown"><?php echo $userRow['username']; ?></a>
                    <div class="dropdown-menu fade-up m-0">
                    <a href="MyProfile.php" class="dropdown-item">My Profile</a>
                    <a href="UpdatePassword.php" class="dropdown-item">Update Password</a>
                    <a href="PostBlog.php" class="dropdown-item">Post Blog</a>
                    <a href="MyBlogs.php" class="dropdown-item">My Blogs</a>
                    <a href="my-booking.php" class="dropdown-item">My Bookings</a>
                    <a href="my-orders.php" class="dropdown-item">My Orders</a>
                        <a href="Login and Signup Form/logout-user.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
            <?php } else { ?>
                <a href="Login and Signup Form/login-user.php" class="nav-item nav-link">Login / Register</a>
            <?php } ?>
        </div>       
    </div>     
</nav>
