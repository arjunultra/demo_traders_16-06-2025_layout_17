<header class="fireworks-header">
    <!-- Marquee Offer Bar -->
    <div class="fireworks-header__offer text-center py-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fireworks-header__marquee left-marquee">
                        <span>🎆 Big Diwali Sale! Heavy Discount on all bulk orders! Call Now: +91 99999 99999 🎇</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Top with Logo -->
    <div class="fireworks-header__top position-relative text-center">
        <div class="container-fluid px-5">
            <div class="row justify-content-center align-items-center">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="location-container shadow-lg p-5">
                        <h3><i class="bi bi-geo-alt-fill text-danger mr-2"></i>Our Location</h3>
                        <span>Demo Traders,Demo Building,Demo Street,Demo
                            Colony,Sivakasi.</span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fireworks-header__logo-wrapper mx-auto">
                        <a target="_blank" href="index.php">
                            <div class="fireworks-header__logo-circle">
                                <img src="images/logo.png" alt="Demo Traders Logo" class="fireworks-header__logo-img">
                            </div>
                        </a>
                        <h1 class="fireworks-header__brand-name mt-3">
                            <span class="text-brand-red">Demo</span>
                            <span class="text-brand-white">Traders</span>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="phone-container shadow-lg p-5">
                        <h3><i class="bi bi-telephone-forward-fill mr-2 text-danger"></i></i>Contact</h3>
                        <h4 class="h6">+91 99999 99999</h4>
                        <h4 class="h6">+91 88888 88888</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="fireworks-header__clip-shape"></div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fireworks-header__navbar sticky-top">
        <div class="container">
            <div class="mx-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                    <i class="bi bi-list text-white border border-white py-1 px-3"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-lg-3 px-2 <?php if ($page == 'home')
                        echo 'active'; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-lg-3 px-2 <?php if ($page == 'about')
                        echo 'active'; ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-lg-3 px-2 <?php if ($page == 'products')
                        echo 'active'; ?>">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item px-lg-3 px-2 <?php if ($page == 'safetytips')
                        echo 'active'; ?>">
                        <a class="nav-link" href="safetytips.php">Safety Tips</a>
                    </li>
                    <li class="nav-item px-lg-3 px-2 <?php if ($page == 'contact')
                        echo 'active'; ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.left-marquee').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>