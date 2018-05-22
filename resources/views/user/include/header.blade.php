
<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="http://tonatheme.com/newwp/factory/"><img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/10/facto-black.png" alt="Arctica"
                                                                       title="Arctica"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder"><span class="fa fa-home"></span></div>
                            <div class="text-holder">
                                <h6>321, Breaking Street</h6>
                                <p>Newyork, USA 10002</p></div>
                        </li>
                        <li>
                            <div class="iocn-holder"><span class="icon-technology-1"></span></div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>1-8000-978-6543</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder"><span class="icon-letter-1"></span></div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <p><a href="mailto:Supportuss@gmail.com">Supportuss@gmail.com</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li id="menu-item-17"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-17 dropdown">
                                    <a title="{{trans('app.Home')}}" href="/" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                       data-options="easing: easeOutQuart">{{trans('app.Home')}}</a>
                                </li>
                                <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a
                                        title="{{trans('app.About_us')}}" href="/about-us" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                        data-options="easing: easeOutQuart">{{trans('app.About_us')}}</a>
                                </li>
                                <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown"><a
                                        title="{{trans('app.Services')}}" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                        data-options="easing: easeOutQuart">{{trans('app.Services')}}</a>
                                    <ul role="menu" class="submenu">
                                        @foreach (Session::get('service') as $ser)

                                            <li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236">
                                                <a title="Blog Default" href="/services/{{$ser->id}}">
                                                    {{
                                                        $ser->{"name_".App::getlocale()}
                                                    }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li id="menu-item-200" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200 dropdown"><a
                                        title="Projects" href="/projects" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                        data-options="easing: easeOutQuart">Projects</a>
                                </li>
                                <li id="menu-item-235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-235 dropdown"><a
                                        title="Latest News" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                        data-options="easing: easeOutQuart">Latest News</a>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236"><a title="Blog Default"
                                                                                                                                                href="http://tonatheme.com/newwp/factory/2017/">Blog
                                            Default</a></li>
                                        <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-237"><a title="Blog Single Post"
                                                                                                                                                href="http://tonatheme.com/newwp/factory/take-a-step-that-is-ne-weve-a-loveable-space-that-needs/">Blog
                                            Single Post</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a title="Contact Us"
                                                                                                                                         href="/contact-us"
                                                                                                                                         class="hvr-underline-from-left1"
                                                                                                                                         data-scroll
                                                                                                                                         data-options="easing: easeOutQuart">Contact
                                    Us</a></li>
                            </ul>
                            <ul class="mobile-menu clearfix">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-17 dropdown">
                                    <a title="Home" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                       data-options="easing: easeOutQuart">Home</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-93 active">
                                            <a title="Header Style One" href="http://tonatheme.com/newwp/factory/">Header Style One</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-377"><a title="Header Style Two"
                                                                                                                             href="http://tonatheme.com/newwp/factory/header-style-two/?header_style=header_v2">Header
                                            Style Two</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a title="About Us"
                                                                                                                                                    href="#"
                                                                                                                                                    data-toggle="dropdown1"
                                                                                                                                                    class="hvr-underline-from-left1"
                                                                                                                                                    aria-expanded="false"
                                                                                                                                                    data-scroll
                                                                                                                                                    data-options="easing: easeOutQuart">About
                                    Us</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a title="About Us"
                                                                                                                             href="http://tonatheme.com/newwp/factory/about-us/">About
                                            Us</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a title="Our Team"
                                                                                                                             href="http://tonatheme.com/newwp/factory/our-team/">Our
                                            Team</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a title="FAQs"
                                                                                                                              href="http://tonatheme.com/newwp/factory/faqs/">FAQs</a>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-190"><a title="404 Page"
                                                                                                                             href="http://tonatheme.com/newwp/factory/abc123">404
                                            Page</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a title="Testimonials"
                                                                                                                              href="http://tonatheme.com/newwp/factory/testimonials/">Testimonials</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown"><a title="Services"
                                                                                                                                                     href="#"
                                                                                                                                                     data-toggle="dropdown1"
                                                                                                                                                     class="hvr-underline-from-left1"
                                                                                                                                                     aria-expanded="false"
                                                                                                                                                     data-scroll
                                                                                                                                                     data-options="easing: easeOutQuart">Services</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a title="Services"
                                                                                                                              href="http://tonatheme.com/newwp/factory/services/">Services</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a title="Single Service"
                                                                                                                              href="http://tonatheme.com/newwp/factory/single-service/">Single
                                            Service</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200 dropdown"><a title="Projects"
                                                                                                                                                     href="#"
                                                                                                                                                     data-toggle="dropdown1"
                                                                                                                                                     class="hvr-underline-from-left1"
                                                                                                                                                     aria-expanded="false"
                                                                                                                                                     data-scroll
                                                                                                                                                     data-options="easing: easeOutQuart">Projects</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a title="Projects"
                                                                                                                              href="http://tonatheme.com/newwp/factory/projects/">Projects</a>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-211"><a title="Single Project"
                                                                                                                             href="http://tonatheme.com/newwp/factory/projects/material-engineering/">Single
                                            Project</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-235 dropdown"><a title="Latest News"
                                                                                                                                                     href="#"
                                                                                                                                                     data-toggle="dropdown1"
                                                                                                                                                     class="hvr-underline-from-left1"
                                                                                                                                                     aria-expanded="false"
                                                                                                                                                     data-scroll
                                                                                                                                                     data-options="easing: easeOutQuart">Latest
                                    News</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236"><a title="Blog Default"
                                                                                                                             href="http://tonatheme.com/newwp/factory/2017/">Blog
                                            Default</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-237"><a title="Blog Single Post"
                                                                                                                             href="http://tonatheme.com/newwp/factory/take-a-step-that-is-ne-weve-a-loveable-space-that-needs/">Blog
                                            Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-238 dropdown"><a title="Shop" href="#"
                                                                                                                                                     data-toggle="dropdown1"
                                                                                                                                                     class="hvr-underline-from-left1"
                                                                                                                                                     aria-expanded="false"
                                                                                                                                                     data-scroll
                                                                                                                                                     data-options="easing: easeOutQuart">Shop</a>
                                    <ul role="menu" class="submenu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a title="Shop Products"
                                                                                                                              href="http://tonatheme.com/newwp/factory/shop/">Shop
                                            Products</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288"><a title="Single Product"
                                                                                                                             href="http://tonatheme.com/newwp/factory/product/flying-ninja/">Single
                                            Product</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a title="Cart"
                                                                                                                              href="http://tonatheme.com/newwp/factory/cart/">Cart</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a title="Checkout"
                                                                                                                              href="http://tonatheme.com/newwp/factory/checkout/">Checkout</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a title="My Account"
                                                                                                                              href="http://tonatheme.com/newwp/factory/my-account/">My
                                            Account</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a title="Contact Us"
                                                                                                                      href="http://tonatheme.com/newwp/factory/contact-us/"
                                                                                                                      class="hvr-underline-from-left1" data-scroll
                                                                                                                      data-options="easing: easeOutQuart">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="link_btn float_right">
                        <select id="languageSwitcher">
                            <option value="en" {{App::getlocale() == 'en' ? 'selected' : ''}}>Eng</option>
                            <option value="am" {{App::getlocale() == 'am' ? 'selected' : ''}}>Arm</option>
                            <option value="ru" {{App::getlocale() == 'ru' ? 'selected' : ''}}>Ru</option>
                        </select>
                        <input type="hidden" id ='input_token' name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->


{{--<header class="header-area style-2 stricky">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
                {{--<div class="logo">--}}
                    {{--<a href="http://tonatheme.com/newwp/factory/"><img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/10/facto-black.png" alt="Arctica" title="Arctica"></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">--}}
                {{--<div class="mainmenu-area">--}}
                    {{--<div class="mainmenu-bg">--}}
                        {{--<!--main menu -->--}}
                        {{--<nav class="main-menu style-2">--}}
                            {{--<div class="navbar-header">--}}
                                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                            {{--<div class="navbar-collapse collapse clearfix">--}}
                                {{--<ul class="navigation clearfix">--}}
                                    {{--<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-17 dropdown"><a title="Home" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Home</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 114px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-93"><a title="Header Style One" href="http://tonatheme.com/newwp/factory/">Header Style One</a></li>--}}
                                            {{--<li id="menu-item-377" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-377 active"><a title="Header Style Two" href="http://tonatheme.com/newwp/factory/header-style-two/?header_style=header_v2">Header Style Two</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a title="About Us" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">About Us</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 246px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a title="About Us" href="http://tonatheme.com/newwp/factory/about-us/">About Us</a></li>--}}
                                            {{--<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a title="Our Team" href="http://tonatheme.com/newwp/factory/our-team/">Our Team</a></li>--}}
                                            {{--<li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a title="FAQs" href="http://tonatheme.com/newwp/factory/faqs/">FAQs</a></li>--}}
                                            {{--<li id="menu-item-190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-190"><a title="404 Page" href="http://tonatheme.com/newwp/factory/abc123">404 Page</a></li>--}}
                                            {{--<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a title="Testimonials" href="http://tonatheme.com/newwp/factory/testimonials/">Testimonials</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown"><a title="Services" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Services</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 114px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a title="Services" href="http://tonatheme.com/newwp/factory/services/">Services</a></li>--}}
                                            {{--<li id="menu-item-201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a title="Single Service" href="http://tonatheme.com/newwp/factory/single-service/">Single Service</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-200" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200 dropdown"><a title="Projects" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Projects</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 114px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a title="Projects" href="http://tonatheme.com/newwp/factory/projects/">Projects</a></li>--}}
                                            {{--<li id="menu-item-211" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-211"><a title="Single Project" href="http://tonatheme.com/newwp/factory/projects/material-engineering/">Single Project</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-235 dropdown"><a title="Latest News" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Latest News</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 114px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236"><a title="Blog Default" href="http://tonatheme.com/newwp/factory/2017/">Blog Default</a></li>--}}
                                            {{--<li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-237"><a title="Blog Single Post" href="http://tonatheme.com/newwp/factory/take-a-step-that-is-ne-weve-a-loveable-space-that-needs/">Blog Single Post</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-238 dropdown"><a title="Shop" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Shop</a>--}}
                                        {{--<ul role="menu" class="submenu" style="display: none; height: 246px; padding-top: 12px; margin-top: 0px; padding-bottom: 12px; margin-bottom: 0px;">--}}
                                            {{--<li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a title="Shop Products" href="http://tonatheme.com/newwp/factory/shop/">Shop Products</a></li>--}}
                                            {{--<li id="menu-item-288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288"><a title="Single Product" href="http://tonatheme.com/newwp/factory/product/flying-ninja/">Single Product</a></li>--}}
                                            {{--<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a title="Cart" href="http://tonatheme.com/newwp/factory/cart/">Cart</a></li>--}}
                                            {{--<li id="menu-item-285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a title="Checkout" href="http://tonatheme.com/newwp/factory/checkout/">Checkout</a></li>--}}
                                            {{--<li id="menu-item-284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a title="My Account" href="http://tonatheme.com/newwp/factory/my-account/">My Account</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a title="Contact Us" href="http://tonatheme.com/newwp/factory/contact-us/" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Contact Us</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mobile-menu clearfix">--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-17 dropdown"><a title="Home" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Home</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-93"><a title="Header Style One" href="http://tonatheme.com/newwp/factory/">Header Style One</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-377 active"><a title="Header Style Two" href="http://tonatheme.com/newwp/factory/header-style-two/?header_style=header_v2">Header Style Two</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a title="About Us" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">About Us</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a title="About Us" href="http://tonatheme.com/newwp/factory/about-us/">About Us</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a title="Our Team" href="http://tonatheme.com/newwp/factory/our-team/">Our Team</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a title="FAQs" href="http://tonatheme.com/newwp/factory/faqs/">FAQs</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-190"><a title="404 Page" href="http://tonatheme.com/newwp/factory/abc123">404 Page</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a title="Testimonials" href="http://tonatheme.com/newwp/factory/testimonials/">Testimonials</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown"><a title="Services" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Services</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a title="Services" href="http://tonatheme.com/newwp/factory/services/">Services</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a title="Single Service" href="http://tonatheme.com/newwp/factory/single-service/">Single Service</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200 dropdown"><a title="Projects" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Projects</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a title="Projects" href="http://tonatheme.com/newwp/factory/projects/">Projects</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-211"><a title="Single Project" href="http://tonatheme.com/newwp/factory/projects/material-engineering/">Single Project</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-235 dropdown"><a title="Latest News" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Latest News</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236"><a title="Blog Default" href="http://tonatheme.com/newwp/factory/2017/">Blog Default</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-237"><a title="Blog Single Post" href="http://tonatheme.com/newwp/factory/take-a-step-that-is-ne-weve-a-loveable-space-that-needs/">Blog Single Post</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-238 dropdown"><a title="Shop" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Shop</a>--}}
                                        {{--<ul role="menu" class="submenu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a title="Shop Products" href="http://tonatheme.com/newwp/factory/shop/">Shop Products</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288"><a title="Single Product" href="http://tonatheme.com/newwp/factory/product/flying-ninja/">Single Product</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a title="Cart" href="http://tonatheme.com/newwp/factory/cart/">Cart</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a title="Checkout" href="http://tonatheme.com/newwp/factory/checkout/">Checkout</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a title="My Account" href="http://tonatheme.com/newwp/factory/my-account/">My Account</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<div class="dropdown-btn"></div></li>--}}
                                    {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a title="Contact Us" href="http://tonatheme.com/newwp/factory/contact-us/" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Contact Us</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                        {{--<!--End mainmenu-->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}