<div class="actions">
@if(request()->deal)
    <a href="{{ route('deal.coupons.edit',[request()->deal,$id])}}" class=" action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.edit')}}"
    ><i class="fa fa-pencil-square-o"></i></a>
    @else
        <a href="{{ route('coupon.edit',$id)}}" class=" action_icon"
           data-toggle="tooltip" data-placement="right" title=" {{trans('admin.edit')}}"
        ><i class="fa fa-pencil-square-o"></i></a>
    @endif

    {{--            <a href="{{ route('service.show',$id)}}"class="text-primary action_icon"--}}
    {{--            data-toggle="tooltip" data-placement="right" title=" {{trans('admin.show')}}"--}}
    {{--            ><i class="fa fa-eye"></i></a>--}}
    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('coupon.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $desc_ar])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>
{{--    <a data-toggle="modal" data-target="#delete_record{{$id}}" class="text-danger action_icon" href="#"--}}
{{--       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.delete')}}">--}}
{{--        <i class="fa fa-trash"></i> </a>--}}
</div>
