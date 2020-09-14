@extends('website.layouts.index')

@section('title',$title)
@section('description',$article->description)
@section('keywords',$article->keywords.','.$article->category->keywords )
@push('css')
<style>
    .user_nav_logo {
        position: initial;
        padding: 6px 122px;
        text-align: end;
    }
    .avatar.fileinput .thumbnail{
        width: 100px;
        height: 100px;
        padding: 0;
        overflow: hidden;
        border-radius: 50%;
        outline: none;
    }
    .avatar.fileinput {
        margin-bottom: 30px;
    }
    .avatar.fileinput .thumbnail > img{
        width: 100px;
        height: 100px;
        padding: 2px;
        border-radius: 50%;


    }
</style>

@endpush
@section('content')
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
                            <li> <h3>tags : </h3></li>

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
{{--                                <li>--}}
{{--                                    <a href="#" title=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" title=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" title=""><i class="fab fa-twitter"></i></a>--}}
{{--                                </li>--}}
                                <li><a target="_blank" href="{{'https://www.facebook.com/sharer.php?href='.route('website.article.show',$article->slug)}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a  target="_blank" href="{{'https://twitter.com/intent/tweet?url='.route('website.article.show',$article->slug)}}"><i class="fab fa-twitter"></i> </a></li>
                                <li><a target="_blank" href="{{'https://www.linkedin.com/shareArticle?mini=true&url='.route('website.article.show',$article->slug)."&title={$article->title}&summary={$article->description}"}}"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                            <div class="share">
                                <i class="far fa-ellipsis-v ellipsis"></i>
                                <div class="social-share">
                                    <ul class="list-unstyled ">
                                        <li><a target="_blank" href="{{'https://www.facebook.com/sharer.php?href='.route('website.article.show',$article->slug)}}"><i class="fab fa-facebook-f"></i> share to facebook</a></li>
                                        <li><a  target="_blank" href="{{'https://twitter.com/intent/tweet?url='.route('website.article.show',$article->slug)}}"><i class="fab fa-twitter"></i> share to twitter</a></li>
                                        <li><a target="_blank" href="{{'https://www.linkedin.com/shareArticle?mini=true&url='.route('website.article.show',$article->slug)."&title={$article->title}&summary={$article->description}"}}"><i class="fab fa-linkedin-in"></i> share to linkedin</a>
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
                                        <i class="far fa-eye"></i> <span>{{$article->count_view}}</span> views
                                    </div>
                                </li>
                                <li>
                                    <div class="all-comment">
                                        <a href="#" title="">
                                            <i class="far fa-comment-alt"></i> <span>{{$article->count_comments}}</span> comments
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
            <h2>related posts</h2>
            <a href="{{route('website.category.show',$article->category->slug)}}">see all</a>
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
                    <p>Your Email address will not be published. Required fields are marked*</p>
                </div>
                <form action="{{route('website.comment.create')}}" method="post">
                    <input type="hidden" name="article_id" value="{{$article->id}}">
                    <div class="form-row">
                        <div class="col-lg-12">
                                <textarea name="content" required class="form-control" placeholder="what do you thinks ?"
                                          rows="4"></textarea>
                        </div>

                        @if(auth()->guest())
                        <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" placeholder="name*" name="name" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" placeholder="email*" name="email" required>
                        </div>
                        @endif

                        <div class="col-lg-12">
                            <button type="submit">Post your comment</button>
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
        <h2>comments</h2>
        <div class="comment_list">
            @if($article->comments->count() > 0 )

            @foreach($article->comments as $comment)

                @component('website.components.article_comment',['comment'=>$comment])
                @endcomponent
            @endforeach
            @else
                <p class="px-3 lead h4 no_comment_exists">
                    No comments exists
                </p>

            @endif

       {{--     <div class="comment">
                <div class="bg">
                    <div class="comment-body">
                        <div class="comment-meta">
                            <div class="comment-author">
                                <img src="{{url('website/')}}/assets/img/author.png">
                                <span class="say">moamer sawafiri</span>
                            </div>
                            <div class="comment-metadata">
                                <span class="data">august 31, 2020</span>
                                <div class="share">
                                    <i class="far fa-ellipsis-v ellipsis"></i>
                                    <div class="social-share">
                                        <ul class="list-unstyled ">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i> share to facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i> share to twitter</a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i> share to linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Oh, I would be there it’s nice.</p>
                        </div>
                        <div class="comment-likes">
                            <div class="all-likes">
                                <span>120</span><i class="far fa-heart active"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment">
                <div class="bg">
                    <div class="comment-body">
                        <div class="comment-meta">
                            <div class="comment-author">
                                <img src="{{url('website/')}}/assets/img/author.png">
                                <span class="say">moamer sawafiri</span>
                            </div>
                            <div class="comment-metadata">
                                <span class="data">august 31, 2020</span>
                                <div class="share">
                                    <i class="far fa-ellipsis-v ellipsis"></i>
                                    <div class="social-share">
                                        <ul class="list-unstyled ">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i> share to facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i> share to twitter</a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i> share to linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Day 2 of CES 2018 we explored some smaller booths and found some one of the craziest
                                booths in this hall! Oh, and also ran into David Oh, and also ran into Davi…</p>
                        </div>
                        <div class="comment-likes">
                            <div class="all-likes">
                                <span>1112</span><i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment">
                <div class="bg">
                    <div class="comment-body">
                        <div class="comment-meta">
                            <div class="comment-author">
                                <img src="{{url('website/')}}/assets/img/author.png">
                                <span class="say">moamer sawafiri</span>
                            </div>
                            <div class="comment-metadata">
                                <span class="data">august 31, 2020</span>
                                <div class="share">
                                    <i class="far fa-ellipsis-v ellipsis"></i>
                                    <div class="social-share">
                                        <ul class="list-unstyled ">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i> share to facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i> share to twitter</a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i> share to linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Day 2 of CES 2018 we explored some smaller booths and found some one of the craziest
                                booths in this hall! Oh, and also ran into David Oh, and also ran into Davi…</p>
                        </div>
                        <div class="comment-likes">
                            <div class="all-likes">
                                <span>55</span><i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
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
                    <img src="{{url('website/')}}/assets/img/subscribe.png" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subscribe-body">
                    <div class="subscribe-content">
                        <img src="{{url('website/')}}/assets/img/Logo2.svg">
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
    </div>
</section>
<!-- END STYLE SECITON [ SUBSCRIBE ] -->

<!-- START HTML SECTION [ related ] -->
@if(count($more_articles)>0)
<section class="read-also">
    <div class="container">
        <div class="header-read">
            <h2>Read Also</h2>
            <a href="{{url('')}}">see all</a>
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
