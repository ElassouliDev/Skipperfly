<div class="post-box">
    <div class="post-image">
        <a href="{{route('website.category.show',$article->category->slug)}}">
            <span class="interviews" style="color:{{$article->category->color}} ; background:{{$article->category->background}}  ">{{$article->category->title}}</span>
            <img src="{{$article->image_url}}" alt="{{$article->title}}" width="100%">
        </a>
    </div>
    <div class="post-content">
        <div class="author">
            <div class="author-profile">
                <div class="author-image">
                    <img src="{{$article->author->image_url}}" alt="{{$article->author->name}}">
                </div>
                <div class="author-name">
                    <p>{{$article->author->name}}</p>
                    <p>{{$article->created_at}}</p>
                </div>
            </div>
            <div class="share">
                <i class="far fa-ellipsis-v ellipsis"></i>
                <div class="social-share">
                    <ul class="list-unstyled ">
                        <li><a href="{{'https://www.facebook.com/sharer.php?href='.route('website.article.show',$article->slug)}}" target="_blank"><i class="fab fa-facebook-f"></i> share to
                                facebook</a></li>
                        <li><a href="{{'https://twitter.com/intent/tweet?url='.route('website.article.show',$article->slug)}}" target="_blank"><i class="fab fa-twitter"></i> share to
                                twitter</a></li>
                        <li><a  href="{{'https://www.linkedin.com/shareArticle?mini=true&url='.route('website.article.show',$article->slug)."&title={$article->title}&summary={$article->description}"}}" target="_blank"><i class="fab fa-linkedin-in"></i> share to
                                linkedin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-title">
            <a href="{{route('website.article.show',$article->slug)}}" title="{{$article->title}}">
                <h3>{{$article->title}}</h3>
            </a>
        </div>
        <div class="post-paragraph">
            <a href="" title="{{$article->description}}">
                <p>{{$article->description}}</p>
            </a>
        </div>
        <div class="interactions">
            <ul class="list-unstyled">
                <li>
                    <div class="all-views">
                        <i class="far fa-eye"></i><span>{{$article->count_view}}</span>
                    </div>
                </li>
                <li>
                    <div class="all-comment">
                        <a href="#" title="">
                            <i class="far fa-comment-alt"></i> <span>{{$article->count_comments}}</span>
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
