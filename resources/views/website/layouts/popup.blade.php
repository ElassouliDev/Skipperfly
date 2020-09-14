<div id="popup" style='display:none'>
    <div class="container">
        <section class="popup-subscribe">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subscribe-image">
                        <img src="{{url('website/')}}/assets/img/subscribe.png" width="100%">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-body">
                        <div class="subscribe-content">
                            <img src="{{isset($settings_website['logo'])&& !empty($settings_website['logo'])?url('storage/').'/'.$settings_website['logo']:url('/website/assets/img/Logo1.svg')}}" alt="{{@$settings_website['title']}}" height="60"
                                 width="234">
                            <h3>Keep updated of travel news & experiences </h3>
                            <p>Join our newsletter & receive travel news & experiences you don’t want to
                                miss.
                            </p>
                            <div class="form-subscribe">
                                <form action="" method="post" class="subscribe_form">
                                    <div class="form-group">
                                        <input type="email"  name="email" required class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary">Subscribe</button>
                                    </div>
                                </form>
                                <p class="text-success msg"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div onClick="PopUp('hide')" class="close-subscribe"><i class="fal fa-times"></i></div>

        </section>
    </div>
</div>
