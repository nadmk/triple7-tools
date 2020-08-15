<nav class="nav-show">
    <div class="container">
        <ul>
            <li><a href="home.php">Triple7 Control Panel</a></li>
            <li>
                <a href="#">Phone Utils</a>
                <ul>
                    <li><a href="sms-spoof.php">SMS Spoof</a></li>
                    <li><a href="call-spoof.php">Caller Spoof</a></li>
                </ul>
            </li>
            <li><a href="#combos">Crypto</a></li>
            <li>
                <a href="#manage">Other</a>
                <ul>
                    <li><a href="#">Coming Soon</a></li>
                </ul>
            </li>
            <li class="right"><a href="logout.php">Log Out</a></li>
            <li class="u-pull-right"><a href="components/reset-password.php">Hello, <?php echo $_SESSION["username"]; ?></a></li>

            <li class="icon">
                <a href="javascript:void(0);" onclick="toggleMobileNav();">&#9776;</a>
            </li>
        </ul>
    </div>
</nav>
