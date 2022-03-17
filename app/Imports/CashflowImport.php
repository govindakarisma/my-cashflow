<?php

namespace App\Imports;

use App\Models\Cashflow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CashflowImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $tower) {
            Cashflow::create([
                'cfid' => $tower[0],
                'slug' => $tower[1],
                'made_on' => $tower[2],
                'resource_id' => $tower[3],
                'category_id' => $tower[4],
                'subcategory_id' => $tower[5],
                'desc' => $tower[6],
                'debit' => $tower[7],
                'credit' => $tower[8]
            ]);
        }
    }
}
