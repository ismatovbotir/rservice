<div class="card card-bordered card-full">
    <div class="card-inner">
        <div class="card-title-group">
            <div class="card-title">
                <input type="text" wire:model.live="client" type="text" class="form-control" id="default-05" placeholder="Client" wire:model="phone">
            </div>

        </div>
    </div>
    <div class="card-inner p-0 border-top">
        <div class="nk-tb-list nk-tb-clients">
            <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col"><span>Name</span></div>
                <div class="nk-tb-col"><span>Phone</span></div>
                <div class="nk-tb-col tb-col-sm"><span>email</span></div>
                <div class="nk-tb-col tb-col-md"><span>Role</span></div>
                <div class="nk-tb-col tb-col-lg"><span>Password</span></div>
                
                <div class="nk-tb-col"><span class="d-none d-sm-inline">Action</span></div>

            </div>

            @foreach($users as $user)
            <div class="nk-tb-item">
                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{$user->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{$user->phone}}</span>
                        </div>
                    </div>
                </div>

                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{$user->role}}</span>
                        </div>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">1</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                    <span class="tb-sub text-primary">10</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub tb-amount">123</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub tb-amount">5</span>
                </div>

                <div class="nk-tb-col">
                    <span class="badge badge-dot badge-dot-xs badge-success">Active</span>
                </div>
                <div class="nk-tb-col">
                    <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                            <ul class="link-list-plain">
                                <li><a href="">View</a></li>
                                <li><a href="#">Invoice</a></li>
                                <li><a href="#">Print</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div><!-- .card -->