@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="m-0">Add Categories</h3>
          <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-light">Back</a>
        </div>
        <div class="card-body">
          <form action="{{ url('admin/category/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name">
                  @error('name')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="slug" class="form-control" placeholder="Slug">
                  @error('slug')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                  @error('description')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="file" name="image" class="form-control">
                  @error('image')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="status" name="status">
                    <label class="custom-control-label" for="status">Make Vissible</label>
                    @error('status')
                      <small class="text-danger text-small">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <h4 class="my-4">SEO Section</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                  @error('meta_title')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="meta_keyword" class="form-control" placeholder="Meta Keyword">
                  @error('meta_keyword')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control" placeholder="Meta Description"></textarea>
                  @error('meta_description')
                    <small class="text-danger text-small">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-success btn-md text-light float-end" type="submit">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection