<section class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-lg-baseline">
                <div class="col-lg-3 col-md-12">
                    <ul class="list-unstyled">
                        <li>
                            <div class="logo-footer">
                                <a href="#" title="{{@$settings_website['title_'.app()->getLocale()]}}}">
                                    <img
                                        src="{{isset($settings_website['logo'])&& !empty($settings_website['logo'])?url('storage/').'/'.$settings_website['logo']:url('/website/assets/img/Logo1.svg')}}"
                                        alt="{{@$settings_website['title']}}" height="60"
                                        width="234">
                                </a>
                            </div>
                        </li>
                        <li>
                            <ul class="list-unstyled language">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a class="{{app()->getLocale()==$localeCode?"active":""}}" rel="alternate"
                                           hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                                {{--                                <li><a href="" class="active">english</a></li>--}}
                                {{--                                <li><a href="">arabic</a></li>--}}
                                {{--                                <li><a href="">turkish</a></li>--}}
                                {{--                                <li><a href="">swedish</a></li>--}}
                            </ul>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <div class="payments">--}}
                        {{--                                <img src="{{url('website/')}}/assets/img/paymentMethods.svg" alt="">--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12">
                    <ul class="list-unstyled links">
                        <li><strong>about us</strong></li>
                        <li><a href="{{@$settings_website['blog_url']}}" title="blog" target="_blank">blog</a></li>
                        <li><a href="{{@$settings_website['about_url']}}" title="about" target="_blank">about</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12">
                    <ul class="list-unstyled links">
                        <li><strong>help center</strong></li>
                        <li><a href="{{@$settings_website['faq_url']}}" title="faq" target="_blank">faq</a></li>
                        <li><a href="{{@$settings_website['contact_us_url']}}" title="contact us" target="_blank">contact
                                us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12">
                    <ul class="list-unstyled links">
                        <li><strong>marketing</strong></li>
                        <li><a href="{{@$settings_website['trips_url']}}" title="trips" target="_blank">trips</a></li>
                        <li><a href="{{@$settings_website['services_url']}}" title="Services"
                               target="_blank">Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <ul class="list-unstyled">
                        <li>
                            <ul class="list-unstyled download">
                                <li><a href="#" title="google-play"><img
                                            src="{{url('website/')}}/assets/img/google-play.svg"></a>
                                </li>
                                <li><a href="#" title="store-apple"><img
                                            src="{{url('website/')}}/assets/img/store-apple.svg"></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <p class="subscribe-paragraph">Subscribe to Our Newsletters</p>
                            <form action="" method="post" class="subscribe_form">
                                <div class="form-group">
                                    <input type="email" name="email" required class="form-control mb-3 mt-3"
                                           placeholder="Enter Your Email">
                                </div>
                                <p class="subscribe-paragraph text-success msg"></p>

                                <div class="form-group">
                                    <button type="submit" name="subscribe" class="form-control btn btn-primary">
                                        Subscribe
                                    </button>


                                </div>
                              {{--  <div class="form-group">
                                    <button type="submit" name="unsubscribe"
                                            class="form-control btn btn-primary" style="
                                                      color: #ff4876;
                                                      background-color: #fFF;  border:0 ">Unsubscribe
                                    </button>

                                </div>--}}
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#" title="">{{@$settings_website['title_'.app()->getLocale()]}} © 2020</a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col"><a href="{{@$settings_website['cookies_url']}}" title="Cookies"
                                                     target="_blank">Cookies</a></div>
                        <div class="col-lg-4 col"><a href="{{@$settings_website['privacy_url']}}" title="Privacy"
                                                     target="_blank">Privacy</a>
                        </div>
                        <div class="col-lg-4 col"><a href="{{@$settings_website['terms_and_conditions_url']}}"
                                                     title="Terms and conditions" target="_blank">Terms and
                                conditions</a></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="list-unstyled social-media">
                        <li><a target="_blank" href="{{@$settings_website['facebook']}}"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="{{@$settings_website['twitter']}}"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{@$settings_website['instagram']}}"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="{{@$settings_website['linkedin']}}"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="scroll-to-top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</div>
