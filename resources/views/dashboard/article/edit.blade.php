@extends('dashboard.layouts.index')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>

@endpush
@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">{{$title}}</span>
                </div>

            </div>
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="post" class="form-post-data" action="{{route('dashboard.article.update',$article->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="en[title]"
                                                   value="{{old('en.title')??$article->title}}"
                                                   id="form_control_1" placeholder="@lang('admin.title')">
                                            <label for="form_control_1">@lang('admin.title')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="en[description]"
                                                   value="{{old('en.description')??$article->description}}"
                                                   id="form_control_1" placeholder="@lang('admin.description')">
                                            <label for="form_control_1">@lang('admin.description')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <label for="summernote_1">@lang('admin.content')</label>

                                            <textarea name="en[content]"  required id="summernote_1">
                                                {{old('en.content')??$article->content}}
                                            </textarea>
                                        </div>
                                    </div>
                               </div>
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-2 control-label"
                                           for="keywords">@lang('admin.keywords')</label>
                                    <div class="col-md-10">

                                        <input id="tags_1" type="text" name="en[keywords]" data-role="tagsinput"
                                               class="form-control tags  " placeholder="@lang('admin.keywords')"
                                               value="{{old('en.keywords')??$article->keywords}}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label"
                                               for="title_id">@lang('admin.category')</label>
                                        <div class="col-md-10">
                                            <select name="category_id" class="form-control" required id="title_id">
                                                @foreach($categories as $item)
                                                    <option value="{{$item->id}}" {{$article->category_id ==  $item->id ?"selected":""}}>{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label"
                                               for="title_id">@lang('admin.tags')</label>
                                        <div class="col-md-10">
                                            <select name="tag_id[]" class="form-control select-2" multiple id="title_id">
                                                @foreach($tags as $item)
                                                    <option value="{{$item->id}}" {{in_array($item->id,$selected_tags) ?"selected":""}}>{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6"><div class="form-group last">
                                        <label class="control-label col-md-3">@lang('admin.image')</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img
                                                        src="{{$article->image_url}}"
                                                        alt="">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                     style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="hidden" value="" name="image_name"><input type="file"

                                                                                                           name="image">
													</span>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div></div>
                            </div>



                            <div>

                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue" id="submitBtn">@lang('admin.save')</button>
                                </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>


    @endsection

    @push('js')
        <!-- BEGIN PAGE LEVEL PLUGINS -->

            <script src="{{url('/dashboard_assets')}}/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <script>
                $(document).ready(function () {
                    $('#summernote_1').summernote({height: 300});


                    $('.select-2').select2({
                        dir: 'rtl',
                        width: '100%'
                    });

                });
            </script>



    @endpush
