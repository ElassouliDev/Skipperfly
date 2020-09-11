<section class="header">
<div class="title-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Enjoy SkipperFly Blog and Make the Best Job</h1>
                    <p>Improve Your Target Audience by Manage.</p>
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

                    </ul>
                </div>
            </div>
        </nav>
    </div>

</section>
