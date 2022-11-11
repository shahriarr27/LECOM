<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="m-0">All Categories</h3>
          <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-light">Add Category</a>
        </div>
        <div class="card-body">
          @if (session('message'))
              <div class="alert alert-success text-small">{{ session('message') }}</div>
          @endif
          <table class="table table-hover table-bordered">
            <thead>
              <th>Name</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status == 1 ? 'Vissible' : 'Hidden' }}</td>
                        <td>
                            <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-primary text-light btn-sm"><span class="material-icons material-icons-outlined" style="font-size: 16px">edit</span></a>
                            <a role="button" wire:click="deleteCategory({{ $category->id }})" class="btn btn-danger text-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><span class="material-icons material-icons-outlined" style="font-size: 16px">delete</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div class="mt-3">
            {{ $categories->links() }}
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Are you sure to delete this category?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-dismiss="modal">Close</button>
            <form wire:submit.prevent="destroyCategory">
                <button type="submit" class="btn btn-danger btn-sm text-white" data-bs-dismiss="modal">Yes</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>