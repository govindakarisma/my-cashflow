@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h5>Edit Transaction</h5>
          </div>
          <div class="col-6 text-end">
            <a href="/cashflow" class="btn bg-gradient-warning"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <form action="/cashflow/{{$cashflow->slug}}" method="post">
          @method('put')
          @csrf
          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="cfid" class="form-control @error('cfid') is-invalid @enderror" id="cfid" placeholder="CFID" value="{{ old('cfid', $cashflow->cfid) }}" autofocus>
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
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" value="{{ old('slug', $cashflow->slug) }}">
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
                @if( old('resource_id', $cashflow->resource_id) == $resource->id )
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
              <small class="fw-normal"><a href="/resource/create" class="text-success"><i class="fas fa-money-bill-wave-alt"></i> Create new resource</a></small>
            </div>
            <div class="col-md-4">
              <select class="form-select @error('resource_id') is-invalid @enderror" name="category_id" id="category_id">
                <option>Category</option>
                @foreach($categories as $category)
                @if( old('category_id', $cashflow->category_id) == $category->id )
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
              <small class="fw-normal"><a href="/category/create" class="text-primary"><i class="fas fa-list"></i> Create new category</a></small>
            </div>
            <div class="col-md-4">
              <select class="form-select @error('subcategory_id') is-invalid @enderror" name="subcategory_id" id="subcategory_id">
                <option>Subcategory</option>
                @foreach($subcategories as $subcategory)
                @if( old('subcategory_id', $cashflow->subcategory_id) == $subcategory->id )
                <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                @else
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endif
                @endforeach
              </select>
              <small class="fw-normal"><a href="/subcategory/create" class="text-info"><i class="fas fa-list-ul"></i> Create new subcategory</a></small>
            </div>
          </div>

          <div class="row g-4 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Description" value="{{ old('desc', $cashflow->desc) }}">
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
                <input type="date" name="action_at" class="form-control @error('action_at') is-invalid @enderror" id="action_at" placeholder="Created at" value="{{ old('action_at', $cashflow->action_at) }}">
                <label for="action_at">Created at</label>
                @error('action_at')
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
                <input type="number" name="debit" class="form-control @error('debit') is-invalid @enderror" id="debit" placeholder="Debit" value="{{ old('debit', $cashflow->debit) }}">
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
                <input type="number" name="credit" class="form-control @error('credit') is-invalid @enderror" id="credit" placeholder="Credit" value="{{ old('credit', $cashflow->credit) }}">
                <label for="credit">Credit</label>
                @error('credit')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <button type="submit" class="btn bg-gradient-success mt-3 float-end">Edit Data</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection