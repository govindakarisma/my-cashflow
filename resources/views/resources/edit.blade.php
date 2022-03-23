@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Edit Resource</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/resource" class="btn bg-gradient-warning"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <form action="/resource/{{$resource->slug}}" method="post">
          @method('put')
          @csrf
          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Reource Name" value="{{ old('name', $resource->name) }}" autofocus>
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
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" value="{{ old('slug', $resource->slug) }}">
                <label for="slug">Slug</label>
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <button type="submit" class="btn bg-gradient-primary mt-3 float-end">Add Data</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection