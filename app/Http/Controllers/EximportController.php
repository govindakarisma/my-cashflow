<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CashflowExport;
use App\Imports\CashflowImport;
use Maatwebsite\Excel\Facades\Excel;

class EximportController extends Controller
{
    public function exportCashflowExcel()
    {
        return Excel::download(new CashflowExport, 'Catatan Finansial.xlsx');
    }

    public function importCashflowExcel(Request $request)
    {
        Excel::import(new CashflowImport, $request->file('cashflows'));
        return redirect('/cashflow')->with('toast_success', 'Import data berhasil!!!');
    }
}
