@extends('layouts.guest')
@section('title','Inicio')
@section('content')
<section id="bt_section6514e5c40ac8e" data-parallax="0.8" data-parallax-offset="-200" class="boldSection topMediumSpaced gutter boxed inherit btParallax wBackground cover btBackgroundOverlay btSolidLightBackground" style="background-color:#ececec  !important;background-image:url('https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/bg_entertainment_01.jpg');">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                {{-- Titulos del carrucel--}}
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein btTopVertical"
                            data-width="12">
                            <div class="rowItemContent">
                                <div class="btCategoryTitle btIcoBigSizeIcon ">
                                    <div class="sIcon cat-item-7 "><span
                                            class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span
                                                data-ico-es="&#xea66;"
                                                class="btIcoHolder"></span></span></div>
                                    <div class="btCategoryTitleTxt">
                                        <h2>Algunas Categorías</h2>
                                    </div>
                                    <div class="btCatFilter">
                                        @foreach($categories as $category)
                                            <span class="btCatFilterItem" data-slug="{{substr($category->name, 0, 5)}}">
                                                <b>
                                                    <a href="#">
                                                        {{$category->name}}
                                                    </a>
                                                </b>
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div
                                    class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Carrucel de Noticias--}}
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein inherit"
                            data-width="12">
                            <div class="rowItemContent">
                                <div class=" btCarouselSmallNav boldClientList btDefaultPadding btOnTopArrow">
                                    <div class="bclPort" data-slides="3" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true,"autoplay":true,"autoplaySpeed":3000}' data-rtl="no">
                                        @foreach($news as $newd)
                                            <div class="bclItem ">
                                                <div class="bclItemChild">
                                                    <div class="bclItemChildContent">
                                                        <div class="btSinglePostTemplate  largeTemplate video backgroundImagePosition image_size__medium_large__">
                                                            <div class="btMediaBoxPopup">
                                                                <div class="btMediaBoxPopupClose">
                                                                </div>
                                                                <div class="btMediaBox video" data-hw="0.5625">
                                                                    <img class="aspectVideo" src="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" alt="title_news" role="presentation" aria-hidden="true">
                                                                    <iframe width="560" height="315" data-src="https://www.youtube.com/embed/HQx5Be9g16U" allowfullscreen>
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                            <div class="btPostImageHolder">
                                                                <div class="btSinglePostBackgroundImage" style="background-image:url({{asset('storage/'. $newd->imagen)}}); ">
                                                                    <a href="#"></a>
                                                                </div>
                                                                <div class="btSinglePostTopMetaData">
                                                                    <div class="btSinglePostFormat">
                                                                        <span class="btVideoPopupText">Ver video</span>
                                                                    </div>
                                                                    <span class="btArticleCategories">
                                                                        <a href="#" class="btArticleCategory cat-item-7">
                                                                            {{$newd->category->name}}
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="btSinglePostContent">
                                                                <div class="btSinglePostTopData">
                                                                </div>
                                                                <h4>
                                                                    <a href="#">
                                                                        {{$newd->title}}
                                                                    </a>
                                                                </h4>
                                                                <div class="btSinglePostExcerpt">
                                                                    {!! $newd->pre_description !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btClear btSeparator topSmallSpaced noBorder">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

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
@endsection
