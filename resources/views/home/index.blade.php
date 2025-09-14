@extends('layouts.layout1')
@section('title', 'Castilo Cloud Secure Platform as a Service (SPaaS)')


@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->

    <!--Main Slider Two Start-->
    <section class="main-slider-two">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-1.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="#touch">Help</a></li>
                        <li><a href="#touch">Support</a></li>
                        <li><a href="#touch">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="https://www.facebook.com"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">CASTILO CLOUD, a fully managed private cloud
                                            platform

                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">
                                        CASTILO CLOUD </h2>
                                    <p class="main-slider-two__text"> Smart CASTILO CLOUD inherently establishes
                                        state-of-the-art
                                        Artificially Intelligent Cybersecurity MDR (Managed Detection and
                                        Response) which is purpose-built to provide both defensive and
                                        offensive
                                        measures to secure your prized IT assets. a fully managed private cloud platform,
                                        sets itself
                                        apart from its traditional counterparts by means of its
                                        exceptional features. The platform's team comprises highly experienced professionals
                                        who work tirelessly to design a
                                        resilient architecture that caters to your business needs and delivers unparalleled
                                        performance. </p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="#touch" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-2.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="{{ route('about') }}">Help</a></li>
                        <li><a href="{{ route('contact') }}">Support</a></li>
                        <li><a href="{{ route('faq') }}">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="https://www.facebook.com"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">CASTILO CLOUD, a fully managed private cloud
                                            platform

                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">
                                        <span>CASTILO CLOUD -</span> composite private CLOUD service is a
                                        comprehensive Secure Platform as a Service (SPaaS) solution
                                    </h2>
                                    <p class="main-slider-two__text">
                                        that encompasses all the critical criteria required for a robust and Hyper
                                        converged secure private cloud infrastructure (HCI) and Platform. This
                                        service guarantees high availability, performance, scalability, reliability,
                                        visibility plus more visibility, economy, local regulatory compliance, and
                                        cybersecurity. It is a holistic platform that offers businesses an efficient
                                        and reliable way to manage their IT infrastructure and Applications.</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="#touch" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-2-3.jpg') }});"></div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="#touch">Help</a></li>
                        <li><a href="#touch">Support</a></li>
                        <li><a href="#touch">Faqs</a></li>
                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">Follow Us:</h4>
                        <div class="main-slider-two__social-box-inner">

                            <a href="https://www.facebook.com"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">CASTILO CLOUD, a fully managed private cloud
                                            platform
                                        </p>
                                    </div>
                                    <h2 class="main-slider-two__title">CASTILO CLOUD <br>
                                        <span>offers Big Data management</span> <br> services
                                    </h2>
                                    <p class="main-slider-two__text">to
                                        assist organizations in making informed and competitive
                                        business decisions, presenting actionable insights
                                        through BI reports.</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="#touch" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- If we need navigation buttons -->
            <div class="main-slider-two__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-up"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-up"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider Two End-->

    <!--About Two Start -->
    <section class="about-two">
        <div class="about-two__shape-2"></div>
        <div class="about-two__shape-3">
            <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-two__img-2">
                                <img src="{{ asset('assets/images/resources/about-two-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-two__shape-1"></div>
                        </div>
                        <div class="about-two__client-box">
                            <ul class="about-two__client-img-list list-unstyled">
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-1.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-2.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1-3.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-plus"></span></a>
                                </li>
                            </ul>
                            <p class="about-two__client-text"><span class="odometer"
                                    data-count="120">00</span><span>K</span> Satisfied Client</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">CASTILO CLOUD
                                <span>a fully managed private cloud platform</span>

                            </h2>
                        </div>
                        <p class="about-two__text">to grow sets itself apart from its
                            traditional counterparts by means of its
                            exceptional features. The platform's team comprises highly experienced professionals who
                            work tirelessly to design a
                            resilient architecture that caters to your business needs and delivers unparalleled
                            performance. CASTILO CLOUD inherently establishes state-of-the-art Artificially
                            Intelligent Cybersecurity MDR (Managed Detection and
                            Response), which is purpose-built to provide both defensive and offensive measures to secure
                            your prized IT assets.</p>
                        <div class="about-two__points-box">
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Scalability<br> For Every Business <br> Ransomware Free Backup</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>High Availability<br> Visibility Performance <br> Business Intelligence</p>
                                </li>
                            </ul>
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Cyber Security<br> Resiliency</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Data Privacy<br> Complaince<br></p>
                                </li>
                            </ul>
                        </div>
                        <div class="about-two__experience-contact-and-btn">
                            <div class="about-two__experience-box">
                                <div class="about-two__experience-count-box">
                                    <h3 class="odometer" data-count="35">00</h3>
                                    <span> </span>
                                </div>
                                <p class="about-two__experience-text">Years of
                                    <br> Experience
                                </p>
                            </div>
                            <div class="about-two__call-box">
                                <div class="about-two__call-icon">
                                    <span class="icon-customer-service-headset"></span>
                                </div>
                                <div class="about-two__call-content">
                                    <span>call us for inquiry</span>
                                    <p><a href="tel:+8801941483738">+8801941483738</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="counter-two__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/counter-two-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-trophy"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="120">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">Creative Plus award</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-user"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="300">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">Expert Team Members</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-chat"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="20">00</h3>
                                <span>M</span>
                            </div>
                            <p class="counter-two__text">Happy Clients Review</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-folder"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="1.5">00</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-two__text">Project Completed</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
            </div>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Services Two Start -->
    <section class="services-two">
        <div class="services-two__shape-1"></div>
        <div class="container">
            <div class="services-two__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Our Product & Service Partners</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Your Business with Cutting-Edge IT<br>
                        Solutions <img src="{{ asset('assets/images/services/section-title-img.jpg') }}" alt="">
                        <span>Innovative IT Services</span><br><span>Tailored for Your Success</span>
                    </h2>
                </div>
                <a href="{{ route('services') }}" class="services-two__round-text-box">
                    <div class="services-two__round-text-box-outer">
                        <div class="services-two__round-text-box-inner">
                            <div class="services-two__curved-circle">
                            </div>
                            <div class="services-two__round-icon">
                                <img src="{{ asset('assets/images/icon/services-two-round-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-two__bottom">
                <div class="services-two__services-list">
                    <div class="services-two__services-list-single services-two__services-list-single-1">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="#touch">Oracle
                                    <br> Virtual Box</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Microsoft Hyper-V</p>
                                    <p><span class="icon-plus"></span>vmware</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Cloud Stack</p>
                                    <p><span class="icon-plus"></span>KVM</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>AWS</p>
                                    <p><span class="icon-plus"></span>Microsoft Azure</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-1.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('about') }}">Up
                                    <br> Cloud</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>HAPROXY</p>
                                    <p><span class="icon-plus"></span>GALERA CLUSTER</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Mysql</p>
                                    <p><span class="icon-plus"></span>Maria DB</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Microsoft SQL Server</p>
                                    <p><span class="icon-plus"></span>Oracle Database</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-2.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('about') }}">OPN
                                    <br> Sense</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Pf Sense</p>
                                    <p><span class="icon-plus"></span>Cloudflare</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>INDUSFACE</p>
                                    <p><span class="icon-plus"></span>POWER BI</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>NGINX</p>
                                    <p><span class="icon-plus"></span>Apache</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-3.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('about') }}">Docker
                                    <br> Kubernetes</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Ubuntu</p>
                                    <p><span class="icon-plus"></span>CentOS</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>FreeBSD</p>
                                    <p><span class="icon-plus"></span>Windows Server</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Elasticsearch</p>
                                    <p><span class="icon-plus"></span>Splunk</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-4.jpg') }}" alt="Image">
                        </div>
                    </div>


                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title"><a href="{{ route('about') }}">Ansible
                                    <br> ZABBIX</a></h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>Prometheus</p>
                                    <p><span class="icon-plus"></span>Grafana</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Databhub Asia</p>
                                    <p><span class="icon-plus"></span>Windows Server</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>Equinix</p>
                                    <p><span class="icon-plus"></span>Backup247.com.au</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-4.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Two End -->

    <!-- Why Choose One Start -->
    <section class="why-choose-one">
        <div class="why-choose-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">
        </div>
        <div class="why-choose-one__shape-4"></div>
        <div class="why-choose-one__shape-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Why Chooses Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Elevate Growth <span>with
                                    Our</span><br><span>Cutting-Edge IT</span>
                                Solutions<br> for Success
                            </h2>
                        </div>
                        <p class="why-choose-one__text">At CASTILO Cloud, we deliver a secure, hyper-converged private
                            cloud platform designed for high performance, scalability, and compliance. Our SPaaS solution
                            ensures cost-effective infrastructure, robust cybersecurity, and seamless IT management. With
                            enterprise-grade reliability and local regulatory compliance, we help businesses grow
                            confidently in a secure digital environment. </p>
                        <ul class="why-choose-one__progress-list list-unstyled">
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Secure Platform as a Service (SPaaS)</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="98%">
                                            <div class="count-text">98%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Big Data Management & BI Insights</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Advanced Backup & Ransomware Protection</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                            <div class="count-text">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">Global Private & Hybrid Cloud Infrastructure
                                    </h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="why-choose-one__btn-and-client-info">
                            <div class="why-choose-one__btn-box">
                                <a href="#touch" class="thm-btn">Connect us<span class="icon-right-arrow"></span></a>
                            </div>
                            <div class="why-choose-one__client-box">
                                <div class="why-choose-one__client-img">
                                    <img src="{{ asset('assets/images/resources/why-choose-one-client-img.jpg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-one__client-content">
                                    <h3>~Shaerul H Joarder (Neel)</h3>
                                    <span>Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="{{ asset('assets/images/resources/why-choose-one-img-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-one__shape-1 img-bounce">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-one__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose One End -->

    <!-- Sliding Text Three Start -->
    <section class="sliding-text-three">
        <div class="sliding-text-three__wrap">
            <ul class="sliding-text-three__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Secure Platform as a Service (SPaaS)" class="sliding-text-three__title">Secure
                        Platform as a Service (SPaaS)</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="AI-Powered Managed Detection & Response (MDR)" class="sliding-text-three__title">
                        AI-Powered Managed Detection & Response (MDR)</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Security Service Edge (SSE) Security Suite" class="sliding-text-three__title">Security
                        Service Edge (SSE) Security Suite</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Big Data Analytics & BI Reporting" class="sliding-text-three__title">Big Data
                        Analytics & BI Reporting</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Advanced Backup & Ransomware Protection" class="sliding-text-three__title">Advanced
                        Backup & Ransomware Protection</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="DevOps CI/CD Staging-to-Production Support" class="sliding-text-three__title">DevOps
                        CI/CD Staging-to-Production Support</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Hybrid & On-Premise Cloud Solutions" class="sliding-text-three__title">Hybrid &
                        On-Premise Cloud Solutions</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Data Center Interconnection & Global Access" class="sliding-text-three__title">Data
                        Center Interconnection & Global Access</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Business Continuity Planning (BCP) & Disaster Recovery (DC-DR)"
                        class="sliding-text-three__title">
                        Business Continuity Planning (BCP) & Disaster Recovery (DC-DR)</h2>
                    <span class="icon-star"></span>
                </li>
                <li>
                    <h2 data-hover="Threat Intelligence & XDR Integration" class="sliding-text-three__title">Threat
                        Intelligence & XDR Integration</h2>
                    <span class="icon-star"></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

    <!-- Process Two Start -->
    <section class="process-two">
        <div class="process-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/process-two-bg.jpg') }});">
        </div>
        <div class="process-two__bg-shape float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/process-two-bg-shape.png') }});">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Working Process</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Our Seamless Process <br><span>From Concept to
                        Creation</span>
                </h2>
            </div>
            <ul class="row list-unstyled">
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Consultation & Requirements Analysis</h3>
                        <p class="process-two__text">We begin by understanding your organization’s infrastructure needs,
                            <br>
                            security requirements, and business objectives to design a tailor-made private cloud solution
                        </p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="process-two__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-2.png') }}" alt="">
                        </div>
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Architecture Design & Deployment</h3>
                        <p class="process-two__text">Our expert team designs a hyper-converged, secure private cloud
                            architecture with built-in AI-powered cybersecurity, <br> backup, and disaster recovery
                            capabilities,
                            followed by seamless deployment.</p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Integration & Optimization</h3>
                        <p class="process-two__text">We integrate your applications, data, and DevOps pipelines into the
                            <br>
                            CASTILO CLOUD platform, ensuring high performance, scalability, and compliance with minimal
                            disruption.
                        </p>
                    </div>
                </li>

                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Continuous Monitoring & Support</h3>
                        <p class="process-two__text">With AI-driven MDR, SSE security layers, and 24/7 support, we provide
                            real-time monitoring, threat detection,<br> and performance optimization to keep your
                            infrastructure
                            secure and efficient.
                        </p>
                    </div>
                </li>

                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="process-two__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-2.png') }}" alt="">
                        </div>
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Data Protection & Compliance Assurance</h3>
                        <p class="process-two__text">We implement multi-layered backup security, ransomware protection, and
                            zero-trust compliance frameworks <br>to ensure your data is always safe and adheres to global
                            regulatory standards.</p>
                    </div>
                </li>


                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">Performance Scaling & Future Upgrades</h3>
                        <p class="process-two__text">As your business grows, we help scale infrastructure, optimize
                            resources, and integrate new technologies <br> so your cloud environment remains future-ready
                            and
                            cost-efficient.
                        </p>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <!-- Pricing Two Start -->
    <section class="pricing-two">
        <div class="pricing-two__sec-shape-1"></div>
        <div class="pricing-two__sec-shape-2"></div>
        <div class="pricing-two__sec-shape-3"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Pricing & Plan</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Select the Perfect
                    <span>Plan for Your</span><br><span>Needs That Fits You</span>
                </h2>
            </div>
            <div class="pricing-two__main-tab-box tabs-box">
                <ul class="tab-buttons list-unstyled">
                    <li data-tab="#monthly" class="tab-btn"><span>Monthly</span>
                    </li>
                    <li data-tab="#yearly" class="tab-btn active-btn"><span>Yearly</span></li>
                    <li data-tab="#packges" class="tab-btn"><span>Packges</span></li>
                </ul>
                <div class="tabs-content">
                    <div class="tab" id="monthly">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5.60</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$25.60</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Basic & Technical SEO </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$120.60</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                    <div class="tab active-tab" id="yearly">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5.60</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$25.60</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Basic & Technical SEO </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$120.60</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="packges">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">PERSONAL</span>
                                        <h2 class="pricing-two__price">$5.60</h2>
                                        <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Premium</span>
                                        <h2 class="pricing-two__price">$25.60</h2>
                                        <p class="pricing-two__text">Will get free 5 months solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Basic & Technical SEO </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                                <!--Pricing Two Single Start-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span class="pricing-two__sub-title">Business</span>
                                        <h2 class="pricing-two__price">$120.60</h2>
                                        <p class="pricing-two__text">Will get free lifetime solutions support
                                        </p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">Choose Plan<span
                                                    class="far fa-plus-circle"></span></a>
                                        </div>
                                        <h5 class="pricing-two__points-title">Feature Description</h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>Custom Website Design</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>website Design & Development</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Social Media Graphics</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>Brand Color Palette</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Pricing Two Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Two End -->

    <!-- Contact Two Start -->
    <section class="contact-two">
        <ul class="contact-two__sliding-text-list list-unstyled marquee_mode-2">
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
            </li>
        </ul>
        <div class="contact-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/contact-two-bg.jpg') }});">
        </div>
        <div class="contact-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/contact-two-shape-1.png') }}" alt="">
        </div>
        <div class="contact-two__shape-2"></div>
        <div class="container" id="touch">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Get In Touch</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Conversation
                                <span>– Reach</span><br><span>Out Anytime</span>
                            </h2>
                        </div>
                        <p class="contact-two__text">We're here to listen! Whether you have<br> questions, feedback,
                            or just want to say hello,<br> feel free to reach out. </p>
                        <ul class="contact-two__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <span>Email Us</span>
                                    <p><a href="mailto:info@domain.com">support@castilocloud.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <span>Contact US</span>
                                    <p><a href="tel:9900567780">+8801941483738</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <span>Our Address</span>
                                    <p>Apt. B2, House 60, Road 24, Gulshan 1, Dhaka 1212 , Bangladesh</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Full Name</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="Thomas Alison" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Email Address</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="thomas@domain.com"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Phone Number</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <input type="text" name="Phone" placeholder=" 12 (00) 123 4567 890"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Subject</h4>
                                    <div class="contact-one__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected>Thomas Alison
                                                </option>
                                                <option>Type Of Service 01</option>
                                                <option>Type Of Service 02</option>
                                                <option>Type Of Service 03</option>
                                                <option>Type Of Service 04</option>
                                                <option>Type Of Service 05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">Inquiry about </h4>
                                <div class="contact-one__input-box text-message-box">
                                    <div class="contact-one__input-icon">
                                        <span class="icon-edit"></span>
                                    </div>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn"><span>Submit
                                            Now</span><i class="icon-right-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Two End -->

    <!-- Event One Start -->
    <section class="event-one">
        <div class="event-one__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/event-one-shape-1.png') }}" alt="">
        </div>
        <div class="event-one__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/event-one-shape-2.png') }}" alt="">
        </div>
        <div class="event-one__shape-3"></div>
        <div class="event-one__shape-4"></div>
        <div class="event-one__shape-2"></div>
        <div class="container">
            <div class="event-one__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Upcoming Events</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Exciting Events <span>on the
                        </span> <span>Horizon</span></h2>
                </div>
                <div class="event-one__top-btn-box">
                    <a href="{{ route('contact') }}" class="thm-btn">Contact Us<span
                            class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="event-one__bottom">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="event-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/resources/event-one-img-1.jpg') }}" alt="">
                                <div class="event-one__video-link">
                                    <a href="" class="video-popup">
                                        <div class="event-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="event-one__right">
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="100ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Innovation Meets</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/05/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 18, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInRight" data-wow-delay="200ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Unlock Your Potential</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/07/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 25, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="300ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">Tech Talks Live</a></h5>
                                        <p>It is a long established fact that a reader will</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/09/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-pin"></span>1629 N. Dixie
                                                Avenue</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>March 30, 2025</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">Book Seat<span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event One End -->

    <!-- Testimonial Two Start -->
    <section class="testimonial-two">
        <div class="testimonial-two__shape-1"></div>
        <div class="testimonial-two__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Testimonials</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Customer Experiences <br> That <span>Speak
                        Volumes</span></h2>
            </div>
            <div class="testimonial-two__carousel owl-theme owl-carousel">
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">CASTILO CLOUD primarily adopted the Security Service Edge
                                (SSE), a Cybersecurity concept introduced by Gartner in 2021.
                                SSE comprises of the security components of the secure access service edge (SASE). SSE
                                encompasses a set of integrated,
                                cloud-centric security capabilities that include NIST’s Zero Trust Network Access (ZTNA),
                                Cloud Access Security Broker (CASB),
                                Firewall as-a-service (FWaaS), and Secure Web Gateway (SWG) that includes dual WAF (Web
                                Application Firewall) and secure
                                reverse-proxy. </p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Thomas
                                        Alison</a></h4>
                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                            </div>
                            <p class="testimonial-two__text"> CASTILO CLOUD has multiple
                                global data center partner
                                companies with at least Tier/
                                Rank-3 Certification. Our private
                                cloud hosting is available in
                                various countries including Singapore, Hong Kong, Australia, UK,
                                Germany, Finland, USA, Canada, and Bangladesh (Dhaka, Jessore,
                                Chittagong, and Thakurgaon) with easy interconnection. All our data
                                centers meet high standards of reliability, security, and scalability as per
                                their best data center selection certification</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Sarah
                                        Williams</a></h4>
                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">Switching to CASTILO Cloud was one of the best decisions for
                                our IT infrastructure. Their secure private cloud platform ensures high availability and
                                performance, and we no longer worry about downtime. The cost-effectiveness and scalability
                                are unmatched</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">James
                                        Anderson</a></h4>
                                <p class="testimonial-two__sub-title">Product Designer</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">CASTILO’s SPaaS solution transformed the way we manage our
                                applications and data. The hyper-converged infrastructure is reliable, secure, and fully
                                compliant with local regulations. Their support team is responsive and knowledgeable. Highly
                                recommended!</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Thomas
                                        Alison</a></h4>
                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                            </div>
                            <p class="testimonial-two__text">Switching to CASTILO Cloud was one of the best decisions for
                                our IT infrastructure. Their secure private cloud platform ensures high availability and
                                performance, and we no longer worry about downtime. The cost-effectiveness and scalability
                                are unmatched.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Sara Khan</a>
                                </h4>
                                <p class="testimonial-two__sub-title">IT Manager, Global Retail Corp</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">We needed a private cloud platform that could handle our
                                growing business needs without breaking the budget. CASTILO Cloud delivered exactly that — a
                                secure, scalable, and cost-efficient solution. Performance and visibility are excellent.</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Imran
                                        Hossain</a></h4>
                                <p class="testimonial-two__sub-title">CEO, FinTech Innovations</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">With CASTILO Cloud, we finally have a private cloud platform
                                that combines security, reliability, and efficiency. Our IT operations are smoother than
                                ever, and we’ve seen significant cost savings without compromising performance</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('about') }}">Nadia
                                        Rahman</a></h4>
                                <p class="testimonial-two__sub-title">Head of IT, Innovatech Solutions</p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
            </div>
        </div>
    </section>
    <!-- Testimonial Two End -->

    <!-- Blog Two End -->
    <x-footer />
@endsection
