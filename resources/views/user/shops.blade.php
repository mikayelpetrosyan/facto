<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image:url(http://tonatheme.com/newwp/factory/wp-content/themes/factory/images/background/3.jpg);">
    <div class="container text-center">
        <h1> {{trans('app.Shops')}}</h1>
    </div>
</section>
<!--End breadcrumb area-->

<div class="kc_clfw"></div>
<section class="kc-elm kc-css-685959 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-670391 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <section class="project-content sec-padd">
                        <div class="container" align="center">

                            <div class="row masonary-layout filter-layout" style="position: relative; height: 900px;">
                                @foreach($shops as $shop)
                                    <div class="col-md-4 mix col-sm-6 filter-item material " style="position: absolute; left: 0px; top: 0px;">
                                        <div class="single-project-item">
                                            <div class="img-box">
                                                <img width="370" height="270" src="{{ asset('/storage/upload/'.$shop->shopsImg[0]->filename) }}"
                                                     class="attachment-arctica_370x270 size-arctica_370x270 wp-post-image" alt=""
                                                     sizes="(max-width: 370px) 100vw, 370px">
                                                <div class="overlay-bg">
                                                    <div class="box">
                                                        <div class="top-box">
                                                            <div class="title">
                                                                <h3>
                                                                    <a href="/shop/{{$shop->id}}">
                                                                        {{
                                                                            $shop->{'name_'.App::getlocale()}
                                                                        }}
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <ul>
                                                                <li><a href="/shop/{{$shop->id}}"><i class="fa fa-link"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{ $shops->links() }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>