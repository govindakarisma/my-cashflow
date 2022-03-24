@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Add New Subcategory</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/subcategory" class="btn bg-gradient-warning"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <form action="/subcategory" method="post">
          @csrf
          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Subcategory Name" value="{{ old('name') }}" onkeyup="createSlug()" autofocus>
                <label for="name">Subcategory Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" value="{{ old('slug') }}">
                <label for="slug">Slug</label>
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <button type="submit" class="btn bg-gradient-success mt-3 float-end">Add Subcategory</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection

@push('script-bottom-start')
<script src="/my-assets/js/slug-generate.js"></script>
@endpush