@extends('website.layouts.index')

@section('title',@$title)

@section('content')

    <section class="header" style="    padding-top: 53px; background-color: #fff">


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
                                <a class="nav-link {{!isset($category) ?"active":""}}"
                                   href="{{url('/')}}">@lang('admin.home')</a>
                            </li>
                            @foreach($nav_categories as $category1)
                                <li class="nav-item">
                                    <a class="nav-link {{isset($category)&&$category1->id == $category->id ?"active":""}}"
                                       href="{{route('website.category.show',$category1->slug)}}">{{$category1->title}}</a>
                                </li>
                            @endforeach

                            @if(auth()->guest())
                                <li class="nav-item">
                                    <button type="submit" class="form-control btn btn-primary" data-toggle="modal"
                                            data-target="#modalLoginForm">@lang('admin.login')</button>

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

    <section class="search-section">
        <div class="container">
            <h1>@lang('admin.search_results')</h1>
            <form  method="get">

            <div class="row">

                <div class="col-lg-4">
                    <div class="sidebarFilter mb-4">
                        <h3>@lang('admin.filter by')</h3>
                        @php
                            $checked_author = request()->author_ids??[];
                            $checked_category = request()->category_ids??[];
                            $tags_ids = request()->tags_ids??[];
                        @endphp
                        <div class="group-accordion">
                            <div class="accordion mb-4">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                            @lang('admin.categories')
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show">
                                        <div class="card-body">
                                            <div class="categories">
                                                <ul class="list-unstyled">
                                                    @foreach($categories as $category)
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                               title="{{$category->title}}"
                                                               style="color: {{$category->color}}; background:{{$category->background}} ">{{$category->title}}
                                                                <input type="checkbox" class="filter_checkbox" {{in_array($category->id,$checked_category)?"checked":""}} name="category_ids[]" value="{{$category->id}}"/>

                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mb-4">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                            @lang('admin.tags')
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" style="">
                                        <div class="card-body">
                                            <div class="tags">
                                                <ul class="list-unstyled">
                                                    @foreach($tags as $tag)
                                                        <li><a href="javascript:void(0);"
                                                               title="{{$tag->title}}">{{$tag->title}}

                                                                <input type="checkbox" class="filter_checkbox" {{in_array($tag->id,$tags_ids)?"checked":""}} name="tags_ids[]" value="{{$tag->id}}"/>
                                                            </a></li>
                                                    @endforeach
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                           class="">
                                            @lang('admin.authors')
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" style="">
                                        <div class="card-body">
                                            <div class="authors">
                                                <ul class="list-unstyled">

                                                    @foreach($authors as $author)
                                                    <li>
                                                        <a title="" href="javascript:void(0)" >
                                                            <div class="author verification">
                                                                <img alt="" src="{{$author->image_url}}">
                                                            </div>
                                                            <div class="text">
                                                                <h5>{{$author->name}}</h5>
                                                                <span>{{$author->about}}</span>
                                                            </div>
                                                            <input type="checkbox" class="filter_checkbox" name="author_ids[]"  {{in_array($author->id,$checked_author)?"checked":""}} id="author_ids{{$author->id}}" value="{{$author->id}}"/>

                                                        </a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="formSearch">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="input-group-text"><i class="far fa-search"></i></button>
                                </div>
                                <input type="text" class="form-control typeahead " name="search"  value="{{old('search',request()->get('search'))}}" placeholder="@lang('admin.search')">
                            </div>

                    </div>
                    <div class="sort">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="post-found">
                                <p class="mb-0">
                                    <span class="pr-1">{{$articles->total()}}</span>
                                     @lang('admin.blog_post_found')
                                </p>
                            </div>
                            <div class="sort-by">
                                <span class="pr-1">@lang('admin.sort_by')</span>
                                <form action="" method="" class="d-inline-block">
                                    <select class="select2 text-left" name="sort_by">
                                        <option value="newest" {{old('sort_by',request()->get('sort_by')) === "newest"? 'selected':""}} >@lang('admin.newest')</option>
                                        <option value="most_comment" {{old('sort_by',request()->get('sort_by')) === "most_comment"? 'selected':""}}>@lang('admin.most_comments')</option>
                                        <option value="most_likes" {{old('sort_by',request()->get('sort_by')) === "most_likes"? 'selected':""}}>@lang('admin.most_likes')</option>
                                        <option value="most_show" {{old('sort_by',request()->get('sort_by')) === "most_show"? 'selected':""}}>@lang('admin.most_show')</option>

                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
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



                    </div>
                </div>


            </div>
            </form>

        </div>
    </section>

@endsection
@push('js')
    <script src="{{asset('website/bootstrap3-typeahead.min.js')}}"></script>

    <script type="text/javascript">
        var path = "{{ url('autoCompleteSearch') }}";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
@endpush


