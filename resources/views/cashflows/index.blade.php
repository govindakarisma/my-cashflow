@extends('layouts.main')

@section('content')
@include('sweetalert::alert')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Credit</p>
              <h5 class="font-weight-bolder">
                Rp{{ number_format($sumCredit,0,",",".") }}
              </h5>
              <p class="mb-0">
                On
                <span class="text-success text-sm font-weight-bolder">{{date('F Y')}}</span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Debit</p>
              <h5 class="font-weight-bolder">
                Rp{{ number_format($sumDebit,0,",",".") }}
              </h5>
              <p class="mb-0">
                On
                <span class="text-success text-sm font-weight-bolder">{{date('F Y')}}</span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">My Balance</p>
              <h5 class="font-weight-bolder">
                Rp{{ number_format($sumBalance,0,",",".") }}
              </h5>
              <p class="mb-0">
                Today
                <span class="text-success text-sm font-weight-bolder">{{date('d F Y')}}</span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Another Income</p>
              <h5 class="font-weight-bolder">
                Rp0
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">2022</span>
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Cash Flow {{date('Y')}}</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/exportCashflowExcel" class="btn bg-gradient-success me-1"><i class="fas fa-file-excel"></i>&nbsp;&nbsp;Excel</a>
            <a class="btn bg-gradient-primary me-1" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-file-import"></i>&nbsp;&nbsp;Import</a>
            <a href="/cashflow/create" class="btn bg-gradient-info"><i class="fas fa-plus"></i>&nbsp;&nbsp;Transaction</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover" id="theTable">
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
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cashflows as $cashflow)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $cashflow->cfid }}</td>
                <td>{{ date('d F Y', strtotime($cashflow->action_at)) }}</td>
                <td class="text-center">{{ $cashflow->resource->name }}</td>
                <td>{{ $cashflow->category->name }}</td>
                <td>{{ $cashflow->subcategory->name }}</td>
                <td>{{ $cashflow->desc }}</td>
                <td>Rp{{ number_format($cashflow->debit,0,",",".") }}</td>
                <td>Rp{{ number_format($cashflow->credit,0,",",".") }}</td>
                <td>
                  <div class="d-flex">
                    <a href="/cashflow/{{$cashflow->slug}}/edit" class="btn bg-gradient-success mx-2"><i class="fas fa-pen"></i></a>
                    <a class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$cashflow->slug}}"><i class="fas fa-trash"></i></a>
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

@section('delete-modal')
@foreach($cashflows as $cashflow)
<div class="modal fade" id="delete-{{ $cashflow->slug }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Yakin ingin menghapus data transaksi {{ $cashflow->cfid }} - {{ $cashflow->desc }}?</span>
        <div class="alert alert-warning text-white mt-3">
          <i class="bi bi-exclamation-triangle"></i> Data akan dihapus dan tidak dapat dikembalikan
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="/cashflow/{{ $cashflow->slug }}" method="POST">
          @method('delete')
          @csrf
          <button class="btn bg-gradient-danger border-0">
            <span>Ya, Hapus</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@section('import-modal')
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importModalLabel">Import Excel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning text-center text-white">
          <i class="bi bi-exclamation-triangle"></i> Pastikan format excel sesuai template! <a href="/excelTemplate" class="fw-normal"></i> Unduh Template</a>
        </div>
        <form action="/importCashflowExcel" method="POST" enctype="multipart/form-data">
          @csrf
          <input class="form-control" type="file" name="cashflows" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn bg-gradient-info">Import</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script-bottom-start')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#theTable').DataTable();
  });
</script>
@endpush