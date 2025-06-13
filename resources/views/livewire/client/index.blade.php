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
                <div class="nk-tb-col"><span>Client</span></div>
                <div class="nk-tb-col"><span>Phone</span></div>
                <div class="nk-tb-col tb-col-sm"><span>Companies</span></div>
                <div class="nk-tb-col tb-col-md"><span>Users</span></div>
                <div class="nk-tb-col tb-col-lg"><span>Locations</span></div>
                <div class="nk-tb-col tb-col-lg"><span>Tickets</span></div>
                <div class="nk-tb-col tb-col-lg"><span>OFD</span></div>

                <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                <div class="nk-tb-col"><span class="d-none d-sm-inline">Action</span></div>

            </div>

            @foreach($clients as $client)
            <div class="nk-tb-item">
                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{$client->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{$client->phone}}</span>
                        </div>
                    </div>
                </div>

                <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">

                        <div class="user-name">
                            <span class="tb-lead">{{count($client->companies)}}</span>
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
                                <li><a href="{{route('crm.client.show',['client'=>$client->id])}}">View</a></li>
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