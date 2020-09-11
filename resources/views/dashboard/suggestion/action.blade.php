<div class="actions">
    <a href="{{ route('coupon.create',['suggestion_id'=>$id])}}" class="text-info action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.add')}}"
    ><i class="fa fa-plus-circle"></i></a>
    <a href="{{ route('suggestion.show',$id)}}" class="text-primary  action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.show')}}"
    ><i class="fa fa-eye"></i></a>

    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('suggestion.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $desc])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>
</div>
