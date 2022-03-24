@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Add New Category</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/category" class="btn bg-gradient-warning"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <form action="/category" method="post">
          @csrf
          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Resource Name" value="{{ old('name') }}" onkeyup="createSlug()" autofocus>
                <label for="name">Resource Name</label>
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

          <div class="form-floating">
            <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Description" value="{{ old('desc') }}">
            <label for="desc">Description</label>
            @error('desc')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <button type="submit" class="btn bg-gradient-success mt-3 float-end">Add Data</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection

@push('script-bottom-start')
<script src="/my-assets/js/slug-generate.js"></script>
@endpush