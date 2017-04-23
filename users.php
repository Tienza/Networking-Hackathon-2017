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
                            <h1>Active Users</h1>
                        </header>
                        <span id="table-holder-3"></span>
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
                            <li><a href="info.php">Information</a></li>
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
        <script>
            $(document).ready(function() {
                getUserTable();
                setInterval(function(){
                    getUserTable();
                    console.log("Running AJAX...");
                },10000);
            });
            function getUserTable() {
                $.get("includes/user-helpers.php", function(data){
                    $("#table-holder-3").empty();
                    $("#table-holder-3").append(data);
                });
            }
        </script>
    </body>
</html>
