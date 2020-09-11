<?php

namespace App\DataTables;

use App\Models\Product;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDatatable extends DataTable
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
            ->addColumn('action', 'dashboard.Product.action')
            ->editColumn('image_url', function ($item) {
                return
                    "<img src ='{$item->image_url}' width='150' height='100'/>";

            })
            ->editColumn('status', function ($item) {
                return $item->status == true ?
                    '<span class="label label-success">
									فعال </span>' :
                    '<span class="label label-warning">
									غير فعال </span>   ';
            })
            ->editColumn('company_id', function ($item) {
                return $item->company?$item->company->name_ar:"-";
            })->editColumn('store_id', function ($item) {
                return $item->store?$item->store->name_ar:"-";
            })->editColumn('created_at', function ($item) {
                return Carbon::parse($item->created_at)->format('d-m-Y');
            })
            ->rawColumns(['action','status', 'image_url']);;

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Product $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
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
            ->setTableId('Productdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(0, 'desc')
            ->buttons(
                Button::make('create'),
                //Button::make('export'),
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
            Column::make('id')->title(trans('admin.id'))->width(20),
            Column::make('image_url')->title(trans('admin.image'))
                ->exportable(false)
                ->printable(false)->width(150)->searchable(false)
                ->orderable(false)
            ,
            Column::make('name_ar')->title(trans('admin.name_ar')),
            Column::make('company_id')->title(trans('admin.company_name')),
            Column::make('store_id')->title(trans('admin.store_name')),
            Column::make('status')->title(trans('admin.status'))->width(50)
                ->addClass('text-center'),
//            Column::make('created_at')->title(trans('admin.created_at'))->addClass('text-center'),
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
        return 'Product_' . date('YmdHis');
    }
}
