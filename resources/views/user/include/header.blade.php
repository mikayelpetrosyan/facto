
<header class="header-area style-2 stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="/"><img src="{{asset('images/greenlad.png')}}" alt="Arctica"
                                                                       title="Arctica"></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="mainmenu-area">
                    <div class="mainmenu-bg">
                        <!--main menu -->
                        <nav class="main-menu style-2">
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
                                        <a title="{{trans('app.Home')}}" href="/" data-toggle="dropdown1"
                                           class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                           data-options="easing: easeOutQuart">{{trans('app.Home')}}</a>
                                    </li>
                                    <li id="menu-item-95"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown">
                                        <a
                                                title="{{trans('app.About_us')}}" href="/about-us" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.About_us')}}</a>
                                    </li>
                                    <li id="menu-item-191"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown">
                                        <a
                                                title="{{trans('app.Services')}}" href="#" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.Services')}}</a>
                                        <ul role="menu" class="submenu">
                                            @foreach (Session::get('service') as $ser)

                                            <li id="menu-item-236"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236">
                                                <a href="/services/{{$ser->id}}">
                                                    {{
                                                    $ser->{"name_".App::getlocale()}
                                                    }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li id="menu-item-200"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-200 dropdown">
                                        <a
                                                title="{{trans('app.Projects')}}" href="/projects" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.Projects')}}</a>
                                    </li>
                                    <li id="menu-item-235"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-235 dropdown">
                                        <a
                                                title="{{trans('app.Shops')}}" href="/shops" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">
                                            {{trans('app.Shops')}}
                                        </a>
                                    </li>
                                    <li id="menu-item-251"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a
                                            title="{{trans('app.Contact_us')}}"
                                            href="/contact-us"
                                            class="hvr-underline-from-left1"
                                            data-scroll
                                            data-options="easing: easeOutQuart">{{trans('app.Contact_us')}}</a></li>
                                </ul>
                                <ul class="mobile-menu clearfix">
                                    <li id="menu-item-258"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                                        <a title="{{trans('app.Home')}}" href="/" data-toggle="dropdown1"
                                           class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                           data-options="easing: easeOutQuart">{{trans('app.Home')}}</a>
                                    </li>
                                    <li id="menu-item-600"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                                        <a
                                                title="{{trans('app.About_us')}}" href="/about-us" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.About_us')}}</a>
                                    </li>
                                    <li id="menu-item-191"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191 dropdown">
                                        <a
                                                title="{{trans('app.Services')}}" href="#" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.Services')}}</a>
                                        <ul role="menu" class="submenu">
                                            @foreach (Session::get('service') as $ser)
                                            <li id="menu-item-236"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236">
                                                <a href="/services/{{$ser->id}}">
                                                    {{
                                                    $ser->{"name_".App::getlocale()}
                                                    }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li id="menu-item-601"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                                        <a
                                                title="{{trans('app.Projects')}}" href="/projects" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">{{trans('app.Projects')}}</a>
                                    </li>
                                    <li id="menu-item-603"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                                        <a
                                                title="{{trans('app.Shops')}}" href="/shops" data-toggle="dropdown1"
                                                class="hvr-underline-from-left1" aria-expanded="false" data-scroll
                                                data-options="easing: easeOutQuart">
                                            {{trans('app.Shops')}}
                                        </a>
                                    </li>
                                    <li id="menu-item-256"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256"><a
                                            title="{{trans('app.Contact_us')}}"
                                            href="/contact-us"
                                            class="hvr-underline-from-left1"
                                            data-scroll
                                            data-options="easing: easeOutQuart">{{trans('app.Contact_us')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="right-column">
                    <div class="right-area">
                        <div class="link_btn float_right">
                            <select id="languageSwitcher">
                                <option value="en" {{App::getlocale() == 'en' ? 'selected' : ''}}>Eng</option>
                                <option value="am" {{App::getlocale() == 'am' ? 'selected' : ''}}>Arm</option>
                                <option value="ru" {{App::getlocale() == 'ru' ? 'selected' : ''}}>Ru</option>
                            </select>
                            <input type="hidden" id='input_token' name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</header>
<div class="header-area"></div>

