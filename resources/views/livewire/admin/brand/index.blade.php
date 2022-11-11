
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="m-0">All Brands</h3>
          <a href="#" class="btn btn-primary btn-sm text-light" data-bs-toggle="modal" data-bs-target="#brandModal">Add Brand</a>
        </div>
        <div class="card-body">
          @if (session('message'))
              <div class="alert alert-success text-small">{{ session('message') }}</div>
          @endif
          <table class="table table-hover table-bordered">
            <thead>
              <th>Name</th>
              <th>Slug</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->slug }}</td>
                        <td>{{ $brand->status == 1 ? 'vissible' : 'hidden' }}</td>
                        <td>
                            <a href="#" wire:click="editBrand({{ $brand->id }})" class="btn btn-primary text-light btn-sm" data-bs-toggle="modal" data-bs-target="#UpdateBrandModal"><span class="material-icons material-icons-outlined" style="font-size: 16px">edit</span></a>
                            <a href="#" wire:click="deleteBrandId({{ $brand->id }})" class="btn btn-danger text-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteBrandModal"><span class="material-icons material-icons-outlined" style="font-size: 16px">delete</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          @include('livewire.admin.brand.form-modal')
          <div class="mt-3">
            {{ $brands->links() }}
          </div>
        </div>
      </div>
    </div>
</div>


@push('script')
    <script>
      window.addEventListener('close-modal', event=>{
        $('#brandModal').modal('hide'); 
        $('#UpdateBrandModal').modal('hide'); 
        $('#deleteBrandModal').modal('hide'); 
      });
    </script>
@endpush