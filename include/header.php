<header>
    <div class="top-header py-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-sec-wrp">
                        <div class="top-text">
                            <p>WARNING: This product contains nicotine. Nicotine is an addictive chemical.</p>
                        </div>
                        <div class="top-icons">
                            <a href="javascript:void(0)" class="mx19"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:void(0)" class="mx19"><i class="fa-brands fa-instagram"></i></a>
                            <a href="javascript:void(0)" class="mx19"><i class="fa-brands fa-twitter"></i></a>
                            <a href="javascript:void(0)" class="mx19 me-0"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="logo my-8">
                        <a href="/"><img src="./assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-8">
                    <ul class="header-nav-links navbar-collapse d-flex justify-content-between align-items-center flex-wrap"
                        id="headerNav">
                        <div class="nav-header">
                            <div class="logo">
                                <a href="./index.php"><img src="./assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="close-btn" id="closeNav">
                                <i class="fa-regular fa-circle-xmark" style="color: black;"></i>
                            </div>
                        </div>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./aboutUs.php">About</a></li>
                        <li><a href="./productList.php">Product</a></li>
                        <li><a href="./labs.php">Lab Report </a></li>
                        <li><a href="javascript:void(0)">FAQ’s</a></li>
                        <li><a href="javascript:void(0)">Wholesale</a></li>
                        <div class="nav-button">
                            <a href="./contact.php" class="nav-btn nav-btn-padding">Contact us</a>
                        </div>
                    </ul>
                    <div class="ham-button" style="text-align: right;" id="navbarToggler">
                        <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    let navbar = document.getElementById('headerNav');
    let navbarToggler = document.getElementById('navbarToggler')
    let closeNav = document.getElementById('closeNav');

   
    navbarToggler.onclick = () => {
        navbar.classList.remove('d-none'),
        navbar.style.transform = 'translateX(-16px)';
        navbarToggler.style.display = 'none'
    }
    closeNav.onclick = () => {
        navbar.classList.add('d-none')
        navbarToggler.style.display = 'block'
        navbar.style.transform = 'translateX(-250px)';
    }
</script>