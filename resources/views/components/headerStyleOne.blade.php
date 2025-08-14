<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <p class="main-menu-two__top-text">CodeMet That Ensures Your IT Runs Seamlessly, Anytime and Every
                Time</p>
            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                        <p>38 Rabindra Sarani, Dhaka 1230</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-search-mail"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:support@codemet.xyz">support@codemet.xyz</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:+8801740070919">+880 1740070919</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                alt="" style="width: 170px; height:50px"></a>
                    </div>
                </div>
                <div class="main-menu-two__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <x-menuList />
                </div>
                <div class="main-menu-two__right">

                    <div class="main-menu-two__btn-box">
                        <a href="{{ route('contact') }}" class="thm-btn">Get in Touch<span
                                class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
