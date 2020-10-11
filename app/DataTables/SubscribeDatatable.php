<?php

namespace App\DataTables;

use App\Models\Subscribe;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubscribeDatatable extends DataTable
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
            ->addColumn('action', 'dashboard.subscribers.action')
            ->editColumn('created_at',function ($item){
                return Carbon::parse($item->created_at)->format('d-m-Y');
            })
            ;

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Subscribe $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Subscribe $model)
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
                    ->setTableId('Tagdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->orderBy(0)
            ;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
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
        return 'Tag_' . date('YmdHis');
    }
}
