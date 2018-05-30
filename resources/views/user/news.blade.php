<!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image:url(http://tonatheme.com/newwp/factory/wp-content/themes/factory/images/background/3.jpg);">
        <div class="container text-center">
            <h1>  MATERIALS &amp; MANUFACTURING</h1>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Sidebar Page-->
    <section id="blog-area" class="blog-with-sidebar-area blog-single-area">
        <div class="container">
            <div class="row">

                <!-- sidebar area -->

                <!--Content Side-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!--Default Section-->
                    <section class="blog-post no-padd-top no-padd-bottom">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img width="350" style="height:550px"
                                     title=
                                     {{
                                         $news[0]->{'title_'.App::getlocale()}
                                     }}
                                     src="{{ asset('/storage/upload/'. $news[0]->img) }}"
                                     class="attachment-arctica_740x350 size-arctica_740x350 wp-post-image" alt="" />

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div itemscope="" itemtype="http://schema.org/Comment" id="comments" class="post-comments comment-area clearfix">

                            <div class="add-comment-box">
                                <!-- Heading -->
                                <div class="default-form" id="respond">
                                    <div class="sec-title">
                                        <h3>
                                            {{
                                               $news[0]->{'title_'.App::getlocale()}
                                            }}
                                        </h3>
                                        <span class="border"></span>
                                    </div>
                                    <br><br>
                                    <p>
                                        {{
                                           $news[0]->{'description_'.App::getlocale()}
                                        }}
                                    </p>
                                </div>

                            </div>
                        </div><!-- #comments -->
                    </section>
                </div>

            </div>
        </div>
    </section>

    <div class="clearfix"></div>
