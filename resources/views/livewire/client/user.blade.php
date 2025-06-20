<div>
    <span class="preview-title-lg overline-title">New Client</span>
    <div class="row gy-4">
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="default-01" placeholder="User Name" wire:model="name">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">

                    <input type="text" class="form-control" id="default-05" placeholder="User number" wire:model="phone">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="default-01" placeholder="User email" wire:model="email">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="default-01" placeholder="User Password" wire:model="password">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">

                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="default-01" placeholder="Role" wire:model="role">
                </div>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="form-group">

                <div class="form-control-wrap">

                    <button class="btn btn-success w-100 d-flex justify-content-center align-items-center" wire:click="createUser">Create</button>
                </div>
            </div>
        </div>

    </div>
</div>