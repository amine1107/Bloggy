 <div class="navbar-fixed">
<nav class=" indigo darken-2 ">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo"><strong>QDNA</strong></a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="services")?"active" : ""; ?>"><a href="index.php?page=services">Services</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Articles</a></li>
            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="services")?"active" : ""; ?>"><a href="index.php?page=services">Services</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Articles</a></li>
            </ul>

        </div>
    </div>
</nav>
</div>
