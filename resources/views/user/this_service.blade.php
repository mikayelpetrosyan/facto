
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image:url(http://tonatheme.com/newwp/factory/wp-content/themes/factory/images/background/3.jpg);">
    <div class="container text-center">
        <h1>
            {{
                  $subService[0]->services->{"name_".App::getlocale()}
            }}
        </h1>
        <p class="enginText" align="justify ">
            {{
               $subService[0]->services->{"title_".App::getlocale()}
            }}

        </p>
    </div>
</section>
<!--End breadcrumb area-->

<div class="kc_clfw"></div>
<section class="kc-elm kc-css-229746 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-490797 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <section class="our-services">
                        <div class="container" align="center">
                            <div class="row">
                                @foreach($subService as $sub)

                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-our-service">
                                            <figure class="img-box">
                                                <a href=""><img width="370" height="190" src="{{ asset('/storage/upload/'.$sub->img) }}"
                                                                class="attachment-arctica_370x190 size-arctica_370x190 wp-post-image" alt=""
                                                                sizes="(max-width: 370px) 100vw, 370px"></a>
                                            </figure>
                                            <h4><a href="">
                                                    {{
                                                    $sub->{'title_'.App::getlocale()}
                                                    }}
                                                </a></h4>
                                            <p>
                                                {{
                                                   $sub->{'description_'.App::getlocale()}
                                                 }}
                                            </p>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            {{ $subService->links() }}
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>