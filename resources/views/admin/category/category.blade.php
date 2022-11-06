@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="m-0">All Categories</h3>
          <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-light">New Category</a>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
            </thead>
            <tbody>
              <tr>
                <td>Phone</td>
                <td>phone</td>
                <td>This is a description for phone category</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection