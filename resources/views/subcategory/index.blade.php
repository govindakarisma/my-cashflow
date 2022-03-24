@extends('layouts.main')

@section('content')
@include('sweetalert::alert')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>{{ $page }}</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/subcategory/create" class="btn bg-gradient-info"><i class="fas fa-plus"></i>&nbsp;&nbsp;Subcategory</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover" id="theTable">
            <thead>
              <tr>
                <th scope="col" width="50">No</th>
                <th scope="col">Name</th>
                <th scope="col" width="100">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subcategories as $subcategory)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $subcategory->name }}</td>
                <td>
                  <div class="d-flex">
                    <a href="/subcategory/{{$subcategory->slug}}/edit" class="btn bg-gradient-success mx-2"><i class="fas fa-pen"></i></a>
                    <a class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$subcategory->slug}}"><i class="fas fa-trash"></i></a>
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
@foreach($subcategories as $subcategory)
<div class="modal fade" id="delete-{{ $subcategory->slug }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Are you sure to delete data Subcategory <b>{{ $subcategory->name }}</b>?</span>
        <div class="alert alert-warning text-white mt-3">
          <i class="bi bi-exclamation-triangle"></i> Data will be deleted and can't be restored!
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="/subcategory/{{ $subcategory->slug }}" method="POST">
          @method('delete')
          @csrf
          <button class="btn bg-gradient-danger border-0">
            <span>Yes, Sure</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@push('script-bottom-start')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#theTable').DataTable();
  });
</script>
@endpush