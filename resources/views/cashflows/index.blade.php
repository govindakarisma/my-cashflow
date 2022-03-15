@extends('layouts.main')

@section('content')
@include('components.cardheader')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Cash Flow 2022</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
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
              <tr>
                <th scope="row">1</th>
                <td>30 December 2021</td>
                <td class="text-center">BRK</td>
                <td>Balanced</td>
                <td>None</td>
                <td>First Sallary</td>
                <td>Rp9.472.000</td>
                <td>0</td>
                <td>Rp9.472.000</td>
                <td>
                  <div class="d-flex">
                    <a href="#" class="btn btn-info shadow-sm mx-2"><i class="fas fa-pen"></i></a>
                    <a href="#" class="btn btn-danger shadow-sm" data-bs-toggle="modal" data-bs-target="#delete-id"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection