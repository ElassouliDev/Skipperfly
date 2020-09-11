<div class="actions">
    <a href="{{ route('dashboard.category.edit',$id)}}" class=" action_icon"
       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.edit')}}"
    ><i class="fa fa-pencil-square-o"></i></a>
    {{--            <a href="{{ route('service.show',$id)}}"class="text-primary action_icon"--}}
    {{--            data-toggle="tooltip" data-placement="right" title=" {{trans('admin.show')}}"--}}
    {{--            ><i class="fa fa-eye"></i></a>--}}
    <a href="#" class="delete-btn text-danger" data-action="delete"
       action-url="{{route('dashboard.category.destroy', $id)}}"
       data-toggle="tooltip" data-placement="right"
       data-msg="@lang('admin.confirm_delete_msg', ['name' => $title])"
       title=" {{trans('admin.delete')}}"><i class="fa fa-trash"></i></a>
{{--    <a data-toggle="modal" data-target="#delete_record{{$id}}" class="text-danger action_icon" href="#"--}}
{{--       data-toggle="tooltip" data-placement="right" title=" {{trans('admin.delete')}}">--}}
{{--        <i class="fa fa-trash"></i> </a>--}}
</div>
