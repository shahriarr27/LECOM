@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="m-0">Add Categories</h3>
          <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm text-light">Back</a>
        </div>
        <div class="card-body">
          <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="slug" class="form-control" placeholder="Slug">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="file" name="image" class="form-control" placeholder="Insert image">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="status">
                    <label class="custom-control-label" for="status">Make Vissible</label>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="my-4">SEO Section</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="meta_keyword" class="form-control" placeholder="Meta Keyword">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="description" id="meta_description" cols="30" rows="10" class="form-control" placeholder="Meta Description"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-success btn-md text-light" type="submit">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection