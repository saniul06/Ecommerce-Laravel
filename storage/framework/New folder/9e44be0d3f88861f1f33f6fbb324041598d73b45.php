<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->

    


    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend')); ?>/css/custom.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo e(asset('public/frontend')); ?>/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <?php
            $total = 0.00;
            $cart = App\Cart::select('quantity', 'price')->where('ip', request()->ip())->get();
            foreach ($cart as $item) {
            $total += $item->quantity * $item->price;
            }
            ?>
            <div class="header__cart__price">item:
                <span id="amount">

                    $<?php echo e($total); ?>

                </span>
            </div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?php echo e(asset('public/frontend')); ?>/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('shop.page')); ?>">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href=<?php echo e(route('cart-page')); ?>>Shoping Cart</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <?php if(Auth::guest()): ?>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> Login</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user"></i> Register</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo e(route('seller')); ?>"><i class="fa fa-user"></i> Be a seller</a>
                                </div>
                            <?php endif; ?>

                            <?php if(Auth::check()): ?>


                                <div class="d">
                                    <button class="b">Welcome <?php echo e(Auth::user()->name); ?></button>
                                    <div class="t">
                                        <?php if(Auth::user()->role_id ==2): ?>
                                        <a href=<?php echo e(route('user.profile')); ?>>Profile</a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('logout')); ?>">Logout</a>
                                    </div>
                                </div>
                        </div>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href=<?php echo e(url('/')); ?>><img src="<?php echo e(asset('public/frontend')); ?>/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('shop.page')); ?>">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href=<?php echo e(route('cart-page')); ?>>Shoping Cart</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <?php
                        $total = 0.00;
                        $cart = App\Cart::select('quantity', 'price')->where('ip', request()->ip())->get();
                        foreach ($cart as $item) {
                        $total += $item->quantity * $item->price;
                        }
                        $quantity = App\Cart::where('ip', request()->ip())->sum('quantity');
                        ?>
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="<?php echo e(route('cart-page')); ?>"><i class="fa fa-shopping-bag"></i> <span
                                        id='quantity'><?php echo e($quantity); ?></span></a></li>
                        </ul>
                        <div class="header__cart__price" style="font-size:16px">item: <span
                                id="amount">$<?php echo e($total); ?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal" id="myDIV">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            <?php
                            $cat = App\Category::all()->where('status', 1);
                            ?>
                            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('category.page', $item->id)); ?>"><?php echo e($item->category_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <?php echo $__env->yieldContent('banner'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <?php echo $__env->yieldContent('frontend-content'); ?>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo e(asset('public/frontend')); ?>/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img
                                src="<?php echo e(asset('public/frontend')); ?>/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/ajax-frontend.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/mixitup.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/js/main.js"></script>

    <?php if(Session::has('message')): ?>
        <script>
            window.onload = function() {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: '<?php echo session("message"); ?>',
                    showConfirmButton: false,
                    timer: 3000
                })
            }

        </script>
    <?php endif; ?>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/nn/resources/views/layouts/frontend-master.blade.php ENDPATH**/ ?>