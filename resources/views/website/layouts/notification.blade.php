
@if(isset($settings_website['text_notification']) && !empty($settings_website['text_notification']))
<section class="notification">
    <div class="">
        <div class="alert  alert-dismissible fade show mb-0 notification" role="alert">
            {{$settings_website['text_notification']}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</section>
@endif
