<!--End mainmenu area-->
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image:url(http://tonatheme.com/newwp/factory/wp-content/themes/factory/images/background/3.jpg);">
    <div class="container text-center">
        <h1>
            {{

                $projects[0]->projects->{'name_'.App::getlocale()}

            }}
        </h1>
    </div>
</section>
<!--End breadcrumb area-->

<section class="project-single sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="img-box" style="width: 100%">
                    <div class="product-slider">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <?php $i = 1 ?>
                                @foreach($projects as $project)
                                    @if($i <= 1)
                                         <div class="item active"><img class="project_img" src="{{ asset('/storage/upload/'.$project->filename) }}"></div>
                                    @else
                                        <div class="item"><img class="project_img" src="{{ asset('/storage/upload/'.$project->filename) }}"></div>
                                    @endif
                                    <?php $i++ ?>
                                @endforeach
                            </div>
                        </div>
                        <div class="clearfix">
                            <div id="thumbcarousel" class="carousel slide" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php $j = 0 ?>
                                        @foreach($projects as $project)
                                                <div data-target="#carousel" data-slide-to="{{$j}}" class="thumb"><img src="{{ asset('/storage/upload/'.$project->filename) }}"></div>
                                            <?php $j++ ?>
                                        @endforeach

                                    </div>
                                </div>
                                <!-- /carousel-inner -->
                              </div>
                            <!-- /thumbcarousel -->

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12">
                        <h2>
                            {{
                                $projects[0]->projects->{'name_'.App::getlocale()}
                            }}
                        </h2>
                        <p>
                            {{
                                $projects[0]->projects->{'description_'.App::getlocale()}
                            }}
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>




