@extends('dashboard.layouts.index')

@section('title',$title)
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">@lang('admin.edit')</span>
                </div>

            </div>
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="post" action="{{route('dashboard.category.update',$category->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" required name="title"
                                           value="{{old('title')??$category->title}}"
                                           id="form_control_1" placeholder="@lang('admin.title')">
                                    <label for="form_control_1">@lang('admin.title')</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" required
                                           name="description"
                                           value="{{old('description')??$category->description}}" placeholder="@lang('admin.description')">
                                    <label for="form_control_1">@lang('admin.description')</label>
                                </div>


                                <div class="form-group  form-md-line-input">

                                    <input id="tags_1" type="text" name="keywords" data-role="tagsinput"
                                           class="form-control tags " placeholder="@lang('admin.keywords')"
                                           value="{{old('keywords')??$category->keywords}}"/>

                                    <label for="form_control_1">@lang('admin.keywords')</label>

                                </div>
                                <div class="form-group  form-md-line-input">
                                    <label for="form_control_1">@lang('admin.add_to_nav') : </label>


                                    <div
                                        class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                        style="width: 101px;">

                                        <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                            <input type="checkbox" name="in_nav" class="make-switch"
                                                   {{$category->in_nav?'checked':''}} data-on-text="ON" data-off-color="danger"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  form-md-line-input">

                                            <input id="color" type="color" name="color" class="form-control  "
                                                   placeholder="@lang('admin.color')"
                                                   value="{{old('color')??$category->color}}"/>

                                            <label for="form_control_1">@lang('admin.color')</label>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group  form-md-line-input">

                                            <input id="background" type="color" name="background" class="form-control  "
                                                   placeholder="@lang('admin.background')"
                                                   value="{{old('background')??$category->background}}"/>

                                            <label for="form_control_1">@lang('admin.background')</label>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="category_show_text_temp"
                                             style="background-color: {{$category->background}};    color:{{$category->color}};">
                                            Text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">@lang('admin.save')</button>
                                <button type="reset" class="btn default">@lang('admin.cancel')</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        @endsection
        @push('js')

            <script>

                $(document).ready(function () {
                    $('.select-2').select2({
                        dir: 'rtl',
                        width: '100%'
                    });
                    $(".tags").tagsinput();
                })

                $(document).on('change', '#color,#background', function (event) {
                    //  console.log(event);
                    $('.category_show_text_temp').css(event.target.name, $(this).val())
                });

            </script>
    @endpush
