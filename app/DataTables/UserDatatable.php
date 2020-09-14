<?php

namespace App\DataTables;

use App\Models\Admin;
use App\User;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            ->addIndexColumn()
            ->addColumn('action', 'dashboard.user.action')
            ->editColumn('created_at',function ($item){
                return Carbon::parse($item->created_at)->format('F d,Y');
            })
            ->editColumn('image_url',function ($item){
                return "<img src ='{$item->image_url}' width='100' height='50'/>";
            })            ->rawColumns(['action' , 'image_url']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Admin $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->user()->get();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('Userdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(3)
                    ->buttons(
                        Button::make('create')//,
      //                  Button::make('excel'),

                        // Button::make('export'),
                //        Button::make('print')//,
//                        Button::make('reset'),
//                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
//            Column::make('id')->title(trans('admin.id'))->width(30),
            Column::make('image_url')->title(trans('admin.image'))
                ->searchable(false)->orderable(false)->width(100)
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
            ,
            Column::make('name')->title(trans('admin.name')),
            Column::make('email')->title(trans('admin.email')),
            Column::make('created_at')->title(trans('admin.created_at'))->addClass('text-center'),
            Column::computed('action')->title(trans('admin.actions'))
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Article_' . date('YmdHis');
    }
}
