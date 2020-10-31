@if(isset($settings_website['text_notification_'.app()->getLocale()]) && !empty($settings_website['text_notification_'.app()->getLocale()]))
    <section class="notification">
        <div class="">
            <div class="alert  alert-dismissible fade show mb-0 notification" role="alert">
                {{$settings_website['text_notification_'.app()->getLocale()]}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </section>
@endif
@if(session()->has('status'))
    <section class="notification">
        <div class="">
            <div class="alert  alert-dismissible fade show mb-0 notification" role="alert">
                {{session()->get('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </section>
@endif
