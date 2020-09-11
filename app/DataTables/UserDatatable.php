<?php

namespace App\DataTables;

use App\User;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
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
            ->addColumn('action', 'dashboard.users.action')
            ->editColumn('created_at', function ($item) {
                return Carbon::parse($item->created_at)->format('d-m-Y');
            })->addColumn('status', function ($item) {
                return $item->is_blocked == false ?
                     '<span class="label label-success">
									فعال </span>' :
                    '<span class="label label-warning">
									غير فعال </span>   ';
            })->rawColumns([ 'action' , 'status']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->get();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('copoundatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(0)
            ->buttons(
                Button::make('create'),
               // Button::make('export'),
                Button::make('excel'),

                Button::make('print')//,
//                        Button::make('reset'),
//                        Button::make('reload')
            )
            ->language(
                [
                    'sProcessing' => trans('datatables.sProcessing'),
                    'sLengthMenu' => trans('datatables.sLengthMenu'),
                    'sZeroRecords' => trans('datatables.sZeroRecords'),
                    'sEmptyTable' => trans('datatables.sEmptyTable'),
                    'sInfo' => trans('datatables.sInfo'),
                    'sInfoEmpty' => trans('datatables.sInfoEmpty'),
                    'sInfoFiltered' => trans('datatables.sInfoFiltered'),
                    'sInfoPostFix' => trans('datatables.sInfoPostFix'),
                    'sSearch' => trans('datatables.sSearch'),
                    'sUrl' => trans('datatables.sUrl'),
                    'sInfoThousands' => trans('datatables.sInfoThousands'),
                    // 'print'     => trans('datatables.print'),
                    'sLoadingRecords' => trans('datatables.sLoadingRecords'),
                    'oPaginate' => [
                        'sFirst' => trans('datatables.sFirst'),
                        'sLast' => trans('datatables.sLast'),
                        'sNext' => trans('datatables.sNext'),
                        'sPrevious' => trans('datatables.sPrevious'),
                    ],
                    'oAria' => [
                        'sSortAscending' => trans('datatables.sSortAscending'),
                        'sSortDescending' => trans('datatables.sSortDescending'),
                    ], 'buttons' => [
                    'create' => trans('datatables.add'),
                    'print' => trans('datatables.print'),
                    'reload' => trans('datatables.reload'),
                    'export' => trans('datatables.export'),
                    'csv' => trans('datatables.export_csv'),
                    'pdf' => trans('datatables.export_pdf'),
                    'excel' => trans('datatables.export_excel'),
                ],
                ]
            );;
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
            Column::make('name')->title(trans('admin.name')),
            Column::make('email')->title(trans('admin.email')),
            Column::make('status')->title(trans('admin.status'))->width(50)->addClass('text-center'),
            Column::computed('action')->title(trans('admin.actions'))
                ->exportable(false)
                ->printable(false)
                ->width(50)
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
        return 'Ads_' . date('YmdHis');
    }
}
