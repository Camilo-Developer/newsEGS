@extends('layouts.guest3')
@section('title','Detalle de la noticia')
@section('content')
    <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced wBackground cover btParallax btDarkSkin btBackgroundOverlay btSolidDarkBackground " style="background-image:url({{asset('storage/'. $news->imagen)}})" data-parallax="0.8" data-parallax-offset="-250">
        <div class="port">
            <header class="header btClear extralarge">
                <div class="btSuperTitle">
                    <span>
                        <div class="btBreadCrumbs">
                            <nav>
                                <ul>
                                    <span class="btArticleCategories">
                                        <a href="#" class="btArticleCategory cat-item-7">{{$news->category->name}}</a>
                                    </span>
                                </ul>
                            </nav>
                        </div>
                    </span>
                </div>
                <div class="dash">
                    <h1>
                        <span class="headline">
                            {{$news->title}}
                            <div class='headline_feat_image_caption'></div>
                        </span>
                    </h1>
                </div>
            </header>
        </div>
    </section>
    <div class="btContentHolder">
        <div class="btContent">
            <article class="boldSection btArticle gutter divider btArticleWithSideInfo post-3133 post type-post status-publish format-video has-post-thumbnail hentry category-entertainment category-video tag-entertainment tag-video post_format-post-format-video btPostSingleItemStandard">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldRow">
                            <div class="rowItem col-sm-12 btTextLeft">
                                <div class="btArticleContentWrap">
                                    <div class="btArticleSideinfo">
                                        <div class="btArticleSideMeta">
                                            <header class="header btClear medium">
                                                <div class="dash"></div>
                                                <div class="btSubTitle">
                                                    {{--Link para ver los post por autor--}}
                                                    <a href="#" class="btArticleAuthor">
                                                        @if(!empty($news->user->avar))
                                                            <img alt='autor'  src='{{'storage/' . $news->user->avatar}}' />
                                                        @else
                                                            <img alt='autor'  src='https://ui-avatars.com/api/?name={{ substr($news->user->name, 0, 1) . substr($news->user->lastname, 0, 1) }}&color=7F9CF5&background=EBF4FF' />
                                                        @endif
                                                        {{$news->user->name}} {{$news->user->lastname}}
                                                    </a>
                                                    <span class="btArticleDate">{{$news->created_at->format('M d, Y')}}</span>
                                                    </div>
                                            </header>
                                            {{--Redes sociales--}}
                                            <div class="btTags">
                                                    <span class="btIco btIcoFilledType btIcoSmallSize btIcoFacebook">
                                                        <a href="#" target="_self" data-ico-fa="&#xf09a;"  class="btIcoHolder"></a>
                                                    </span>
                                                    <span class="btIco btIcoFilledType btIcoSmallSize btIcoTwitter">
                                                        <a href="#" target="_self" data-ico-fa="&#xf099;" class="btIcoHolder"></a>
                                                    </span>

                                                    <span class="btIco btIcoFilledType btIcoSmallSize btIcoLinkedin">
                                                        <a href="#" target="_self" data-ico-fa="&#xf0e1;" class="btIcoHolder">
                                                        </a>
                                                    </span>

                                                    <span class="btIco btIcoFilledType btIcoSmallSize btIcoWhatsApp">
                                                        <a href="#" target="_self" data-ico-fa="&#xf232;" class="btIcoHolder">
                                                        </a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="btRelatedPosts">
                                            <h3><span>Noticias relacionadas</span></h3>
                                            <div class="boldRow">

                                                <div class="rowItem col-sm-12">
                                                    <div class="btSinglePostTemplate smallTemplate image backgroundImagePosition">
                                                        <div class="btPostImageHolder">
                                                            <div class="btSinglePostBackgroundImage" style="background-image:url(https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/hero_-640x427.jpg); ">
                                                                <a href="#" title="ads" target="_blank"></a>
                                                            </div>
                                                            <div class="btSinglePostTopMetaData">
                                                                <div class="btSinglePostFormat"></div>
                                                            </div>
                                                        </div>
                                                        <div class="btSinglePostContent">
                                                            <h4>
                                                                <a href=""
                                                                   title="asdasd"
                                                                   target="_blank">How to create great images
                                                                    for your blog</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rowItem col-sm-12">
                                                    <div
                                                        class="btClear btSeparator topSmallSpaced bottomSmallSpaced border">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btArticleContent">
                                        <div class="btRegularMediaPosition">
                                            <div class="btMediaBox video" data-hw="0.5625">
                                                @if($news->type_file == 1)
                                                    <img style="width: 100%; height: 200px;" class="card-img-top" src="{{asset('storage/'.$news->sub_imagen)}}" alt="Dist Photo 1">

                                                @elseif($news->type_file == 2)
                                                    <video src="{{asset('storage/'.$news->sub_imagen)}}" width="200" height="300" controls></video>
                                                @elseif($news->type_file == 3)
                                                    <audio src="{{asset('storage/'.$news->sub_imagen)}}" controls></audio>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="btArticleExcerpt">
                                            {{$news->title}}
                                        </div>
                                        <div class="btArticleBody portfolioBody btTextLeft">
                                            <div class="bt_bb_wrapper">
                                                {!!  $news->description !!}
                                            </div>
                                            @if($news->document)
                                                <a class="btn btn-primary" href="{{asset('storage/'.$news->document)}}" download="">Descargar documento</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>



        </div><!-- /boldthemes_content -->
        <aside class="btSidebar btTextLeft">
            <div class="btBox widget_categories">
                <ul>
                    <li class="cat-item cat-item-6"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/business/">Business
                            <span>23</span></a>
                    </li>
                    <li class="cat-item cat-item-7"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/entertainment/">Entertainment
                            <span>24</span></a>
                    </li>
                    <li class="cat-item cat-item-9"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/food-cuisine/">Food &amp;
                            Cuisine <span>19</span></a>
                    </li>
                    <li class="cat-item cat-item-11"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/health/">Health
                            <span>5</span></a>
                    </li>
                    <li class="cat-item cat-item-13"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/lifestyle/">Lifestyle
                            <span>16</span></a>
                    </li>
                    <li class="cat-item cat-item-16"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/news-trending/">News
                            &amp; Trending <span>8</span></a>
                    </li>
                    <li class="cat-item cat-item-17"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/pets/">Pets
                            <span>14</span></a>
                    </li>
                    <li class="cat-item cat-item-19"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/popular/">Popular
                            <span>7</span></a>
                    </li>
                    <li class="cat-item cat-item-22"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/sport/">Sport
                            <span>10</span></a>
                    </li>
                    <li class="cat-item cat-item-24"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/tech/">Tech
                            <span>13</span></a>
                    </li>
                    <li class="cat-item cat-item-25"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/travel/">Travel
                            <span>16</span></a>
                    </li>
                    <li class="cat-item cat-item-26"><a
                            href="https://bold-news.bold-themes.com/main-demo/category/urban/">Urban
                            <span>12</span></a>
                    </li>
                </ul>
            </div>
            <div class="btBox widget_bt_banner_widget no-border">
                <div class="bt_banner no-border"><a
                        href="https://themeforest.net/item/industrial-manufacturing-factory-wordpress-theme/18939815?ref=BoldThemes"
                        target="_blank"><img
                            src="/main-demo/wp-content/uploads/sites/2/2017/03/Industrial-300x250-banner.jpg" /></a>
                </div>
            </div>
            <div class="btBox widget_bt_recent_posts">
                <h4><span>Recent Posts</span></h4>
                <div class="popularPosts">
                    <ul>
                        <li>
                            <div class="ppImage"><a
                                    href="https://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/"><img
                                        width="160" height="160"
                                        src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-160x160.jpg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-160x160.jpg 160w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-180x180.jpg 180w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-300x300.jpg 300w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-600x600.jpg 600w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-320x320.jpg 320w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-640x640.jpg 640w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-1280x1280.jpg 1280w"
                                        sizes="(max-width: 160px) 100vw, 160px" /></a></div>
                            <div class="ppTxt">
                                <header class="header btClear small">
                                    <div class="btSuperTitle"><span>March 17, 2017</span></div>
                                    <div class="dash">
                                        <h4><span class="headline"><a
                                                    href="https://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/">How’s
                                                            New York in the Christmas time?</a></span></h4>
                                    </div>
                                </header>
                            </div>
                        <li>
                            <div class="ppImage"><a
                                    href="https://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/"><img
                                        width="160" height="160"
                                        src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-160x160.jpg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-160x160.jpg 160w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-180x180.jpg 180w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-300x300.jpg 300w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-600x600.jpg 600w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-320x320.jpg 320w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-640x640.jpg 640w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-1280x1280.jpg 1280w"
                                        sizes="(max-width: 160px) 100vw, 160px" /></a></div>
                            <div class="ppTxt">
                                <header class="header btClear small">
                                    <div class="btSuperTitle"><span>March 16, 2017</span></div>
                                    <div class="dash">
                                        <h4><span class="headline"><a
                                                    href="https://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/">10
                                                            best things to do in St. Petersburg</a></span></h4>
                                    </div>
                                </header>
                            </div>
                        <li>
                            <div class="ppImage">
                                <a href="https://bold-news.bold-themes.com/main-demo/2017/03/12/find-your-new-apartment-with-just-one-click/">
                                    <img width="160" height="160" src="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-160x160.jpg 160w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-180x180.jpg 180w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-300x300.jpg 300w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-600x600.jpg 600w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-320x320.jpg 320w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-640x640.jpg 640w, https://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-1280x1280.jpg 1280w" sizes="(max-width: 160px) 100vw, 160px" />
                                </a>
                            </div>
                            <div class="ppTxt">
                                <header class="header btClear small">
                                    <div class="btSuperTitle">
                                        <span>March 12, 2017</span>
                                    </div>
                                    <div class="dash">
                                        <h4>
                                            <span class="headline">
                                                <a href="https://bold-news.bold-themes.com/main-demo/2017/03/12/find-your-new-apartment-with-just-one-click/">
                                                    Find your new apartment with just one click
                                                </a>
                                            </span>
                                        </h4>
                                    </div>
                                </header>
                            </div>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
@endsection
