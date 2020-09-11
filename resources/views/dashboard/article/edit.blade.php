@extends('dashboard.layouts.index')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

@endpush
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
                    <div class="col-md-12">
                        <form role="form" method="post" class="form-post-data"  action="{{route('product.update', $product->id)}}"
                              enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="name_ar"
                                                   value="{{old('name_ar')??$product->name_ar}}"
                                                   id="form_control_1" placeholder="@lang('admin.name_ar')">
                                            <label for="form_control_1">@lang('admin.name_ar')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="name_en"
                                                   value="{{old('name_en')??$product->name_en}}"
                                                   id="form_control_1" placeholder="@lang('admin.name_en')">
                                            <label for="form_control_1">@lang('admin.name_en')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" required name="desc_ar"
                                                   value="{{old('desc_ar')??$product->desc_ar}}"
                                                   id="form_control_1" placeholder="@lang('admin.desc_ar')">
                                            <label for="form_control_1">@lang('admin.desc_ar')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" required
                                                   name="desc_en"
                                                   value="{{old('desc_en')??$product->desc_en}}" placeholder="@lang('admin.desc_en')">
                                            <label for="form_control_1">@lang('admin.desc_en')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="number" class="form-control" id="form_control_1" required
                                                   name="number_reviews"
                                                   value="{{old('number_reviews')??$product->number_reviews??0}}"
                                                   placeholder="@lang('admin.number_reviews')">
                                            <label for="form_control_1">@lang('admin.number_reviews')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="number" class="form-control" id="form_control_1" required
                                                   name="number_orders"
                                                   value="{{old('number_orders')??$product->number_orders??0}}"
                                                   placeholder="@lang('admin.number_orders')">
                                            <label for="form_control_1">@lang('admin.number_orders')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1" required
                                                   name="rate"
                                                   value="{{old('rate')??$product->rate??0}}" placeholder="@lang('admin.rate')">
                                            <label for="form_control_1">@lang('admin.rate')</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" id="form_control_1"
                                                   name="coupon_code"
                                                   value="{{old('coupon_code')??$product->coupon_code}}"
                                                   placeholder="@lang('admin.coupon_code')">
                                            <label for="form_control_1">@lang('admin.coupon_code')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="url" class="form-control" id="form_control_1" name="url"
                                                   value="{{old('url')??$product->url}}" placeholder="@lang('admin.url')">
                                            <label for="form_control_1">@lang('admin.url')</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="title_id">@lang('admin.product_titles')</label>
                                            <div class="col-md-10">
                                                <select name="title_id" class="form-control"  required id="title_id">
                                                    @foreach($titles as $item)
                                                        <option value="{{$item->id}}" @if($item->id == $product->title_id) selected @endif>{{$item->title_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="store_id">@lang('admin.store_name')</label>
                                            <div class="col-md-10">
                                                <select name="store_id" class="form-control" id="store_id">
                                                    <option value="">-- @lang('admin.store_name') --</option>

                                                    @foreach($stores as $store)
                                                        <option value="{{$store->id}}"@if($store->id == $product->store_id) selected @endif>{{$store->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-focus">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label"
                                                   for="company_id">@lang('admin.company_name')</label>
                                            <div class="col-md-10">
                                                <select name="company_id" class="form-control" id="company_id">
                                                    <option value="">-- @lang('admin.company_name') --</option>

                                                    @foreach($companies as $company)
                                                        <option value="{{$company->id}}" @if($company->id == $product->company_id) selected @endif>{{$company->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-focus">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group form-md-line-input">
                                            <label for="form_control_1">@lang('admin.status') : </label>


                                            <div
                                                class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on"
                                                style="width: 133px;">

                                                <div class="bootstrap-switch-container" style="width: 148px; margin-left: 0px;">

                                                    <input
                                                        type="checkbox" name="status" class="make-switch" @if($product->status) checked @endif
                                                        data-on-text="فعال" data-off-text="غير فعال" data-off-color="danger">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">@lang('admin.image')</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img
                                                        src="{{$product->image_url?$product->image_url:"http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"}}"
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
                                                    {{--                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">--}}
                                                    {{--                                                    Remove </a>--}}
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="input-711" name="file_path" type="file"   >
                                    </div>
                                </div>
                            </div>

                            <div >

                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue " id="submitBtn">@lang('admin.save')</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>


    @endsection

    @push('js')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/locales/ar.js"></script>


            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).ready(function() {
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": "toast-bottom-right",
                        "onclick": null,
                        "showDuration": "1000",
                        "hideDuration": "1000",
                        "timeOut": 0,//"5000",
                        "extendedTimeOut": 0,//"1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }


                    $("#input-711").fileinput({
                        uploadUrl: "{{route('product.update',$product->id)}}",
                        maxFileCount: 1,
                        showBrowse: false,
                        language:"ar",
                        // showPreview: false,
                        showUpload: false,
                        uploadAsync: true,
                        browseOnZoneClick: true,
                        previewFileType: "video",

                        @if($product->file_path_url)
                        deleteUrl: "{{route('product.delete_video',$product->id)}}",

                        initialPreview: [
                            "{{$product->file_path_url}}"
                        ],
                        initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
                        initialPreviewFileType: 'video', // image is the default and can be overridden in config below
                        initialPreviewConfig: [
                            {caption: "{{$product->file_path}}", width: "120px" ,   type: "video",
                                filetype: "video/{{substr($product->file_path,strpos('.',$product->file_path)+2)}}"
                            }
                        ],
                        @endif
                        allowedFileExtensions: ["jpg", "jpeg", "gif", "png", "mp4",'avi','m3u8','flv','mov'],
                        uploadExtraData: function() {
                            $data = {
                                '_method':$('[name=_method]').val(),
                                'name_ar':$('[name=name_ar]').val(),
                                'name_en':$('[name=name_en]').val(),
                                'desc_ar':$('[name=desc_ar]').val(),
                                'desc_en':$('[name=desc_en]').val(),
                                'number_reviews':$('[name=number_reviews]').val(),
                                'number_orders':$('[name=number_orders]').val(),
                                'rate':$('[name=rate]').val(),
                                'coupon_code':$('[name=coupon_code]').val(),
                                'url':$('[name=url]').val(),
                                'title_id':$('[name=title_id]').val(),
                                'company_id':$('[name=company_id]').val(),
                                'store_id':$('[name=store_id]').val(),

                                'status':$('[name=status]').is(":checked")?1:0
                            };
                            if($('[name=image]')[0].files.length>0)
                                $data['image']= $('[name=image]')[0].files[0] ;
                            return $data

                        },
                        elErrorContainer: "#documentErrorBlock",
                        msgSizeTooLarge: "File exceeds size",
                        msgInvalidFileExtension: "Invalid extension"
                    }).on('fileuploaded', function (event, previewId, index, fileId) {
                        toastr.remove();
                        toastr.success(previewId.response.msg);

                        console.table('success', previewId);
                        console.log('File Uploaded', 'ID: ' + fileId + ', Thumb ID: ' + previewId);

                        window.location.href = "{{route('product.index')}}";

                    })
                        .on('filebatchuploaderror', function (event, data, previewId, index) {


                            $('#submitBtn').attr('disabled', false);
                            toastr.remove();
                            toastr.remove();
                            var start = msg.indexOf("{");
                            var last = msg.lastIndexOf("}");
                            var message = msg;
                            console.log('error  : ', msg);
                            if (start > 0 && last > 0) {
                                var errors_json = JSON.parse(msg.substring(start, last + 1));
                                message = '';
                                if (errors_json.errors !== undefined) {
                                    for (var error in errors_json.errors) {
                                        for (var line in errors_json.errors[error]) {
                                            message += "<br>" + errors_json.errors[error][line];
                                        }
                                    }
                                }

                            }
                            toastr.warning(message);
                            $('.kv-fileinput-error.file-error-message ul').html('<li>' + message + '</li>');

                            console.table('error 2 ', data);
                            console.table('error 22 ', previewId);
                            console.table('error 23 ', index);
                        })

                        .on('fileuploaderror', function (event, data, msg) {
                            $('#submitBtn').attr('disabled', false);
                            toastr.remove();
                            var start = msg.indexOf("{");
                            var last = msg.lastIndexOf("}");
                            var message = msg;
                            console.log('error  : ', msg);
                            if (start > 0 && last > 0) {
                                var errors_json = JSON.parse(msg.substring(start, last + 1));
                                message = '';
                                if (errors_json.errors !== undefined) {
                                    for (var error in errors_json.errors) {
                                        for (var line in errors_json.errors[error]) {
                                            message += "<br>" + errors_json.errors[error][line];
                                        }
                                    }
                                }

                            }
                            toastr.warning(message);
                            $('.kv-fileinput-error.file-error-message ul').html('<li>' + message + '</li>');
                            // console.table(data)
                            console.log('File Upload Error', 'ID: ' + data.fileId + ', Thumb ID: ' + data.previewId);
                        })

                        .on('filebatchuploadsuccess', function(event, data) {
                            toastr.remove();
                            toastr.success(data.response.msg);


                            console.table('success', data);
                            // console.log('File Uploaded', 'ID: ' + fileId + ', Thumb ID: ' + previewId);
                            setTimeout(function(){ window.location.href = "{{route('product.index')}}"; }, 3000);

                        });


                    $(document).on('submit','.form-post-data', function (event) {
                        event.preventDefault();
                        $('#input-711').fileinput('upload');
                        toastr.remove();
                        toastr.warning("@lang('error.in_progress')");
                        $('#submitBtn').attr('disabled',true);
                    });
                    $('[name="image"]').on('change',function () {
                        var input = $('[name="image"]');
                        var fileName = $(this).val().split("\\").pop();
                        $("[name=image_name]").val(fileName);
                        readURL(this);


                    });
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $(".fileinput-new img").attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                });
            </script>
    @endpush
