@extends('website.layouts.index')

@section('title',$title)
@section('description',$article->description)
@section('keywords',$article->keywords.','.$article->category->keywords )
@push('css')
    <style>

    </style>

@endpush
@section('content')

    <section class="header" style="    margin-top: 53px;">


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
                                <a class="nav-link {{!isset($category) ?"active":""}}" href="{{url('/')}}">@lang('admin.home')</a>
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
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{route('website.search')}}"><i class="far fa-search"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </section>


    <!-- START HTML SECTION [ related ] -->
    <section class="post">
        <div class="container">
            <div class="bg">
                <div class="content-post">
                    <div class="content-top">
                    <span class="category-post"
                          style="color:{{$article->category->color}}; background: {{$article->category->background}}">{{$article->category->title}}</span>
                        <h1>{{$article->title}}</h1>
                        <p>{{$article->description}}</p>
                        <div class="user-profile">
                            <ul class="list-unstyled">
                                <li>posted on <span>{{$article->created_at}}</span></li>
                                <li><img src="{{$article->author->image_url}}"></li>
                                <li>{{$article->author->name}}</li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{$article->image_url}}" class="media-post">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-post">
                                {!!$article->content!!}
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">

                        <div class="tags">
                            <ul class="list-unstyled">
                                <li> <h3>@lang('admin.tags') : </h3></li>

                                @foreach($article->tags as $tag)
                                    <li><a href="{{route('website.tag.show',$tag->slug)}}" title="{{$tag->title}}">{{$tag->title}}</a></li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                    <div class="actions">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                <ul class="list-unstyled inline">
                                <li><b>@lang('admin.share_with') :</b></li>
                                    <li><a target="_blank" href="{{'https://www.facebook.com/sharer.php?href='.route('website.article.show',$article->slug)}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a  target="_blank" href="{{'https://twitter.com/intent/tweet?url='.route('website.article.show',$article->slug)}}"><i class="fab fa-twitter"></i> </a></li>
                                    <li><a target="_blank" href="{{'https://www.linkedin.com/shareArticle?mini=true&url='.route('website.article.show',$article->slug)."&title={$article->title}&summary={$article->description}"}}"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <div class="share">
                                    <i class="far fa-ellipsis-v ellipsis"></i>
                                    <div class="social-share">
                                        <ul class="list-unstyled ">
                                            <li><a target="_blank" href="{{'https://www.facebook.com/sharer.php?href='.route('website.article.show',$article->slug)}}"><i class="fab fa-facebook-f"></i> @lang('admin.share to facebook')</a></li>
                                            <li><a  target="_blank" href="{{'https://twitter.com/intent/tweet?url='.route('website.article.show',$article->slug)}}"><i class="fab fa-twitter"></i> @lang('admin.share to twitter')</a></li>
                                            <li><a target="_blank" href="{{'https://www.linkedin.com/shareArticle?mini=true&url='.route('website.article.show',$article->slug)."&title={$article->title}&summary={$article->description}"}}"><i class="fab fa-linkedin-in"></i> @lang('admin.share to linkedin')</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="interactions">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                <ul class="list-unstyled inline">
                                    <li>
                                        <div class="all-views">
                                            <i class="far fa-eye"></i> <span>{{$article->count_view}}</span> @lang('admin.views')
                                        </div>
                                    </li>
                                    <li>
                                        <div class="all-comment">
                                            <a href="#" title="">
                                                <i class="far fa-comment-alt"></i> <span>{{$article->count_comments}}</span> @lang('admin.comments')
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="all-likes">
                                            <span class="count_favorite">{{$article->count_favorite}}</span><i class="far fa-heart   {{$article->in_favorite?'active':""}} favorite_item " data-action="{{route('website.article.add_to_favorite',$article->id)}}"></i>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HTML SECTION [ related ] -->

    <!-- START HTML SECTION [ related ] -->

    @if($related_articles->count() > 0 )

        <section class="related-Posts">
            <div class="container">
                <div class="header-related">
                    <h2>@lang('admin.related posts')</h2>
                    <a href="{{route('website.category.show',$article->category->slug)}}">@lang('admin.see all')</a>
                </div>
                <div class="row">
                    @foreach($related_articles as $article1)
                        <div class="col-lg-4 col-sm-6">
                            @component('website.components.article_card',['article'=>$article1])
                            @endcomponent
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    @endif
    <!-- END HTML SECTION [ related ] -->


    <!-- START HTML SECTION [ NEW COMMENTS ] -->
    <section class="new-comment" id="add_comment">
        <div class="container">
            <div class="bg">
                <div class="comment-form">
                    <div class="comment-notes">
                        <p>@lang('admin.Your Email address will not be published. Required fields are marked')*</p>
                    </div>
                    <form action="{{route('website.comment.create')}}" method="post">
                        <input type="hidden" name="article_id" value="{{$article->id}}">
                        <div class="form-row">
                            <div class="col-lg-12">
                                <textarea name="content" required class="form-control" placeholder="@lang('admin.what do you think') "
                                          rows="4"></textarea>
                            </div>

                            @if(auth()->guest())
                                <div class="col-lg-6 col-12">
                                    <input type="text" class="form-control" placeholder="@lang('admin.name')*" name="name" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="email" class="form-control" placeholder="@lang('admin.email')*" name="email" required>
                                </div>
                            @endif

                            <div class="col-lg-12">
                                <button type="submit">@lang('admin.Post your comment')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END HTML SECTION [ NEW COMMENTS ] -->


    <!-- START HTML SECTION [ COMMENTS ] -->
    <section class="comments">
        <div class="container">
            <h2>@lang('admin.comments')</h2>
            <div class="comment_list">
                @if($article->comments->count() > 0 )

                    @foreach($article->comments as $comment)

                        @component('website.components.article_comment',['comment'=>$comment])
                        @endcomponent
                    @endforeach
                @else
                    <p class="px-3 lead h4 no_comment_exists">
                        @lang('admin.no_comments_exists')
                    </p>

                @endif


            </div>

        </div>
    </section>
    <!-- END HTML SECTION [ COMMENTS ] -->

    <!-- START STYLE SECITON [ SUBSCRIBE ] -->
    <section class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subscribe-image">
                        {{--                    <img src="{{url('website/')}}/assets/img/subscribe.png" width="100%">--}}
                        <img  width="100%" src="{{isset($settings_website['subscribe_image'])&& !empty($settings_website['subscribe_image'])?url('storage/').'/'.$settings_website['subscribe_image']:url('/website/assets/img/subscribe.png')}}" alt="subscribe">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-body">
                        <div class="subscribe-content">
                            <img src="{{isset($settings_website['logo2'])&& !empty($settings_website['logo2'])?url('storage/').'/'.$settings_website['logo2']:url('/website/assets/img/Logo2.svg')}}" alt="{{@$settings_website['title']}}">
                            <h3>@lang('admin.Keep updated of travel news & experiences')</h3>
                            <p> @lang('admin.Join our newsletter & receive travel news & experiences you don’t want to miss.')
                            </p>
                            <div class="form-subscribe">
                                <form action="" method="post" class="subscribe_form">
                                    <div class="form-group">
                                        <input type="email"  name="email" required class="form-control" placeholder="@lang('admin.Enter your email')">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  name="subscribe" class="form-control btn btn-primary">@lang('admin.subscribe')</button>
                                    </div>

                                </form>
                                <p class="text-success msg"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STYLE SECITON [ SUBSCRIBE ] -->

    <!-- START HTML SECTION [ related ] -->
    @if(count($more_articles)>0)
        <section class="read-also">
            <div class="container">
                <div class="header-read">
                    <h2>@lang('admin.read also')</h2>
                    <a href="{{url('/')}}">@lang('admin.see all')</a>
                </div>
                <div class="row">
                    @foreach($more_articles as $article1)
                        <div class="col-lg-4 col-sm-6">
                            @component('website.components.article_card',['article'=>$article1])
                            @endcomponent
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif
    <!-- START HTML SECTION [ COMMENTS ] -->

@endsection


@push('js')
    <script>

        // $('.name_admin').text(11);
        $("#add_comment").submit(function (event) {
            event.preventDefault();
            var $this = $(this);
            toastr.remove();
            toastr.warning("@lang('admin.in_progress')");

            var posted_data = $this.find('form').serialize();
            var url = $this.find('form').attr('action');
            $.post(url, posted_data,
                function (response, status) {
                    $this.find('[type="reset"]').click();
                    $('.no_comment_exists').remove();
                    $('#add_comment [name=content],#add_comment [name=email],#add_comment [name=name]').val('');
                    $('.comment_list').prepend(response.comment);
                    toastr.remove();
                    toastr.options.timeOut = 2000;
                    toastr.success(response.message);
                })
                .fail(function (response) {
                    let  message = '';
                    toastr.remove();

                    for (var error in response.responseJSON.errors) {
                        for (var line in response.responseJSON.errors[error]) {
                            message += "\n" + response.responseJSON.errors[error][line];
                        }
                    }

                    console.log(response);
                    if(message=="")
                        message = response.responseJSON.message;
                    toastr.options.timeOut = 10000;

                    toastr.error(message);

                });
        });
    </script>

@endpush
