@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        
                       
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="row g-gs">
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            
                                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                    <div class="nk-sale-data">
                                                        
                                                    </div>
                                                    <div class="nk-sale-data">
                                                        
                                                    </div>
                                                </div>
                                                <div class="nk-sales-ck sales-revenue">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                               
                            </div><!-- .row -->
                        </div><!-- .col -->
                        
                        <div class="col-xxl-12">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <input type="text">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Company</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Users</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Tickets</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>OFD</span></div>
                                            
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Action</span></div>
                                            
                                        </div>
                                        <div class="nk-tb-item">
                                            
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    
                                                    <div class="user-name">
                                                        <span class="tb-lead">Andalus</span>
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
                                                <span class="badge badge-dot badge-dot-xs badge-success">Active</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li><a href="#">View</a></li>
                                                            <li><a href="#">Invoice</a></li>
                                                            <li><a href="#">Print</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-inner-sm border-top text-center d-sm-none">
                                    <a href="#" class="btn btn-link btn-block">See History</a>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        
                        
                        
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection