<?php

namespace App\DataTables;

use App\Models\Article;
use App\Models\Image;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ImageDatatable extends DataTable
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
            ->addColumn('action', 'dashboard.image.action')
            ->editColumn('created_at',function ($item){
                return Carbon::parse($item->created_at)->format('d-m-Y');
            })->editColumn('image',function ($item){
                return $item->image_url;
            })
            ->editColumn('image_url',function ($item){
                return "<img src ='{$item->image_url}' width='100' height='50'/>";
            })            ->rawColumns(['action' , 'image_url']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Image $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Image $model)
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
                    ->setTableId('Imagedatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Brtip')
                    ->orderBy(0)
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
            Column::make('id')->title(trans('admin.id'))->width(30),
            Column::make('image_url')->title(trans('admin.image'))
                ->searchable(false)->orderable(false)->width(100)
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
            Column::make('image')->title(trans('admin.image_url'))
                ->searchable(false)->orderable(false)->width(100)
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
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
        return 'Article_' . date('YmdHis');
    }
}
