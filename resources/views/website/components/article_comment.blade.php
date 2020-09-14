<div class="comment">
    <div class="bg">
        <div class="comment-body">
            <div class="comment-meta">
                <div class="comment-author">
                    <img src="{{$comment->image}}">
                    <span class="say">{{$comment->user()?$comment->user->name :$comment->name}}</span>
                </div>
                <div class="comment-metadata">
                    <span class="data">{{$comment->created_at}}</span>
                {{--    <div class="share">
                        <i class="far fa-ellipsis-v ellipsis"></i>
                        <div class="social-share">
                            <ul class="list-unstyled ">
                                <li><a href="#"><i class="fab fa-facebook-f"></i> share to facebook</a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i> share to twitter</a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i> share to linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div>--}}
                </div>
            </div>
            <div class="comment-content">
                <p>{{$comment->content}}</p>
            </div>
            <div class="comment-likes">
                <div class="all-likes"  >
                    <span class="count_favorite">{{$comment->count_favorite}}</span><i class="far fa-heart  comment{{$comment->id}} {{$comment->in_favorite?'active':""}} favorite_item " data-action="{{route('website.comment.add_to_favorite',$comment->id)}}"></i>
                </div>
            </div>
        </div>
    </div>
</div>
