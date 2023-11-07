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
                                                data-ico-fa="&#xf03d;"
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
                                                                    @if($newd->type_file == 1)
                                                                        <img style="width: 100%; height: 200px;" class="card-img-top" src="{{asset('storage/'.$newd->sub_imagen)}}" alt="Dist Photo 1">

                                                                    @elseif($newd->type_file == 2)
                                                                        <video  src="{{asset('storage/'.$newd->sub_imagen)}}" width="200" height="300" controls></video>
                                                                    @elseif($newd->type_file == 3)
                                                                        <audio src="{{asset('storage/'.$newd->sub_imagen)}}" controls></audio>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="btPostImageHolder">
                                                                <div class="btSinglePostBackgroundImage" style="background-image:url({{asset('storage/'. $newd->imagen)}}); ">
                                                                    <a href="{{route('news.show',$newd->id)}}"></a>
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
                                                                    <a href="{{route('news.show',$newd->id)}}">
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





<section id="bt_section6514e5c410468" class="boldSection topMediumSpaced bottomMediumSpaced gutter boxed inherit" style="background-color:#f1f1f1  !important;">
    <div class="port">
        <div class="boldCell">
            <div class="boldCellInner">
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-4 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="4">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate audio btHideBottomData no-imageImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">


                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/audio/" class="btArticleCategory cat-item-33">Audio</a><a href="https://bold-news.bold-themes.com/main-demo/category/tech/gaming/" class="btArticleCategory cat-item-44">Gaming</a><a href="https://bold-news.bold-themes.com/main-demo/category/news-trending/" class="btArticleCategory cat-item-16">News
                                                    &amp; Trending</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/the-soundtrack-to-a-gaming-revolution/">
                                                The soundtrack to a gaming revolution
                                            </a>
                                        </h4>
                                        <div class="btSinglePostExcerpt">
                                            Going forward, a new normal that has evolved from
                                            generation X is on the runway heading towards a
                                            streamlined cloud solution networks.
                                        </div>

                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">2<span>min</span></span>
                                            <span class="btArticleViewsCount">4384</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-4 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="4">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate image btHideBottomData no-imageImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">


                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/audio/" class="btArticleCategory cat-item-33">Audio</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/inspiring-every-moment/">
                                                Inspiring every moment
                                            </a>
                                        </h4>
                                        <div class="btSinglePostExcerpt">
                                            Quickly aggregate B2B users and worldwide
                                            potentialities. Progressively plagiarize
                                            resource-leveling e-commerce through core
                                            competencies.
                                        </div>

                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">1</span>
                                            <span class="btArticleReadingTime">1<span>min</span></span>
                                            <span class="btArticleViewsCount">1960</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-4 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="4">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate video btHideBottomData backgroundImagePosition image_size__medium_large__">
                                    <div class="btMediaBoxPopup">
                                        <div class="btMediaBoxPopupClose"></div>
                                        <div class="btMediaBox video" data-hw="0.5625"><img class="aspectVideo" src="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" alt="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" role="presentation" aria-hidden="true"><iframe width="560" height="315" data-src="https://www.youtube.com/embed/7kctEPDi3IE" allowfullscreen="" style="width: 100%; height: 0px;"></iframe></div>
                                    </div>
                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/us-police-cars-1024x576.jpg); ">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/new-police-vehicles-in-the-united-states/"></a>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"><span class="btVideoPopupText">Play video</span>
                                            </div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/news-trending/" class="btArticleCategory cat-item-16">News
                                                    &amp; Trending</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/video/" class="btArticleCategory cat-item-29">Video</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/new-police-vehicles-in-the-united-states/">
                                                New police vehicles in the United States
                                            </a>
                                        </h4>
                                        <div class="btSinglePostExcerpt">
                                            Collaboratively administrate turnkey channels
                                            whereas virtual e-tailers objectively seize scalable
                                            metrics whereas proactive e-services.
                                        </div>

                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">2</span>
                                            <span class="btArticleReadingTime">2<span>min</span></span>
                                            <span class="btArticleViewsCount">6245</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate gallery btHideBottomData btHideTopData topImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">

                                        <div class="btSinglePostImage">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/miamis-museum-of-science-opens-in-may/"><img src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/Arhitecture9-1024x683.jpg" title="Miami’s museum of science opens in may"></a>
                                        </div>
                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/gallery/" class="btArticleCategory cat-item-10">Gallery</a><a href="https://bold-news.bold-themes.com/main-demo/category/news-trending/" class="btArticleCategory cat-item-16">News
                                                    &amp; Trending</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 7, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/shane/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/41fffffe42402d2c978b2b9203558017?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/41fffffe42402d2c978b2b9203558017?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Shane Murphy</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/miamis-museum-of-science-opens-in-may/">
                                                Miami’s museum of science opens in may
                                            </a>
                                        </h4>


                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">4</span>
                                            <span class="btArticleReadingTime">1<span>min</span></span>
                                            <span class="btArticleViewsCount">4920</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate video btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                    <div class="btMediaBoxPopup">
                                        <div class="btMediaBoxPopupClose"></div>
                                        <div class="btMediaBox video" data-hw="0.5625"><img class="aspectVideo" src="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" alt="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" role="presentation" aria-hidden="true"><iframe width="560" height="315" data-src="https://www.youtube.com/embed/_H_6jyxH4-Y" allowfullscreen="" style="width: 100%; height: 0px;"></iframe></div>
                                    </div>
                                    <div class="btPostImageHolder">

                                        <div class="btSinglePostImage">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/documentary-movie-about-basketball-players/"><img src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/sport09-1024x683.jpg" title="Documentary movie about basketball players"></a>
                                        </div>
                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"><span class="btVideoPopupText">Play video</span>
                                            </div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/sport/basketball/" class="btArticleCategory cat-item-35">Basketball</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/video/" class="btArticleCategory cat-item-29">Video</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 7, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/shane/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/41fffffe42402d2c978b2b9203558017?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/41fffffe42402d2c978b2b9203558017?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Shane Murphy</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/07/documentary-movie-about-basketball-players/">
                                                Documentary movie about basketball players
                                            </a>
                                        </h4>


                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">2<span>min</span></span>
                                            <span class="btArticleViewsCount">3550</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate gallery btHideBottomData btHideTopData topImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">

                                        <div class="btSinglePostImage">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/06/beautiful-nature-photography-examples/"><img src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/Nature-5-1024x683.jpg" title="Beautiful Nature Photography examples"></a>
                                        </div>
                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/image/" class="btArticleCategory cat-item-12">Image</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 6, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/joanna/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/46df469fe889ce5b252c36e57f982f57?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Joanna Taylor</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/06/beautiful-nature-photography-examples/">
                                                Beautiful Nature Photography examples
                                            </a>
                                        </h4>


                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">2<span>min</span></span>
                                            <span class="btArticleViewsCount">2230</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  defaultTemplate video btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                    <div class="btMediaBoxPopup">
                                        <div class="btMediaBoxPopupClose"></div>
                                        <div class="btMediaBox video" data-hw="0.5625"><img class="aspectVideo" src="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" alt="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" role="presentation" aria-hidden="true"><iframe width="560" height="315" data-src="https://www.youtube.com/embed/DiwA-ImHuV0" allowfullscreen="" style="width: 100%; height: 0px;"></iframe></div>
                                    </div>
                                    <div class="btPostImageHolder">

                                        <div class="btSinglePostImage">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/03/2nd-studio-album/"><img src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/Entertainment-audio1-1024x683.jpg" title="2nd Studio Album"></a>
                                        </div>
                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"><span class="btVideoPopupText">Play video</span>
                                            </div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/video/" class="btArticleCategory cat-item-29">Video</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 3, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/stoffel/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/18bf5f60fe665d4856660da61ad37907?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/18bf5f60fe665d4856660da61ad37907?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Stoffel Jansen</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/03/2nd-studio-album/">
                                                2nd Studio Album
                                            </a>
                                        </h4>


                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">2<span>min</span></span>
                                            <span class="btArticleViewsCount">2180</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-8 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="8">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  largeTemplate image btHideBottomData btHideTopData leftImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostLeftImage">
                                            <div class="btSinglePostLeftContainer" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/Entertainment-audio4-1024x683.jpg); ">
                                                <a href="https://bold-news.bold-themes.com/main-demo/2017/03/02/young-singer-blows-judges/"></a>
                                            </div>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/audio/" class="btArticleCategory cat-item-33">Audio</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 2, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/kenny/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/23061a0acbbe00e28d183ca931902575?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/23061a0acbbe00e28d183ca931902575?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Kenny Perry</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/02/young-singer-blows-judges/">
                                                Young singer blows judges away
                                            </a>
                                        </h4>
                                        <div class="btSinglePostExcerpt">
                                            Synergistically evolve 2.0 technologies rather than
                                            just in time initiatives
                                        </div>

                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">1<span>min</span></span>
                                            <span class="btArticleViewsCount">1649</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-4 col-ms-12 btTextLeft animate animate-fadein inherit animated" data-width="4">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  largeTemplate btSingleHighlight gallery btHideBottomData btHideTopData no-imageImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">


                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/gallery/" class="btArticleCategory cat-item-10">Gallery</a><a href="https://bold-news.bold-themes.com/main-demo/category/news-trending/" class="btArticleCategory cat-item-16">News
                                                    &amp; Trending</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">
                                            <span class="btArticleDate">March 2, 2017</span>
                                            <a href="https://bold-news.bold-themes.com/main-demo/author/stoffel/" class="btArticleAuthor"> <img alt="" src="https://secure.gravatar.com/avatar/18bf5f60fe665d4856660da61ad37907?s=144&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/18bf5f60fe665d4856660da61ad37907?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" loading="lazy" decoding="async">Stoffel Jansen</a>
                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/03/02/fridaybeer-gallery-presents-student-works/">
                                                FridayBeer gallery presents student works
                                            </a>
                                        </h4>
                                        <div class="btSinglePostExcerpt">
                                            Credibly pontificate highly efficient manufactured
                                            products and enabled data. Dynamically target
                                            intellectual capital.
                                        </div>

                                        <div class="btSinglePostBottomData">
                                            <span class="btArticleComments">0</span>
                                            <span class="btArticleReadingTime">1<span>min</span></span>
                                            <span class="btArticleViewsCount">2149</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                            <div class="rowItemContent">
                                <div class="bt_banner no-border"><a href="https://themeforest.net/item/food-haus-restaurant-wordpress-theme/19441479?ref=BoldThemes" target="_blank"><img src="/main-demo/wp-content/uploads/sites/2/2017/03/Food-haus-970x90-banner.jpg"></a>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow ">
                    <div class="boldRowInner">
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  smallTemplate audio backgroundImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/Entertainment-audio2-1024x683.jpg); ">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/02/26/listen-to-sounds-of-africa/"></a>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/audio/" class="btArticleCategory cat-item-33">Audio</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/" class="btArticleCategory cat-item-7">Entertainment</a><a href="https://bold-news.bold-themes.com/main-demo/category/popular/" class="btArticleCategory cat-item-19">Popular</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/02/26/listen-to-sounds-of-africa/">
                                                Listen to sounds of Africa
                                            </a>
                                        </h4>



                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  smallTemplate video backgroundImagePosition image_size__medium_large__">
                                    <div class="btMediaBoxPopup">
                                        <div class="btMediaBoxPopupClose"></div>
                                        <div class="btMediaBox video" data-hw="0.5625"><img class="aspectVideo" src="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" alt="https://bold-news.bold-themes.com/main-demo/wp-content/themes/bold-news/gfx/video-16.9.png" role="presentation" aria-hidden="true"><iframe width="560" height="315" data-src="https://www.youtube.com/embed/9Rey98fAdmE" allowfullscreen="" style="width: 100%; height: 0px;"></iframe></div>
                                    </div>
                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2015/05/post_07-1024x683.jpg); ">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/29/vienna-philharmonic-orchestra/"></a>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"><span class="btVideoPopupText">Play video</span>
                                            </div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/audio/" class="btArticleCategory cat-item-33">Audio</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/video/" class="btArticleCategory cat-item-29">Video</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/29/vienna-philharmonic-orchestra/">
                                                Vienna philharmonic orchestra
                                            </a>
                                        </h4>



                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  smallTemplate gallery backgroundImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2015/07/post_11-1024x683.jpg); ">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/27/how-do-kids-usually-have-fun/"></a>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/lifestyle/family/" class="btArticleCategory cat-item-43">Family</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/gallery/" class="btArticleCategory cat-item-10">Gallery</a><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/image/" class="btArticleCategory cat-item-12">Image</a><a href="https://bold-news.bold-themes.com/main-demo/category/lifestyle/kids/" class="btArticleCategory cat-item-47">Kids</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/27/how-do-kids-usually-have-fun/">
                                                How do kids usually have fun
                                            </a>
                                        </h4>



                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit" data-width="3">
                            <div class="rowItemContent">
                                <div class="btSinglePostTemplate  smallTemplate  backgroundImagePosition image_size__medium_large__">

                                    <div class="btPostImageHolder">
                                        <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2015/06/post_09-1024x683.jpg); ">
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/22/traffic-standard-day-in-new-york/"></a>
                                        </div>

                                        <div class="btSinglePostTopMetaData">
                                            <div class="btSinglePostFormat"></div>
                                            <span class="btArticleCategories"><a href="https://bold-news.bold-themes.com/main-demo/category/entertainment/gallery/" class="btArticleCategory cat-item-10">Gallery</a><a href="https://bold-news.bold-themes.com/main-demo/category/business/usa/" class="btArticleCategory cat-item-27">USA</a></span>
                                        </div>
                                    </div>
                                    <div class="btSinglePostContent">

                                        <div class="btSinglePostTopData">


                                        </div>
                                        <h4>
                                            <a href="https://bold-news.bold-themes.com/main-demo/2017/01/22/traffic-standard-day-in-new-york/">
                                                Traffic: standard day in New York
                                            </a>
                                        </h4>



                                    </div>
                                </div>
                                <div class="btClear btSeparator topMediumSpaced noBorder">
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
@endsection
