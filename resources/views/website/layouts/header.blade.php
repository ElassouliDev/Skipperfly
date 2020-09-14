<section class="header">
<div class="title-header" style="
    background:linear-gradient(0deg, rgb(5 5 5 / 58%), rgb(15 5 5 / 58%)),
    url('{{isset($settings['home_image']) && !empty($settings['home_image']) ?url('storage/').'/'.$settings['home_image']:url('/website/assets/img/header.png')}}');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>{{@$settings_website['home_page_image_title']}}</h1>
                    <p>{{@$settings_website['home_page_image_desc']}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-lg-none" href="#">Categories</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{!isset($category) ?"active":""}}" href="#">@lang('admin.home')</a>
                        </li>
                        @foreach($nav_categories as $category1)
                            <li class="nav-item">
                                <a class="nav-link {{isset($category)&&$category1->id == $category->id ?"active":""}}"
                                   href="{{route('website.category.show',$category1->slug)}}">{{$category1->title}}</a>
                            </li>
                        @endforeach

                        @if(auth()->guest())
                        <li class="nav-item">
                            <button type="submit" class="form-control btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">@lang('admin.login')</button>

                        </li>

                            @endif


                    </ul>
                </div>
            </div>
        </nav>
    </div>

</section>
