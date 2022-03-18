<?php

namespace App\Http\Controllers;

use App\Models\Cashflow;
use App\Models\Category;
use App\Models\Resource;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CashflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        function sumCredit()
        {
            $cashflows = collect(Cashflow::all());

            foreach ($cashflows as $cashflow) {
                $credit = $cashflow->whereMonth('action_at', date('m'))->sum('credit');
                $debit = $cashflow->whereMonth('action_at', date('m'))->sum('debit');
                $allcred = $cashflow->sum('credit');
                $alldebt = $cashflow->sum('debit');
            }

            $balance = $alldebt - $allcred;

            $sum = [$credit, $debit, $balance];

            return $sum;
        }

        $sumCash = sumCredit();

        return view('cashflows.index', [
            "page" => "Cash Flow",
            "cashflows" => collect(Cashflow::all()),
            "sumCredit" => $sumCash[0],
            "sumDebit" => $sumCash[1],
            "sumBalance" => $sumCash[2],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cashflows.create', [
            "page" => "Cash Flow - Add Transaction",
            'resources' => collect(Resource::latest()->get()),
            'categories' => collect(Category::latest()->get()),
            'subcategories' => collect(Subcategory::latest()->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cfid' => 'required',
            'slug' => 'required|unique:cashflows',
            'action_at' => 'required',
            'resource_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'nullable',
            'desc' => 'nullable',
            'debit' => 'nullable|integer',
            'credit' => 'nullable|integer'
        ]);

        Cashflow::create($validatedData);

        return redirect('/cashflow')->with('toast_success', 'Add Transaction Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function show(Cashflow $cashflow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashflow $cashflow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashflow $cashflow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cashflow  $cashflow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashflow $cashflow)
    {
        Cashflow::destroy($cashflow->id);

        return redirect('/cashflow')->with('toast_success', 'Berhasil Menghapus <br>' . $cashflow->cfid . ' - ' . $cashflow->desc);
    }
}
