<?php

namespace App\Exports;

use App\Models\Cashflow;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CashflowExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Cashflow::all();
    }

    public function headings(): array
    {
        return [
            'CFID',
            'Date',
            'Sumber Dana',
            'Kategori',
            'Sub Kategori',
            'Keterangan',
            'Debit',
            'Kredit'
        ];
    }

    public function map($cashflow): array
    {
        return [
            $cashflow->cfid,
            $cashflow->made_on,
            $cashflow->resource->name,
            $cashflow->category->name,
            $cashflow->subcategory->name,
            $cashflow->desc,
            $cashflow->debit,
            $cashflow->credit
        ];
    }
}
