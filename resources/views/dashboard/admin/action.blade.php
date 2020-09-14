<div class="actions">


    <a href="{{ route('dashboard.admin.edit',$id)}}" class=" action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.edit')}}"
    ><i class="fa fa-pencil-square-o"></i></a>

    @if(\App\User::admin()->count()>1)
    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('dashboard.admin.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $name])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>
        @endif

</div>
