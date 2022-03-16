@extends('layouts.main')

@section('content')
@include('sweetalert::alert')
@include('components.cardheader')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Cash Flow {{date('Y')}}</h5>
          </div>
          <div class="col-6 text-end">
            <a href="javascript:;" class="btn bg-gradient-success me-1"><i class="fas fa-file-excel"></i>&nbsp;&nbsp;Excel</a>
            <a href="/cashflow/create" class="btn bg-gradient-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Transaction</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">CFID</th>
                <th scope="col">Date</th>
                <th scope="col">Resource</th>
                <th scope="col">Category</th>
                <th scope="col">Sub Category</th>
                <th scope="col">Description</th>
                <th scope="col">Debit</th>
                <th scope="col">Credit</th>
                <th scope="col">Balance</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cashflows as $cashflow)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $cashflow->cfid }}</td>
                <td>{{ $cashflow->updated_at->format('d F Y') }}</td>
                <td class="text-center">{{ $cashflow->resource->name }}</td>
                <td>{{ $cashflow->category->name }}</td>
                <td>{{ $cashflow->subcategory->name }}</td>
                <td>{{ $cashflow->desc }}</td>
                <td>Rp{{ number_format($cashflow->debit,0,",",".") }}</td>
                <td>Rp{{ number_format($cashflow->credit,0,",",".") }}</td>
                <td>Current Balanced</td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="btn bg-gradient-info shadow-sm mx-2"><i class="fas fa-pen"></i></a>
                    <a href="#" class="btn bg-gradient-danger shadow-sm" data-bs-toggle="modal" data-bs-target="#delete-id"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection