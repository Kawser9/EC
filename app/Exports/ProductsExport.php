<?php

namespace App\Exports;

use App\Models\backend\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Product::all();
    // }

    public function view(): View
    {
        return view('backend.pages.product.excel', [
            'products' => Product::all()
        ]);
    }
}
