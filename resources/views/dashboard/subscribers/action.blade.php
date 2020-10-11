<div class="actions">
    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('dashboard.subscribers.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $email])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>

</div>
