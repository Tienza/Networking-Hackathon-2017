

<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
<html>
    <head>
        <title>Pi-In-The-Skynet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ie9.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/ie8.css" />
        <![endif]-->
        <!-- <?php
            require('includes/connect_db.php');
            require('includes/login_tools.php');
            session_start();
            
            if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
            	global $dbc;
            	$pid = -1;
            
            	$user = strtolower(trim($_POST['name']));
            	$pass = $_POST['pass'];
            	# Queries the database for salt unique to users to use in hash function
            	$query = 'SELECT salt FROM admins WHERE username="' . $user . '"';
            
            	$results = mysqli_query($dbc, $query);
            
            	$results = mysqli_fetch_array($results);
            		
                    if(!empty($results)) {
                        $options = [
                            'cost' => 12,
                            'salt' => $results[0],
                        ];
                        
                        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
                        $pid = validate($user, $pass);
                    }
                    else
                        $pid = -1;
            	if($pid == -1) {
            		echo '<script>alert("Failed to Login");</script>';
            	}
            	else {
                        	$_SESSION['login_user'] = $user;
            		load('index.php', $pid);
                    }
            }
            ?> -->
    </head>
    <body>
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <!-- Header -->
                    <header id="header">
                        <a href="index.php" class="logo"><strong>NetMonitor</strong> by Graham Burek, Piradon Liengtiraphan, and Peter Sofronas</a>
                    </header>
                    <!-- Content -->
                    <section>
                        <header class="main">
                            <h1>Login</h1>
                        </header>
                        <div id="foundItemForm" class="row">
                            <form class="col s12" action="login.php" method="POST">
                                <div class="row">
                                    <input required placeholder="Username" name="name" type="text">
                                    <label for="title">Username</label>
                                </div>
                                <div class="row">
                                    <input required placeholder="Password" name="pass" type="password">
                                    <label for="first_name">Password</label>
                                </div>
                                <div class="row">
                                    <button type="submit">Log in</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">
                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Menu</h2>
                        </header>
                        <ul>
                            <li><a href="index.php">Homepage</a></li>
                            <li><a href="info.php">Users</a></li>
                        </ul>
                    </nav>
                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Creators</h2>
                        </header>
                        <div class="mini-posts">
                            <article>
                                <a href="https://github.com/GrahamBurek" class="image"><img src="images/graham.jpg" alt="" /></a>
                                <p>Graham Burek</p>
                            </article>
                            <article>
                                <a href="https://github.com/Tienza" class="image"><img src="images/tien.jpg" alt="" /></a>
                                <p>Piradon (Tien) Liengtiraphan</p>
                            </article>
                            <article>
                                <a href="https://github.com/sofronaspe" class="image"><img src="images/peter.jpg" alt="" /></a>
                                <p>Peter Sofronas</p>
                            </article>
                        </div>
                    </section>
                    <!-- Footer -->
                    <footer id="footer">
                        <p class="copyright">&copy; Pi-In-The-Skynet. All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

