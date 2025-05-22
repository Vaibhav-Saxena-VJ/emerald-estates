<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Emerald Estates</title>
        <meta name="description" content="Morden Bootstrap HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.ico">
            
        <!-- ======= All CSS Plugins here ======== -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/swiper-bundle.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        
        <!-- Plugin css -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/glightbox.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/aos.css">

        <!-- Custom Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    </head>

    <body>
        <!-- Preloader start -->
        <div id="preloader">
            <div class="loader--border"></div>
        </div>
        <!-- Preloader end -->
        
        <!-- Start header area -->
        <header class="header__section">
            <div class="header__sticky">
                <div class="container-fluid">
                    <div class="main__header d-flex justify-content-between align-items-center">
                        <div class="offcanvas__header--menu__open ">
                            <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                                <span class="visually-hidden">Offcanvas Menu Open</span>
                            </a>
                        </div>
                        <div class="main__logo">
                            <a class="main__logo--link" href="{{ url('/') }}">
                                <img class="main__logo--img" src="{{ asset('assets') }}/img/logo/logo-n.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="main__header--right d-mob-none d-flex align-items-center">
                            <a class="add__listing--btn solid__btn" href="#"><span>Reach Us</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L16.27 14.32C16.66 13.93 17.26 13.8 17.78 13.96C19.19 14.4 20.71 14.64 22.25 14.64C22.66 14.64 23 14.98 23 15.39V20.5C23 20.91 22.66 21.25 22.25 21.25C11.3 21.25 2.75 12.7 2.75 1.75C2.75 1.34 3.09 1 3.5 1H8.61C9.02 1 9.36 1.34 9.36 1.75C9.36 3.29 9.6 4.81 10.04 6.22C10.2 6.74 10.07 7.34 9.68 7.73L6.62 10.79Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header area -->

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="#">
                        <img class="main__logo--img" src="{{ asset('assets') }}/img/logo/logo-n.png" alt="logo-img">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                
                <nav class="offcanvas__menu d-none">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Home</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Listing</a>
                        </li>
                        
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#">Properties</a></li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Dashboard</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#">News</a></li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Pages</a>
                        </li>
                    </ul>
                </nav>
                <!-- <a class="add__listing--btn offcanvas__listing--btn solid__btn" href="#">
                    <span>Add Listing</span> 
                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 15.9992C12.4111 15.9992 16 12.4105 16 7.99962C16 3.58875 12.411 0 8 0C3.58901 0 0 3.58875 0 7.99962C0 12.4105 3.58901 15.9992 8 15.9992ZM4.19508 7.57155H7.57197V4.19439C7.57197 3.95805 7.76381 3.76636 8 3.76636C8.23634 3.76636 8.42804 3.95821 8.42804 4.19439V7.57155H11.8049C12.0413 7.57155 12.233 7.7634 12.233 7.99958C12.233 8.23592 12.0411 8.42762 11.8049 8.42762H8.42804V11.8046C8.42804 12.041 8.23619 12.2327 8 12.2327C7.76366 12.2327 7.57197 12.0408 7.57197 11.8046V8.42762H4.19508C3.95874 8.42762 3.76704 8.23577 3.76704 7.99958C3.76704 7.76324 3.9586 7.57155 4.19508 7.57155Z" fill="white"/>
                    </svg>
                </a> -->
                <div class="side__menu--footer mobile__menu--footer">
                    <div class="side__menu--info">
                        <div class="side__menu--info__list">
                            <h3 class="side__menu--info__title">Reach Us:</h3>
                            <p><a class="side__menu--info__text" href="tel:+1234567898">(+123) 456-7898</a></p>
                            <p><a class="side__menu--info__text" href="mailto:example@example.com">Example@example.com</a></p>
                        </div>
                    </div>
                    <div class="side__menu--share d-flex align-items-center">
                        <h3 class="side__menu--share__title">Follow us :</h3>
                        <ul class=" side__menu--share__wrapper d-flex align-items-center">
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.facebook.com/">
                                    <svg width="10" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://twitter.com/">
                                    <svg width="16" height="14" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.instagram.com/">
                                    <svg width="16" height="16" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                    </svg>  
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.pinterest.com/">
                                    <svg width="14" height="16" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                        </svg>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <main class="main__content_wrapper">
            <!-- Hero section -->
            <section class="listing__hero--section">
                <div class="listing__hero--section__inner position-relative">
                    <div class="listing__hero--slider">
                        <div class="swiper hero__swiper--column1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <div class=" listing__hero--slider__items position-relative">
                                    <img class="listing__hero--slider__media" src="{{ asset('assets') }}/img/hero/listing-details-hero.png" alt="img">
                                    <div class="listing__hero--slider__container">
                                        <div class="container">
                                        <!-- Hero Content -->
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">Welcome to Emerald Estates</h3>
                                            </div>
                                            <p class="listing__hero--slider__text">
                                                An emerald is as green as grass; <br>A ruby red as blood.
                                            </p>
                                        </div>
                                        <!-- Hero Content .\ -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class=" listing__hero--slider__items position-relative">
                                    <img class="listing__hero--slider__media" src="{{ asset('assets') }}/img/hero/listing-details-hero.png" alt="img">
                                    <div class="listing__hero--slider__container">
                                        <div class="container">
                                        <!-- Hero Content -->
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">Welcome to Emerald Estates</h3>
                                            </div>
                                            <p class="listing__hero--slider__text">A sapphire shines as blue as heaven;<br>A flint lies in the mud.</p>
                                        </div>
                                        <!-- Hero Content .\ -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class=" listing__hero--slider__items position-relative">
                                    <img class="listing__hero--slider__media" src="{{ asset('assets') }}/img/hero/listing-details-hero.png" alt="img">
                                    <div class="listing__hero--slider__container">
                                        <div class="container">
                                        <!-- Hero Content -->
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">Welcome to Emerald Estates</h3>
                                            </div>
                                            <p class="listing__hero--slider__text">A diamond is a brilliant stone; <br>To catch the world's desire;</p>
                                        </div>
                                        <!-- Hero Content .\ -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class=" listing__hero--slider__items position-relative">
                                    <img class="listing__hero--slider__media" src="{{ asset('assets') }}/img/hero/listing-details-hero.png" alt="img">
                                    <div class="listing__hero--slider__container">
                                        <div class="container">
                                        <!-- Hero Content -->
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">Welcome to Emerald Estates</h3>
                                            </div>
                                            <p class="listing__hero--slider__text">An opal holds a fiery spark; <br>But a flint holds fire.</p>
                                        </div>
                                        <!-- Hero Content .\ -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hero swiper -->
                    <div class="listing__small--hero__slider">
                        <div class="swiper hero__swiper--column3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Hero swiper items -->
                                    <div class="listing__small--hero__slider--items">
                                        <img src="{{ asset('assets') }}/img/hero/slider-small1.png" alt="img">
                                    </div>
                                    <!-- Hero swiper items .\ -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Hero swiper items -->
                                    <div class="listing__small--hero__slider--items">
                                        <img src="{{ asset('assets') }}/img/hero/slider-small2.png" alt="img">
                                    </div>
                                    <!-- Hero swiper items .\ -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Hero swiper items -->
                                    <div class="listing__small--hero__slider--items">
                                        <img src="{{ asset('assets') }}/img/hero/slider-small3.png" alt="img">
                                    </div>
                                    <!-- Hero swiper items .\ -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Hero swiper items -->
                                    <div class="listing__small--hero__slider--items">
                                        <img src="{{ asset('assets') }}/img/hero/slider-small1.png" alt="img">
                                    </div>
                                    <!-- Hero swiper items .\ -->
                                </div>
                                <div class="swiper-slide">
                                <!-- Hero swiper items -->
                                <div class="listing__small--hero__slider--items">
                                    <img src="{{ asset('assets') }}/img/hero/slider-small2.png" alt="img">
                                </div>
                                <!-- Hero swiper items .\ -->
                            </div>
                            </div>
                        </div>
                        <div class="swiper__nav--btn swiper-button-disabled swiper-button-prev">
                            <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.223772 5.27955L5.27967 0.223543C5.42399 0.0792188 5.61635 0 5.82145 0C6.02678 0 6.21902 0.0793326 6.36335 0.223543L6.82238 0.682693C6.96659 0.82679 7.04604 1.01926 7.04604 1.22448C7.04604 1.42958 6.96659 1.62854 6.82238 1.77264L3.87285 4.72866H13.2437C13.6662 4.72866 14 5.05942 14 5.48203V6.13115C14 6.55376 13.6662 6.91788 13.2437 6.91788H3.83939L6.82227 9.8904C6.96648 10.0347 7.04593 10.222 7.04593 10.4272C7.04593 10.6322 6.96648 10.8221 6.82227 10.9663L6.36323 11.424C6.21891 11.5683 6.02667 11.647 5.82134 11.647C5.61623 11.647 5.42388 11.5673 5.27955 11.423L0.223659 6.3671C0.0789928 6.22232 -0.000566483 6.02905 1.90735e-06 5.82361C-0.000452995 5.61748 0.0789928 5.4241 0.223772 5.27955Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="swiper__nav--btn swiper-button-next">
                            <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7762 5.27955L8.72033 0.223543C8.57601 0.0792188 8.38365 0 8.17855 0C7.97322 0 7.78098 0.0793326 7.63665 0.223543L7.17762 0.682693C7.03341 0.82679 6.95396 1.01926 6.95396 1.22448C6.95396 1.42958 7.03341 1.62854 7.17762 1.77264L10.1272 4.72866H0.756335C0.333835 4.72866 0 5.05942 0 5.48203V6.13115C0 6.55376 0.333835 6.91788 0.756335 6.91788H10.1606L7.17773 9.8904C7.03352 10.0347 6.95407 10.222 6.95407 10.4272C6.95407 10.6322 7.03352 10.8221 7.17773 10.9663L7.63677 11.424C7.78109 11.5683 7.97333 11.647 8.17866 11.647C8.38377 11.647 8.57612 11.5673 8.72045 11.423L13.7763 6.3671C13.921 6.22232 14.0006 6.02905 14 5.82361C14.0005 5.61748 13.921 5.4241 13.7762 5.27955Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Hero swiper .\ -->
                </div>
            </section>
            <!-- Hero section .\ -->

            <!-- Listing details section -->
            <section class="listing__details--section section--padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="listing__details--wrapper">
                                <div class="listing__details--content">
                                    <div class="listing__details--content__top mb-25 d-flex align-items-center justify-content-between">
                                        <div class="listing__details--meta">
                                            <ul class="listing__details--meta__wrapper d-flex align-items-center">
                                                <li><span class="listing__details--badge">Featured</span></li>
                                                <li><span class="listing__details--badge two">For sale</span></li>
                                                <li>
                                                    <span class="listing__details--meta__icon">
                                                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="listing__details--meta__text">2 years ago</span>
                                                </li>
                                                <li>
                                                    <span class="listing__details--meta__icon">
                                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"/>
                                                        </svg>                                                        
                                                    </span>
                                                    <span class="listing__details--meta__text">7214 views</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="listing__details--action d-flex">
                                            <li class="listing__details--action__list">
                                                <a class="listing__details--wishlist__btn" href="listing.html">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"/>
                                                    </svg>                                                                                                       
                                                    <span class="visually-hidden">listing</span>
                                                </a>
                                            </li>
                                            <li class="listing__details--action__list position-relative">
                                            <a class="listing__details--action__btn" href="#" aria-label="share button"  aria-expanded="false" data-bs-toggle="dropdown"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5111 11.2118C11.5684 11.2118 10.7529 11.6195 10.1923 12.282L5.86064 10.0396C6.06451 9.63191 6.16636 9.17334 6.16636 8.68916C6.16636 8.20498 6.03892 7.74642 5.86064 7.33868L10.1923 5.09633C10.7529 5.75879 11.5938 6.16652 12.5111 6.16652C14.1929 6.16652 15.5944 4.79065 15.5944 3.08326C15.5944 1.40149 14.2185 0 12.5111 0C10.8038 0.000355502 9.42786 1.45268 9.42786 3.13445C9.42786 3.54218 9.50429 3.89892 9.63173 4.25565L5.2236 6.52344C4.66302 5.96286 3.89856 5.63152 3.05765 5.63152C1.40149 5.63152 0 7.03301 0 8.71478C0 10.3966 1.37587 11.798 3.08326 11.798C3.92413 11.798 4.6886 11.4667 5.24922 10.9061L9.65734 13.1739C9.5299 13.5306 9.45347 13.8874 9.45347 14.2951C9.45347 15.9769 10.8293 17.3784 12.5367 17.3784C14.2439 17.3784 15.62 16.0025 15.62 14.2951C15.6196 12.5879 14.1928 11.2118 12.5112 11.2118L12.5111 11.2118ZM12.5111 1.09595C13.6323 1.09595 14.575 2.01325 14.575 3.15984C14.575 4.28104 13.6577 5.22374 12.5111 5.22374C11.3644 5.22391 10.447 4.28099 10.447 3.13441C10.447 2.01321 11.3644 1.0959 12.5111 1.0959V1.09595ZM3.08324 10.7786C1.96204 10.7786 1.01934 9.86132 1.01934 8.71474C1.01934 7.59354 1.93665 6.65084 3.08324 6.65084C4.20444 6.65084 5.14714 7.56815 5.14714 8.71474C5.14731 9.83593 4.20439 10.7786 3.08324 10.7786ZM12.5111 16.3334C11.3899 16.3334 10.4472 15.4161 10.4472 14.2695C10.4472 13.123 11.3645 12.2056 12.5111 12.2056C13.6577 12.2056 14.575 13.123 14.575 14.2695C14.575 15.4161 13.6321 16.3334 12.5111 16.3334Z" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Share</span>
                                            </a>
                                            <ul class="dropdown-menu share__dropdown--menu" style="margin: 0px;">
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.facebook.com/"><span>Facebook</span> <svg width="8" height="15" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" fill-opacity="1"></path>
                                                    </svg>
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="#modalToggle3"><span>Twitter</span> <svg width="15" height="12" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z" fill="currentColor"></path>
                                                    </svg>
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.instagram.com/"><span>Instagram</span> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z" fill="currentColor"></path>
                                                    </svg>                                                        
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.pinterest.com/"><span>Pinterest</span> <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor"></path>
                                                    </svg>                                                                                                                
                                                    </a>
                                                </li>
                                            </ul>
                                            </li>
                                            <li class="listing__details--action__list">
                                            <a class="listing__details--action__btn" href="listing.html">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.855 0C5.77166 0 3.77371 0.82758 2.30076 2.30076C0.82758 3.77375 0 5.77171 0 7.855C0 9.9383 0.82758 11.9363 2.30076 13.4092C3.77375 14.8824 5.7717 15.71 7.855 15.71C9.9383 15.71 11.9363 14.8824 13.4092 13.4092C14.8824 11.9363 15.71 9.9383 15.71 7.855C15.7073 5.77252 14.8789 3.77621 13.4062 2.30395C11.9338 0.831315 9.93743 0.00286936 7.85518 0.000182413L7.855 0ZM7.855 14.1388C6.18845 14.1388 4.59008 13.4767 3.41151 12.2983C2.23313 11.1197 1.571 9.52132 1.571 7.85482C1.571 6.18832 2.23313 4.5899 3.41151 3.41133C4.59008 2.23295 6.1885 1.57082 7.855 1.57082C9.5215 1.57082 11.1199 2.23295 12.2985 3.41133C13.4769 4.5899 14.139 6.18832 14.139 7.85482C14.1376 9.521 13.4751 11.1187 12.2969 12.2967C11.1189 13.4749 9.52118 14.1374 7.855 14.1388Z" fill="currentColor"></path>
                                                    <path d="M11.5835 7.06853H8.64034V4.12541C8.64034 3.84469 8.49072 3.58552 8.24772 3.44511C8.00471 3.30475 7.70514 3.30475 7.46213 3.44511C7.21912 3.58547 7.06951 3.84467 7.06951 4.12541V7.06853H4.12639C3.84567 7.06853 3.58649 7.21815 3.44609 7.46115C3.30573 7.70416 3.30573 8.00373 3.44609 8.24674C3.58645 8.48975 3.84564 8.63936 4.12639 8.63936H7.06951V11.5825C7.06951 11.8632 7.21912 12.1224 7.46213 12.2628C7.70513 12.4031 8.00471 12.4031 8.24772 12.2628C8.49072 12.1224 8.64034 11.8632 8.64034 11.5825V8.63936H11.5835C11.8642 8.63936 12.1234 8.48975 12.2638 8.24674C12.4041 8.00374 12.4041 7.70416 12.2638 7.46115C12.1234 7.21815 11.8642 7.06853 11.5835 7.06853Z" fill="currentColor"></path>
                                                </svg>                                                   
                                                <span class="visually-hidden">listing</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing__details--content__step">
                                        <h2 class="listing__details--title mb-25">The Essence of Emerald Estates</h2>
                                        <div class="listing__details--price__id d-flex align-items-center">
                                            <div class="listing__details--price d-flex">
                                                <span class="listing__details--price__new">$13000</span>
                                                <span class="listing__details--price__old">$16000</span>
                                            </div>
                                            <span class="listing__details--property__id">Property ID: HZ24</span>
                                        </div>
                                        <p class="listing__details--location__text">
                                            <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#006843"/>
                                            </svg>
                                            1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="listing__details--main__content">
                                    <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title">Description:</h3>
                                        <p class="listing__details--content__desc">An exclusive residential development by Shri Balaji Realty, where luxury, sustainability, and nature coexist in perfect harmony. Situated in the picturesque Khadakwasla backwaters, this project provides an unmatched living experience that combines modern living with serene natural beauty.</p>
                                        <p>Emerald: A Name That Echoes Nature’s Richness The emerald is known for its vivid green color, symbolizing nature, vitality, and growth. Just as an emerald shines with brilliance, Emerald Estates shines as a beacon of tranquility, luxury, and sustainability. Here, every corner is designed to embody the essence of green living. The landscape itself is a reflection of what we stand for: a commitment to nature, growth, and beauty. At Emerald Estates, we invite you to experience a lifestyle where nature is your companion and luxury is your FOR APPROVAL constant.</p>
                                        <h3 class="listing__details--content__title">Prime Location - A Perfect Escape</h3>
                                        <p class="listing__details--content__desc">The Gateway to Tranquil Living Emerald Estates is ideally located on Panshet Road, Khanapur, right next to the Khadakwasla.</p>
                                        <h3 class="listing__details--content__title">Backwaters. The property enjoys</h3> 
                                        <ul class="properties__amenities--step">
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Proximity to Pune: Just 12 km from Nanded City on Sinhagad Road.</span>
                                            </li>
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Accessibility: Well-connected to Pune’s key locations, while offering the perfect getaway from the hustle and bustle of the city.</span>
                                            </li>
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Stunning Views: Enjoy uninterrupted, panoramic views of the Khadakwasla Dam, Sinhgad Fort, and the Sahyadri Mountains.</span>
                                            </li>
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">The landscape provides an ideal blend of nature’s beauty and the convenience of city life. This is where you can retreat to nature without leaving behind modern-day comforts.</span>
                                            </li>  
                                        </ul> 
                                        <p class="listing__details--content__desc"></p>
                                        <h3 class="listing__details--content__title">Sustainable Living with Modern Luxury</h3>
                                        <p class="listing__details--content__desc"><strong>Designed for a Greener Future.</strong> At Emerald Estates, sustainability isn’t just a feature—it’s the core philosophy of our development. We have integrated eco-friendly elements into every aspect of the project to ensure that your home contributes to the preservation of the natural environment.</p>
                                        <ul class="properties__amenities--step">
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Rainwater Harvesting: For irrigation and domestic use, ensuring sustainable water management.</span>
                                            </li>
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Solar Lighting: Harnessing the sun’s energy for reduced energy consumption.</span>
                                            </li>
                                            <li class="properties__amenities--list d-flex align-items-center">
                                                <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <span class="properties__amenities--text">Energy-Efficient Design: Homes designed to minimize energy consumption, ensuring a reduced ecological footprint.</span>
                                            </li> 
                                        </ul>
                                        <p class="listing__details--content__desc"></p>
                                        <div class="apartment__info listing__d--info">
                                            <div class="apartment__info--wrapper d-flex">
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="{{ asset('assets') }}/img/icon/bed-realistic.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title">Bedrooms</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="{{ asset('assets') }}/img/icon/modern-car.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title"> Car Parking</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="{{ asset('assets') }}/img/icon/set-square.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title">1249 Sqft</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step properties__info mb-80">
                                        <h3 class="listing__details--content__title mb-40">Properties Details:</h3>
                                        <ul class="properties__details--info__wrapper d-flex">
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Price:</span>
                                                <span class="properties__details--info__subtitle">$268,000</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Property ID:</span>
                                                <span class="properties__details--info__subtitle">Th26157096</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Area Size:</span>
                                                <span class="properties__details--info__subtitle">400 SqFt</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Land Area Size:</span>
                                                <span class="properties__details--info__subtitle">1300 Sq Ft</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Rooms:</span>
                                                <span class="properties__details--info__subtitle">03</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Washroom:</span>
                                                <span class="properties__details--info__subtitle">03</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Garage:</span>
                                                <span class="properties__details--info__subtitle">04</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing__details--content__step properties__amenities mb-80">
                                        <h3 class="listing__details--content__title mb-40">Properties Amenities</h3>
                                        <div class="properties__amenities--wrapper d-flex">
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Air Conditioning</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Microwave</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Central Heating</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Washer</span>
                                                </li>
                                            </ul>
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Laundry</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Outdoor Shower</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Swimming Pool</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Wifi</span>
                                                </li>
                                            </ul>
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Window Covering</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Refrigerator</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Alarm System</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Window Coverings</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step mb-80">
                                        <div class="properties__floor--plans d-flex">
                                            <div class="properties__floor--plans__content">
                                                <h3 class="listing__details--content__title mb-40">Floor Plans</h3>
                                                <ul class="properties__floor--plans__info">
                                                    <li>
                                                        <img src="{{ asset('assets') }}/img/icon/properties-icon1.png" alt="icon">
                                                        <span>Total Size: 900 </span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets') }}/img/icon/properties-icon2.png" alt="icon">
                                                        <span>Bedrooms: 2 </span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets') }}/img/icon/properties-icon3.png" alt="icon">
                                                        <span>Bathrooms: 2 </span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets') }}/img/icon/properties-icon4.png" alt="icon">
                                                        <span>Price: $800,000</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="properties__floor--plans__gallery">
                                                <ul class="nav floor__plans--tab__btn">
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field active" data-bs-toggle="tab" data-bs-target="#floor1" type="button"> 
                                                            First Floor                                               
                                                        </button>
                                                    </li>
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field " data-bs-toggle="tab" data-bs-target="#floor2" type="button">
                                                            2nd Floor
                                                        </button>
                                                    </li>
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field " data-bs-toggle="tab" data-bs-target="#floor3" type="button">
                                                            3nd Floor
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="floor1">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="{{ asset('assets') }}/img/other/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="floor2">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="{{ asset('assets') }}/img/other/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="floor3">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="{{ asset('assets') }}/img/other/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step mb-80">
                                        <div class="listing__details--location__header d-flex justify-content-between mb-40">
                                            <div class="listing__details--location__header--left">
                                                <h3 class="listing__details--content__title m-0">Location & Google Maps</h3>
                                            </div>
                                            <div class="location__google--maps">
                                                <details>
                                                    <summary>Open on Google Maps</summary>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20227915.86434928!2d1.2189515269861546!3d38.76296158058813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6f73e994d3fb5891%3A0x783ff0a076fdb99!2sCosing%20Connect%20Ltd%2C%20United%20Kingdom!5e0!3m2!1sen!2sbd!4v1699676848803!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </details>
                                            </div>
                                        </div>
                                        <div class="location__google--maps__info d-flex">
                                            <ul class="location__google--maps__info--step">
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Address:</span>
                                                    <span class="location__google--maps__info--subtitle">289 Foxhall Ave, Kingston</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Country: </span>
                                                    <span class="location__google--maps__info--subtitle">United States</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Province/State: </span>
                                                    <span class="location__google--maps__info--subtitle">New Work</span>
                                                </li>
                                            </ul>
                                            <ul class="location__google--maps__info--step">
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">City/Town:</span>
                                                    <span class="location__google--maps__info--subtitle">United States</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Neighborhood:  </span>
                                                    <span class="location__google--maps__info--subtitle">United States</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title mb-40">Video</h3>
                                        <div class="listing__details--video__thumbnail position-relative">
                                            <img src="{{ asset('assets') }}/img/property/property-video-thumbnail.png" alt="img">
                                            <div class="bideo__play">
                                                <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                                    </svg>                                        
                                                    <span class="visually-hidden">Video Play</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step">
                                        <h3 class="listing__details--content__title mb-40">Property Review</h3>
                                        <div class="listing__details--review d-flex">
                                            <div class="details__review--box">
                                                <h3 class="details__review--box__point">4.5</h3>
                                                <h5 class="details__review--box__subtitle">out of <span>5.0</span></h5>
                                                <div class="details__review--box__rating">
                                                    <img src="{{ asset('assets') }}/img/icon/rating.png" alt="icon">
                                                </div>
                                            </div>
                                            <div class="details__review--wrapper d-flex">
                                                <div class="details__review--step">
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="details__review--step">
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Listing page section . -->

        <!-- Social share section -->
        <div class="social__media--area bg__style">
                <ul class="social__media--wrapper d-flex">
                    <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.facebook.com/"> <svg width="9" height="18" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" fill-opacity="1"/>
                        </svg>
                        <span>Facebook</span>
                        </a>
                    </li>
                    <li class="social__media--list"><a class="social__media--link" target="_blank"  href="https://twitter.com/"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                    </svg>
                    <span>Twitter</span>
                        </a>
                    </li>
                    <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.instagram.com/"> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z" fill="currentColor"/>
                        </svg>  
                        <span>Instagram</span>                                                      
                        </a>
                    </li>
                    <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.youtube.com/"> <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.5673 2.30071C20.3252 1.40109 19.616 0.691976 18.7165 0.449728C17.0732 0 10.4998 0 10.4998 0C10.4998 0 3.92659 0 2.28325 0.432585C1.40109 0.674672 0.674512 1.40125 0.432425 2.30071C0 3.94389 0 7.3517 0 7.3517C0 7.3517 0 10.7767 0.432425 12.4027C0.674672 13.3021 1.38379 14.0114 2.28341 14.2537C3.94389 14.7034 10.5 14.7034 10.5 14.7034C10.5 14.7034 17.0732 14.7034 18.7165 14.2708C19.6161 14.0287 20.3252 13.3195 20.5675 12.42C20.9999 10.7767 20.9999 7.369 20.9999 7.369C20.9999 7.369 21.0172 3.94389 20.5673 2.30071Z" fill="currentColor"/>
                        <path d="M8.40625 10.4996L13.8724 7.35138L8.40625 4.20312V10.4996Z" fill="white"/>
                        </svg>  
                        <span>Youtube</span>                                                 
                        </a>
                    </li>
                    <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.whatsapp.com/"> <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 10C18.5 5.71875 15.0312 2.25 10.75 2.25C6.46875 2.25 3 5.71875 3 10C3 13.3125 5.03125 16.0938 7.90625 17.2188C7.84375 16.625 7.78125 15.6875 7.9375 15C8.09375 14.4062 8.84375 11.1562 8.84375 11.1562C8.84375 11.1562 8.625 10.6875 8.625 10C8.625 8.9375 9.25 8.125 10.0312 8.125C10.6875 8.125 11 8.625 11 9.21875C11 9.875 10.5625 10.875 10.3438 11.8125C10.1875 12.5625 10.75 13.1875 11.5 13.1875C12.875 13.1875 13.9375 11.75 13.9375 9.65625C13.9375 7.78125 12.5938 6.5 10.7188 6.5C8.5 6.5 7.21875 8.15625 7.21875 9.84375C7.21875 10.5312 7.46875 11.25 7.78125 11.625C7.84375 11.6875 7.84375 11.7812 7.84375 11.8438C7.78125 12.0938 7.625 12.625 7.625 12.7188C7.59375 12.875 7.5 12.9062 7.34375 12.8438C6.375 12.375 5.78125 10.9688 5.78125 9.8125C5.78125 7.375 7.5625 5.125 10.9062 5.125C13.5938 5.125 15.6875 7.0625 15.6875 9.625C15.6875 12.2812 14 14.4375 11.6562 14.4375C10.875 14.4375 10.125 14.0312 9.875 13.5312C9.875 13.5312 9.5 15.0312 9.40625 15.375C9.21875 16.0625 8.75 16.9062 8.4375 17.4062C9.15625 17.6562 9.9375 17.75 10.75 17.75C15.0312 17.75 18.5 14.2812 18.5 10Z" fill="#FFB966"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 22H5.5C4.04133 21.9999 2.64242 21.4205 1.61098 20.389C0.579547 19.3576 6.38127e-05 17.9587 0 16.5L0 5.5C6.38127e-05 4.04133 0.579547 2.64242 1.61098 1.61098C2.64242 0.579547 4.04133 6.38127e-05 5.5 0L16.5 0C17.9587 0 19.3576 0.579463 20.3891 1.61091C21.4205 2.64236 22 4.04131 22 5.5V16.5C22 17.9587 21.4205 19.3576 20.3891 20.3891C19.3576 21.4205 17.9587 22 16.5 22Z" fill="#00D264"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3125 6.1875H16.5C17.2931 6.18745 18.0559 5.88282 18.6309 5.33652C19.2059 4.79021 19.5491 4.04396 19.5897 3.25188C19.6303 2.45979 19.3652 1.68237 18.849 1.08015C18.3329 0.47794 17.6052 0.0969313 16.8163 0.0158125C16.7111 0.00996875 16.6069 0 16.5 0H5.5C4.04133 6.38127e-05 2.64242 0.579547 1.61098 1.61098C0.579547 2.64242 6.38127e-05 4.04133 0 5.5L0 16.5C6.3815e-05 13.765 1.08658 11.142 3.02053 9.20803C4.95449 7.27408 7.57748 6.18757 10.3125 6.1875Z" fill="#00EB78"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 11C15.4122 11 14.3488 11.3226 13.4444 11.9269C12.5399 12.5313 11.8349 13.3902 11.4187 14.3952C11.0024 15.4002 10.8935 16.5061 11.1057 17.573C11.3179 18.6399 11.8417 19.6199 12.6109 20.3891C13.3801 21.1583 14.3601 21.6821 15.427 21.8943C16.4939 22.1065 17.5998 21.9976 18.6048 21.5813C19.6098 21.1651 20.4687 20.4601 21.0731 19.5556C21.6774 18.6512 22 17.5878 22 16.5V5.5C22 6.95869 21.4205 8.35764 20.3891 9.38909C19.3576 10.4205 17.9587 11 16.5 11Z" fill="#00B950"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.45011 16.1883C7.54161 16.1623 7.63751 16.1555 7.73176 16.1684C7.82601 16.1813 7.91656 16.2136 7.99771 16.2632C9.36447 17.0775 10.9817 17.3644 12.5451 17.0698C14.1086 16.7753 15.5105 15.9197 16.4874 14.6639C17.4642 13.4082 17.9485 11.8387 17.8492 10.2509C17.75 8.66304 17.074 7.16616 15.9485 6.04178C14.8229 4.91741 13.3253 4.24302 11.7373 4.14547C10.1494 4.04791 8.58047 4.53391 7.32574 5.51206C6.071 6.4902 5.21688 7.89308 4.92402 9.45685C4.63116 11.0206 4.91974 12.6375 5.73549 14.0034C5.78495 14.0843 5.81709 14.1746 5.82987 14.2686C5.84265 14.3625 5.8358 14.4581 5.80974 14.5493C5.61827 15.2268 5.15627 16.8438 5.15627 16.8438C5.15627 16.8438 6.77327 16.3818 7.45011 16.1883ZM4.54405 14.6899C3.56124 13.0332 3.21704 11.0746 3.57607 9.1821C3.9351 7.28956 4.97267 5.59318 6.49394 4.41151C8.01522 3.22984 9.91554 2.64416 11.8381 2.76447C13.7606 2.88477 15.5731 3.70277 16.9352 5.06487C18.2973 6.42697 19.1153 8.23946 19.2356 10.162C19.3559 12.0845 18.7702 13.9849 17.5886 15.5061C16.4069 17.0274 14.7105 18.065 12.818 18.424C10.9254 18.783 8.96692 18.4388 7.31021 17.456C7.31021 17.456 5.11811 18.0823 4.03255 18.3927C3.97358 18.4095 3.91119 18.4102 3.85185 18.3948C3.7925 18.3794 3.73835 18.3484 3.69499 18.3051C3.65164 18.2617 3.62065 18.2076 3.60524 18.1482C3.58983 18.0889 3.59055 18.0265 3.60733 17.9675C3.91774 16.882 4.54405 14.6899 4.54405 14.6899Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.55649 8.5207C7.66343 10.0599 8.32036 11.5094 9.40733 12.6044C10.4943 13.6995 11.9388 14.3671 13.4772 14.4855H13.4779C13.7235 14.5045 13.9704 14.4701 14.2014 14.3846C14.4325 14.2992 14.6423 14.1647 14.8165 13.9905L15.0564 13.7505C15.1697 13.6372 15.2334 13.4835 15.2335 13.3232V12.8138C15.2334 12.7499 15.2157 12.6873 15.1821 12.633C15.1485 12.5787 15.1005 12.5347 15.0434 12.5061C14.6814 12.3253 13.8956 11.9324 13.5106 11.7399C13.446 11.7076 13.3729 11.6965 13.3017 11.708C13.2304 11.7195 13.1646 11.7532 13.1135 11.8042C12.9217 11.996 12.6185 12.2995 12.4467 12.4711C12.4067 12.5111 12.3574 12.5406 12.3033 12.557C12.2491 12.5735 12.1918 12.5763 12.1363 12.5653L12.1332 12.5646C11.4677 12.4315 10.8565 12.1044 10.3766 11.6245C9.89667 11.1446 9.56956 10.5334 9.43646 9.86786L9.43577 9.86477C9.42474 9.80927 9.42756 9.75191 9.44399 9.69777C9.46042 9.64362 9.48995 9.59437 9.52996 9.55436C9.70149 9.38248 10.005 9.0793 10.1968 8.88748C10.2478 8.83641 10.2815 8.77059 10.293 8.69934C10.3046 8.62809 10.2934 8.55501 10.2611 8.49045C10.0686 8.10545 9.67571 7.31964 9.49489 6.95767C9.46631 6.90056 9.42239 6.85252 9.36805 6.81895C9.31371 6.78538 9.25111 6.76759 9.18724 6.76758H8.75411C8.65126 6.76761 8.54957 6.78923 8.45559 6.83103C8.36162 6.87284 8.27747 6.9339 8.20858 7.01027C8.13949 7.08727 8.06008 7.17527 7.98033 7.26395C7.83024 7.43051 7.71521 7.62558 7.6421 7.83754C7.56899 8.04949 7.53929 8.274 7.55477 8.49767C7.55546 8.50523 7.5558 8.5128 7.55649 8.5207Z" fill="white"/>
                        </svg>    
                        <span>Whatsapp</span>                                                                  
                        </a>
                    </li>
                    <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.pinterest.com/"> <svg width="14" height="16" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor"/>
                        </svg>    
                        <span>Pinterest</span>                                                                                                            
                        </a>
                    </li>
                </ul>
        </div>
        <!-- Social share section .\ -->

            <!-- Start footer section -->
            <footer class="footer footer__section ">
                <div class="container">
                    <div class="main__footer footer__wrapper color-offwhite">
                        <div class="row ">
                            <div class="col-xl-3 col-lg-5 col-md-6">
                                <div class="footer__widget">
                                    <h2 class="footer__widget--title about">About Us <button class="footer__widget--button" aria-label="footer widget button"></button>
                                        <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </h2>
                                    <div class="footer__widget--inner">
                                        <div class="footer__logo">
                                            <a class="footer__logo--link display-block" href="#">
                                                <img class="footer__logo--img" src="{{ asset('assets') }}/img/logo/logo-n.png" alt="logo-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="footer__widget">
                                    <h2 class="footer__widget--title ">contact@domain.com <button class="footer__widget--button" aria-label="footer widget button"></button>
                                        <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="footer__widget">
                                    <h2 class="footer__widget--title ">+91 84516 65977 <button class="footer__widget--button" aria-label="footer widget button"></button>
                                        <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="footer__widget">
                                    <h2 class="footer__widget--title ">1421 San Pedro St, Los Angeles, CA <button class="footer__widget--button" aria-label="footer widget button"></button>
                                        <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom color-offwhite">
                    <div class="container">
                        <div class="footer__bottom--inner d-flex justify-content-between align-items-center">
                            <p class="copyright__content mb-0"><span class="text__secondary">© 2024 All Rights Reserved.</span> Designed & Developed By <a class="copyright__content--link" target="_blank" href="https://jfstechnologies.com/">JFS Technologies</a>.</p>
                            <ul class="footer__bottom--menu d-flex">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer section -->

        </main>


        <!-- Scroll top bar -->
        <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
        
        <!-- All Script JS Plugins here  -->
        <script src="{{ asset('assets') }}/js/vendor/popper.js" defer="defer"></script>
        <script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js" defer="defer"></script>
        <script src="{{ asset('assets') }}/js/plugins/swiper-bundle.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/glightbox.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/aos.js"></script>

        <!-- Customscript js -->
        <script src="{{ asset('assets') }}/js/script.js"></script>
    </body>
</html>