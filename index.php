<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
<html>
    <head>
        <title>Editorial by HTML5 UP</title>
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
                    <!-- Banner -->
                    <section id="banner">
                        <div class="content">
                            <header>
                                <h1>Active Networks</h1>
                                <p>Monitor Flagged Connections</p>
                            </header>
                            <p>Information is pulled from the SQLITE database to be displayed in the table to the side. Networks are updated every 10 seconds</p>
                        </div>
                        <span class="image object">
                            <table>
                                <tr>
                                    <th>SSID</th>
                                    <th>MacAddr</th>
                                    <th>Frequency</th>
                                    <th>Quality</th>
                                    <th>Strength</th>
                                </tr>
                                <?php
                                	require('includes/helpers.php');
            						require('includes/connect_db.php');
            						show_networks($dbc)
                                ?>
                            </table>
                        </span>
                    </section>
                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Flagged Networks</h2>
                            <p>Networks that are detected that don't fall within the normal naming and security schemes of Marist affiliated networks</p>
                        </header>
                        <div class="features">
                            <article>
                                <table>
                                    <tr>
                                        <th>Company</th>
                                        <th>Contact</th>
                                        <th>Country</th>
                                    </tr>
                                    <tr>
                                        <td>Alfreds Futterkiste</td>
                                        <td>Maria Anders</td>
                                        <td>Germany</td>
                                    </tr>
                                    <tr>
                                        <td>Centro comercial Moctezuma</td>
                                        <td>Francisco Chang</td>
                                        <td>Mexico</td>
                                    </tr>
                                    <tr>
                                        <td>Ernst Handel</td>
                                        <td>Roland Mendel</td>
                                        <td>Austria</td>
                                    </tr>
                                    <tr>
                                        <td>Island Trading</td>
                                        <td>Helen Bennett</td>
                                        <td>UK</td>
                                    </tr>
                                    <tr>
                                        <td>Laughing Bacchus Winecellars</td>
                                        <td>Yoshi Tannamuri</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>Magazzini Alimentari Riuniti</td>
                                        <td>Giovanni Rovelli</td>
                                        <td>Italy</td>
                                    </tr>
                                </table>
                            </article>
                        </div>
                    </section>
                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Computer Resources</h2>
                            <p>Table showing the amount of resources that the computer is using up. Update every 10 seconds</p>
                        </header>
                        <div class="features">
                            <article>
                                <table>
                                    <tr>
                                        <th>Company</th>
                                        <th>Contact</th>
                                        <th>Country</th>
                                    </tr>
                                    <tr>
                                        <td>Alfreds Futterkiste</td>
                                        <td>Maria Anders</td>
                                        <td>Germany</td>
                                    </tr>
                                    <tr>
                                        <td>Centro comercial Moctezuma</td>
                                        <td>Francisco Chang</td>
                                        <td>Mexico</td>
                                    </tr>
                                    <tr>
                                        <td>Ernst Handel</td>
                                        <td>Roland Mendel</td>
                                        <td>Austria</td>
                                    </tr>
                                    <tr>
                                        <td>Island Trading</td>
                                        <td>Helen Bennett</td>
                                        <td>UK</td>
                                    </tr>
                                    <tr>
                                        <td>Laughing Bacchus Winecellars</td>
                                        <td>Yoshi Tannamuri</td>
                                        <td>Canada</td>
                                    </tr>
                                    <tr>
                                        <td>Magazzini Alimentari Riuniti</td>
                                        <td>Giovanni Rovelli</td>
                                        <td>Italy</td>
                                    </tr>
                                </table>
                            </article>
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
                        <p class="copyright">&copy; NetMonitor. All rights reserved.</p>
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