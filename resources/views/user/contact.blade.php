<section class="breadcrumb-area"
         style="background-image:url(http://tonatheme.com/newwp/factory/wp-content/themes/factory/images/background/3.jpg);">
    <div class="container text-center">
        <h1> {{trans('app.Contact_us')}}</h1>
    </div>
</section>


<div class="kc_clfw"></div>
<section class="kc-elm kc-css-791960 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-36289 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container"><!--Start contact form area-->
                    <section class="contact-form-area sec-padd-top">
                        <div class="container">
                            <div class="section-title">
                                <h2>get in <span class="thm-color">touch</span></h2>
                                <p>Sometimes you want to go where everybody knows your name. And they're always glad you
                                    <br> came. Straight nin' the hills Someday the
                                    mountain will.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="contact-form">
                                        <div id="contact-form" class="default-form">
                                                <div class="screen-reader-response"></div>

                                                <form action="/contact-us" method="post" class="wpcf7-form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" name="your-name" required size="40" placeholder="Your Name*">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="email" name="your-email" required size="40" placeholder="Your Mail*">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" name="your-phone" required size="40" placeholder="Phone">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="your-subject" required size="40" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea name="your-message" cols="40" rows="10" placeholder="Your Message.."></textarea>
                                                        </div>
                                                    </div>
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-md-12"><input type="submit" value="send message"
                                                                                      id="send"
                                                                                      class="wpcf7-form-control wpcf7-submit thm-btn bg-clr1"><span
                                                                    class="ajax-loader"></span></div>
                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="footer-contact-info">
                                        <div class="title">
                                            <h4>Quick Contact</h4>
                                            <p>If you are passionate about helping people: through education, or
                                                preventing then you</p>
                                        </div>
                                        <ul class="clearfix">
                                            <li>
                                                <div class="iocn-holder"><span class="icon-home"></span></div>
                                                <div class="text-holder">
                                                    <h6>321, Breaking Street</h6>
                                                    <p>Newyork ,USA 10002</p></div>
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
                                                    <p><a href="mailto:Supportuss@gmail.com">Supportuss@gmail.com</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End contact form area-->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<script>
    jQuery(document).ready(function($){
        $( "#send" ).click(function() {
            var phone = $('input[name="your-phone"]').val(),
                intRegex = /[0-9 -()+]+$/;
//            if((phone.length < 9) || (!intRegex.test(phone)))
//            {
//                alert('Please enter a valid phone number.');
//                return false;
//            }
        });
    });
</script>

