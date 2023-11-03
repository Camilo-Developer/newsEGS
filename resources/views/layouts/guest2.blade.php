<!DOCTYPE html>
<html lang="en-US" data-bt-theme="Bold News 1.5.3">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title') | News EGS</title>
    <link rel="stylesheet" href="{{asset('css/style_8.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_9.css')}}">
    <script type='text/javascript' src="{{asset('js/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/bt_elements.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/header.misc.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
  </head>
<body class="page-template-default page page-id-2945 page-child parent-pageid-2065 theme-bold-news bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btNoSidebar" data-autoplay="0">
    <div class="btPageWrap" id="top">
        <header class="mainHeader btClear gutter ">
            <div class="port">
                <div class="topBar btClear">
                    <div class="topBarPort btClear">
                        <div class="topTools btTopToolsLeft btTextLeft">
                            <span id="time6514e5c370bfd" class="btIconWidget btDateWidget"><span
                                    class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoAccentColor"><span
                                            data-ico-fa="&#xf073;" class="btIcoHolder"></span></span></span><span
                                    class="btIconWidgetContent">
                                    <span class="btIconWidgetTitle">28. September 2023</span>
                                </span>
                            </span>
                        </div>
                        <div class="topTools btTopToolsRight btTextRight">
                            <a href="{{route('news.inicio')}}" target="_self" class="btIconWidget btAccentIconWidget btWidgetWithText text-decoration-none">
                                <span class="btIconWidgetIcon">
                                    <span class="btIco btIcoDefaultType btIcoDefaultColor">
                                        <span data-ico-fa="&#xf1ea;" class="btIcoHolder">
                                        </span>
                                    </span>
                                </span>
                                <span class="btIconWidgetContent">
                                    <span class="btIconWidgetText">
                                        Inicio
                                    </span>
                                </span>
                            </a>
                            <a href="{{route('login')}}" target="_self" class="btIconWidget btAccentIconWidget btWidgetWithText text-decoration-none">
                                <span class="btIconWidgetIcon">
                                    <span class="btIco btIcoDefaultType btIcoDefaultColor">
                                        <span data-ico-fa="&#xf004;" class="btIcoHolder">
                                        </span>
                                    </span>
                                </span>
                                <span class="btIconWidgetContent">
                                    <span class="btIconWidgetText">
                                        Iniciar Sesión
                                    </span>
                                </span>
                            </a>
                        </div><!-- /ttRight -->

                    </div><!-- /topBarPort -->
                </div><!-- /topBar -->

                {{--Logos del navbar--}}
                <div class="btLogoArea menuHolder btClear">
                    <span class="btVerticalMenuTrigger">
                        &nbsp;
                        <span class="btIco btIcoDefaultType">
                            <a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder">
                            </a>
                        </span>
                    </span>
                    <span class="btHorizontalMenuTrigger">
                        &nbsp;
                        <span class="btIco btIcoDefaultType">
                            <a href="#" target="_self" data-ico-fa="&#xf0c9;" class="btIcoHolder">
                            </a>
                        </span>
                    </span>
                    <div class="logo">
                        <span>
                            <a href="{{route('news.inicio')}}">
                                <img class="btMainLogo" data-hw="4.84" src="{{asset('recursos/user/img/logo.png')}}" alt="Logo News EGS">
                            </a>
                        </span>
                    </div>

                    {{--Logo 2 escondido--}}

                    {{--<div class="topBarInLogoArea">
                        <div class="topBarInLogoAreaCell">
                            <div class="btTopBox widget_bt_banner_widget no-border">
                                <div class="bt_banner no-border"><a
                                        href="https://themeforest.net/item/industrial-manufacturing-factory-wordpress-theme/18939815?ref=BoldThemes"
                                        target="_blank"><img
                                            src="/main-demo/wp-content/uploads/sites/2/2017/03/Industrial-970x90-banner.jpg" /></a>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                </div>
                {{--Titulos abajo del navbar--}}
                <div class="btBelowLogoArea btClear">
                    <div class="menuPort">
                        <div class="logoBelowInline">
                            <span>
                                <a href="https://bold-news.bold-themes.com/main-demo/"><img class="btMainLogo"
                                        data-hw="4.84"
                                        src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/02/bold-news-logo.png"
                                        alt="Bold News"></a>
                            </span>
                        </div><!-- /logo -->
                        <div class="topBarInMenu">
                            <div class="topBarInMenuCell">
                                <a href="https://www.facebook.com/boldthemes/" target="_self"
                                    class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span
                                            class="btIco btIcoDefaultType btIcoDefaultColor"><span
                                                data-ico-fa="&#xf09a;" class="btIcoHolder"></span></span></span></a><a
                                    href="https://twitter.com/bold_themes" target="_self"
                                    class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span
                                            class="btIco btIcoDefaultType btIcoDefaultColor"><span
                                                data-ico-fa="&#xf099;" class="btIcoHolder"></span></span></span></a><a
                                    href="https://plus.google.com/106260443376081681677" target="_self"
                                    class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span
                                            class="btIco btIcoDefaultType btIcoDefaultColor"><span
                                                data-ico-fa="&#xf0d5;" class="btIcoHolder"></span></span></span></a><a
                                    href="https://www.behance.net/info1afc201a" target="_self"
                                    class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span
                                            class="btIco btIcoDefaultType btIcoDefaultColor"><span
                                                data-ico-fa="&#xf1b4;" class="btIcoHolder"></span></span></span></a><a
                                    href="https://www.pinterest.com/boldthemes/" target="_self"
                                    class="btIconWidget btAccentIconWidget"><span class="btIconWidgetIcon"><span
                                            class="btIco btIcoDefaultType btIcoDefaultColor"><span
                                                data-ico-fa="&#xf231;" class="btIcoHolder"></span></span></span></a>
                                <div class="btTopBox widget_search">
                                    <div class="btSearch"><span class="btIco btIcoDefaultType btIcoDefaultColor"><a
                                                href="#" target="_self" data-ico-fa="&#xf002;"
                                                class="btIcoHolder"></a></span>
                                        <div class="btSearchInner gutter" role="search">
                                            <div class="btSearchInnerContent port">
                                                <form action="https://bold-news.bold-themes.com/main-demo/"
                                                    method="get"><input type="text" name="s"
                                                        placeholder="Looking for..." class="untouched">
                                                    <button type="submit" data-icon="&#xf105;"></button>
                                                </form>
                                                <div class="btSearchInnerClose"><span class="btIco "><a href="#"
                                                            target="_self" data-ico-fa="&#xf00d;"
                                                            class="btIcoHolder"></a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /topBarInMenu -->
                        </div><!-- /topBarInMenuCell -->

                        <nav>
                            <ul id="menu-primary-menu" class="menu">
                                <li id="menu-item-3950"
                                    class="btMenuWideDropdown bt_mega_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-3950">
                                    <span class="bt_mega_menu_title"><a class="text-decoration-none" href="{{route('news.inicio')}}">Inicio</a></span>

                                </li>


                            </ul>
                        </nav>
                    </div><!-- .menuPort -->
                </div>
            </div>
        </header>
        <div class="btContentWrap btClear">
            <div class="btContentHolder">
                <div class="btContent">
                    <div class="bt_bb_wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{--Seccion del Footer --}}
        <div class="bt_bb_wrapper">
            <section class="boldSection topSmallSpaced bottomSmallSpaced btDarkSkin gutter boxed inherit btFooterBelow" style="background-color:#0c0c0c  !important;">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldCellInner">
                            <div class="boldRow hidden-sm hidden-xs hidden-ms">
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextLeft inherit" data-width="6">
                                        <div class="rowItemContent">
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                            <div class="btText">
                                                <p><strong>© Copyright News EGS 2023. Todos los derechos reservados.</strong>
                                                </p>
                                            </div>
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextRight inherit" data-width="6">
                                        <div class="rowItemContent">
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                            <div class="btCustomMenu ">
                                                <div class="menu-footer-menu-container">
                                                    <ul id="menu-footer-menu" class="menu">
                                                        <li id="menu-item-3901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3901">
                                                            <a class="text-decoration-none" href="{{route('news.inicio')}}">
                                                                Inicio
                                                            </a>
                                                        </li>
                                                        <li id="menu-item-3827" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3827">
                                                            <a class="text-decoration-none" href="#">
                                                                Productos
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--Parte final del footer responsive--}}
                            <div class="boldRow hidden-md hidden-lg">
                                <div class="boldRowInner">
                                    <div class="rowItem col-md-6 col-sm-12 btTextCenter inherit" data-width="6">
                                        <div class="rowItemContent">
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                            <div class="btText">
                                                <p><strong>© Copyright News EGS 2023. Todos los derechos reservados.</strong>
                                                </p>
                                            </div>
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rowItem col-md-6 col-sm-12 btTextCenter inherit" data-width="6">
                                        <div class="rowItemContent">
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                            <div class="btCustomMenu ">
                                                <div class="menu-footer-menu-container">
                                                    <ul id="menu-footer-menu-1" class="menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3901">
                                                            <a class="text-decoration-none" href="{{route('news.inicio')}}">
                                                                Inicio
                                                            </a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3827">
                                                            <a class="text-decoration-none" href="#">
                                                                Productos
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type='text/javascript' src="{{asset('js/slick.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/misc.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/sliders.js')}}"></script>
    @yield('js')
</body>
</html>
