<div class="actions">
    <a href="{{ route('ads.edit',$id)}}" class=" action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.edit')}}"
    ><i class="fa fa-pencil-square-o"></i></a>
    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('ads.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $title_ar])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>

</div>
