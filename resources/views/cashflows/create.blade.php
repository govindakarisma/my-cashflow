@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Add New Transaction</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/cashflow" class="btn bg-gradient-warning"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <form action="/cashflow" method="post">
          @csrf
          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="cfid" class="form-control @error('cfid') is-invalid @enderror" id="cfid" placeholder="CFID" value="{{ old('cfid') }}" autofocus>
                <label for="cfid">CFID</label>
                @error('cfid')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" value="{{ old('slug') }}">
                <label for="slug">Slug</label>
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row g-4 mb-3">
            <div class="col-md-4">
              <select class="form-select @error('resource_id') is-invalid @enderror" name="resource_id" id="resource_id">
                <option>Money Resource</option>
                @foreach( $resources as $resource )
                @if( old('resource_id') == $resource->id )
                <option value="{{ $resource->id }}" selected>{{ $resource->name }}</option>
                @else
                <option value="{{ $resource->id }}">{{ $resource->name }}</option>
                @endif
                @endforeach
              </select>
              @error('resource_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              <small class="fw-normal"><a href="/resources/create" class="text-success"><i class="fas fa-money-bill-wave-alt"></i> Create new resource</a></small>
            </div>
            <div class="col-md-4">
              <select class="form-select @error('resource_id') is-invalid @enderror" name="category_id" id="category_id">
                <option>Category</option>
                @foreach($categories as $category)
                @if( old('category_id') == $category->id )
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
              @error('category_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              <small class="fw-normal"><a href="/categories/create" class="text-primary"><i class="fas fa-list"></i> Create new category</a></small>
            </div>
            <div class="col-md-4">
              <select class="form-select" name="subcategory_id" id="subcategory_id">
                <option>Subcategory</option>
                @foreach($subcategories as $subcategory)
                @if( old('subcategory_id') == $subcategory->id )
                <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                @else
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endif
                @endforeach
              </select>
              <small class="fw-normal"><a href="/subcategories/create" class="text-info"><i class="fas fa-list-ul"></i> Create new subcategory</a></small>
            </div>
          </div>

          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Description" value="{{ old('desc') }}">
                <label for="desc">Description</label>
                @error('desc')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="date" name="made_on" class="form-control @error('made_on') is-invalid @enderror" id="made_on" placeholder="Created at" value="{{ old('made_on') }}">
                <label for="made_on">Created at</label>
                @error('made_on')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" name="debit" class="form-control @error('debit') is-invalid @enderror" id="debit" placeholder="Debit" value="{{ old('debit') }}">
                <label for="debit">Debit</label>
                @error('debit')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" name="credit" class="form-control @error('credit') is-invalid @enderror" id="credit" placeholder="Credit" value="{{ old('credit') }}">
                <label for="credit">Credit</label>
                @error('credit')
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