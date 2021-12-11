<?php
    $currentPageName = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);
?>
<header>
    <a href="/" id="logo-section">
        <img id="logo" src="img/logo.png" alt="Logo">
        <h1>Romania Your Way<br>
        <span>Your Best Travel Experiences</span>

        </h1>
    </a>
    <nav class="header-menu">
        <ul class="nav-links">
            <li class="<?php echo $currentPageName == "index" ? "current-page" : ""; ?>"><a href="index">Home</a></li>
            <li><img src="img/ui/nav_links_divider.png" alt="divider" class="nav-links-divider"></li>
            <li class="<?php echo $currentPageName == "destinations" ? "current-page" : ""; ?>"><a href="destinations">Destinations</a></li>
            <li><img src="img/ui/nav_links_divider.png" alt="divider" class="nav-links-divider"></li>
            <li class="<?php echo $currentPageName == "local-experiences" ? "current-page" : ""; ?>"><a href="local-experiences">Local Experiences</a></li>
            <li><img src="img/ui/nav_links_divider.png" alt="divider" class="nav-links-divider"></li>
            <li class="<?php echo $currentPageName == "tailored-tours" ? "current-page" : ""; ?>"><a href="tailored-tours">Tailored Tours</a></li>
            <li><img src="img/ui/nav_links_divider.png" alt="divider" class="nav-links-divider"></li>
            <li class="<?php echo $currentPageName == "about" ? "current-page" : ""; ?>"><a href="about">About Us</a></li>
        </ul>
    </nav>
    <div id="hamburger">
        <div class="line1 blue-bg"></div>
        <div class="line2 blue-bg"></div>
        <div class="line3 blue-bg"></div>
    </div>
   
</header>