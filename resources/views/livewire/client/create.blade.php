<div class="preview-block">
    <span class="preview-title-lg overline-title">New Client</span>
    <div class="row gy-4">
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="default-01" placeholder="Client Name" wire:model="name">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">

                    <input type="text" class="form-control" id="default-05" placeholder="Phone number" wire:model="phone">
                </div>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="form-group">

                <div class="form-control-wrap">

                    <button class="btn btn-success w-100 d-flex justify-content-center align-items-center" wire:click="createClient">Create</button>
                </div>
            </div>
        </div>

    </div>

</div>
