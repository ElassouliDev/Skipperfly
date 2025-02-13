@extends('website.layouts.index')

{{--@dd($articles->render());--}}
@section('title', @$title)
@section('content')

    @include('website.layouts.popup')
    @include('website.layouts.notification')
    @include('website.layouts.header')
    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="posts">
                        <div class="row">

                            @if(isset($articles) && $articles->count()>0)

                                @foreach($articles as $article)

                                    <div class="col-md-6 col-sm-6">
                                        @component('website.components.article_card',['article'=>$article])
                                        @endcomponent
                                    </div>

                                @endforeach
                            @else
                                <div class="text-center col-md-12 lead bg-secondary text-white py-3 h3">
                                    @lang('admin.no_article')
                                </div>

                            @endif

                        </div>

                        {{$articles->onEachSide(5)->links('vendor.pagination.custom-paginate')}}
             {{--           @if($articles_paginate_data['last_page'] > 1)
                            <div class="pagination">
                                <ul class="list-unstyled inline">
                                    <li><a href="{{$articles_paginate_data['prev_page_url']??'javascript:void(0)'}}"
                                           aria-label="Previous"><i
                                                class="far fa-angle-{{app()->getLocale()=="ar"?'right':'left'}}"></i>@lang('admin.previous')
                                        </a>
                                    </li>

                                    <li><a href="{{$articles_paginate_data['next_page_url']??"javascript:void(0)"}}"
                                           disabled="{{empty($articles_paginate_data['next_page_url'])}}"
                                           aria-label="Next">@lang('admin.next') <i
                                                class="far fa-angle-{{app()->getLocale()=="ar"?'left':'right'}}"></i></a>
                                    </li>
                                </ul>
                                <div class="page">
                                    <span>{{$articles_paginate_data['current_page'] }}</span> /
                                    <span>{{$articles_paginate_data['last_page'] }}</span>
                                </div>
                            </div>
                        @endif--}}

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-box">
                            <h3>@lang('admin.featured posts')</h3>
                            <div class="post-featured">
                                <ul class="list-unstyled">
                                    @if(isset($last_article) && count($last_article)>0)
                                        {{--                                        @dd($last_article->    pluck('id','slug'))--}}

                                        @foreach($last_article as $article)
                                            <li>

                                                <a title="{{$article->title}}"
                                                   href="{{route('website.article.show',$article->slug)}}">
                                                    <img alt="{{$article->title}}" src="{{$article->image_url}}">
                                                    <div class="text">
                                                        <h5>{{$article->title}}
                                                        </h5>
                                                        <span>{{$article->category->title}}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach

                                    @else

                                        <li class="text-center">
                                            @lang('admin.no_article')
                                        </li>

                                    @endif


                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <h3>@lang('admin.authors')</h3>
                            <div class="authors">
                                <ul class="list-unstyled">

                                    @foreach($authors as $author)
                                        <li>
                                            <a title="" href="">
                                                <div class="author verification">
                                                    <img alt="{{$author->name}}" src="{{$author->image_url}}">
                                                </div>
                                                <div class="text">
                                                    <h5>{{$author->name}}</h5>
                                                    <span>{{$author->about}}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <h3>@lang('admin.categories')</h3>
                            <div class="categories">
                                <ul class="list-unstyled">
                                    @foreach($categories as $category)
                                        <li><a href="{{route('website.category.show',$category->slug)}}"
                                               title="{{$category->title}}"
                                               style="color: {{$category->color}}; background:{{$category->background}} ">{{$category->title}}</a>
                                        </li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                        <div class="sidebar-box">
                            <h3>@lang('admin.tags')</h3>
                            <div class="tags">
                                <ul class="list-unstyled">
                                    @foreach($tags as $tag)
                                        <li><a href="{{route('website.tag.show',$tag->slug)}}"
                                               title="{{$tag->title}}">{{$tag->title}}</a></li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                        <div class="sidebar-box">
                            <h3>@lang('admin.Subscribe to Our Newsletters')</h3>
                            <div class="sidebar-subscribe">
                                {{--                                <img src="{{url('website/')}}/assets/img/subscribe.png">--}}
                                <img
                                    src="{{isset($settings_website['subscribe_image'])&& !empty($settings_website['subscribe_image'])?url('storage/').'/'.$settings_website['subscribe_image']:url('/website/assets/img/subscribe.png')}}"
                                    alt="subscribe">
                                <div class="content-subscribe">
                                    <h3>@lang('admin.Keep updated of travel news & experiences') </h3>
                                    <p>@lang('admin.Join our newsletter & receive travel news & experiences you don’t want to miss.')
                                    </p>


                                    <form action="" method="post" class="subscribe_form">

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="@lang('admin.Enter your email')">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="subscribe"
                                                    class="form-control btn btn-primary">@lang('admin.subscribe')
                                            </button>

                                        </div>


                                    </form>
                                    <p class="text-success msg"></p>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push('js')
    <script>
        function PopUp(hideOrshow) {
            if (hideOrshow == "hide")
                document.getElementById("popup").style.display = "none";
            else document.getElementById("popup").removeAttribute("style");
        }

        window.onload = function () {
            setTimeout(function () {
                PopUp("show");
            }, 5000);
        };


    </script>
@endpush





