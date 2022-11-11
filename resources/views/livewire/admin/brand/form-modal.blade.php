<!-- Modal -->
<div wire:ignore.self class="modal fade" id="brandModal" tabindex="-1" aria-labelledby="brandModalTitle"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brandModalTitle">Add Brand</h5>
                <button wire:click="closeModal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="storeBrand">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" wire:model.defer="name" class="form-control" placeholder="Name">
                                @error('name')
                                    <small class="text-danger text-small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" wire:model.defer="slug" class="form-control" placeholder="Slug">
                                @error('slug')
                                    <small class="text-danger text-small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="status"
                                        wire:model.defer="status">
                                    <label class="custom-control-label" for="status">Make
                                        Vissible</label>
                                    @error('status')
                                        <small class="text-danger text-small">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="closeModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success text-white">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Update Brand Modal -->
<div wire:ignore.self class="modal fade" id="UpdateBrandModal" tabindex="-1" aria-labelledby="UpdateBrandModalTitle"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UpdateBrandModalTitle">Update Brand</h5>
                <button wire:click="closeModal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateBrand">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" wire:model.defer="name" class="form-control" placeholder="Name">
                                @error('name')
                                    <small class="text-danger text-small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" wire:model.defer="slug" class="form-control" placeholder="Slug">
                                @error('slug')
                                    <small class="text-danger text-small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="status"
                                        wire:model.defer="status">
                                    <label class="custom-control-label" for="status">Make
                                        Vissible</label>
                                    @error('status')
                                        <small class="text-danger text-small">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="closeModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success text-white">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <!--Delete Brand Modal -->
    <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="deleteBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteBrandModalLabel">Delete Brand</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Are you sure to delete this brand?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-dismiss="modal">Close</button>
            <form wire:submit.prevent="deleteBrand">
                <button type="submit" class="btn btn-danger btn-sm text-white" data-bs-dismiss="modal">Yes</button>
            </form>
            </div>
        </div>
        </div>
    </div>