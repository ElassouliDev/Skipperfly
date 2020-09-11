<div class="actions">
    <a href="{{ route('contact-us.show',$id)}}" class=" action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.show')}}"
    ><i class="fa fa-eye"></i></a>

    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('contact-us.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $subject])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>

</div>
