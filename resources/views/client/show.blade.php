@extends('layouts.app')

@section('title',"Client")

@section('content')
<div class="nk-content">

    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                            <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-6">
                            <div class="row g-gs">
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Sales Revenue</h6>
                                                    <p>In last 30 days revenue from subscription.</p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="" data-original-title="Revenue from subscription"></em>
                                                </div>
                                            </div>
                                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                    <div class="nk-sale-data">
                                                        <span class="amount">14,299.59 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                        <span class="sub-title">This Month</span>
                                                    </div>
                                                    <div class="nk-sale-data">
                                                        <span class="amount">7,299.59 <span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                        <span class="sub-title">This Week</span>
                                                    </div>
                                                </div>
                                                <div class="nk-sales-ck sales-revenue"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas class="sales-bar-chart chartjs-render-monitor" id="salesRevenue" style="display: block; width: 293px; height: 64px;" width="293" height="64"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Active Subscriptions</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="" data-original-title="Total active subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">9.69K</span>
                                                            <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>since last month</span>
                                                        </div>
                                                        <div class="nk-sales-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                            <canvas class="sales-bar-chart chartjs-render-monitor" id="activeSubscription" style="display: block; width: 154px; height: 56px;" width="154" height="56"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Avg Subscriptions</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="" data-original-title="Daily Avg. subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">346.2</span>
                                                            <span class="sub-title"><span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>2.45%</span>since last week</span>
                                                        </div>
                                                        <div class="nk-sales-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                            <canvas class="sales-bar-chart chartjs-render-monitor" id="totalSubscription" style="display: block; width: 161px; height: 56px;" width="161" height="56"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                        <div class="col-xxl-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group align-start gx-3 mb-3">
                                        <div class="card-title">
                                            <h6 class="title">Sales Overview</h6>
                                            <p>In 30 days sales of product subscription. <a href="#">See Details</a></p>
                                        </div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-primary btn-dim d-none d-sm-inline-flex" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-md-inline">Download</span> Report</span></a>
                                                <a href="#" class="btn btn-icon btn-primary btn-dim d-sm-none" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Download Mini Version</span></a></li>
                                                        <li><a href="#"><span>Download Full Version</span></a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><em class="icon ni ni-opt-alt"></em><span>More Options</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                                        <div class="nk-sale-data">
                                            <span class="amount">$82,944.60</span>
                                        </div>
                                        <div class="nk-sale-data">
                                            <span class="amount sm">1,937 <small>Subscribers</small></span>
                                        </div>
                                    </div>
                                    <div class="nk-sales-ck large pt-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas class="sales-overview-chart chartjs-render-monitor" id="salesOverview" style="display: block; width: 715px; height: 176px;" width="715" height="176"></canvas>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-8">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="mr-2">Transaction</span> <a href="#" class="link d-none d-sm-inline">See History</a></h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="card-tools-nav">
                                                <li><a href="#"><span>Paid</span></a></li>
                                                <li><a href="#"><span>Pending</span></a></li>
                                                <li class="active"><a href="#"><span>All</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Order No.</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                            <div class="nk-tb-col"><span>Amount</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95954</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/11/2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary">SUB-2309232</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-action">
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
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95850</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-sm bg-azure">
                                                        <span>DE</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Desiree Edwards</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/02/2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary">SUB-2309154</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs badge-danger">Canceled</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-action">
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li><a href="#">View</a></li>
                                                            <li><a href="#">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95812</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-sm bg-warning">
                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Blanca Schultz</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">02/01/2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary">SUB-2309143</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-action">
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
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95256</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                        <span>NL</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Naomi Lawrence</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">01/29/2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary">SUB-2305684</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-action">
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
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">#95135</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-sm bg-success">
                                                        <span>CH</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Cassandra Hogan</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">01/29/2020</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary">SUB-2305564</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs badge-warning">Due</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-action">
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li><a href="#">View</a></li>
                                                            <li><a href="#">Invoice</a></li>
                                                            <li><a href="#">Notify</a></li>
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
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Recent Activities</h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="card-tools-nav">
                                                <li><a href="#"><span>Cancel</span></a></li>
                                                <li class="active"><a href="#"><span>All</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nk-activity">
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                        <div class="nk-activity-data">
                                            <div class="label">Keith Jensen requested to Widthdrawl.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Harry Simpson placed a Order.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-azure">SM</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Stephanie Marshall got a huge bonus.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-purple"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                        <div class="nk-activity-data">
                                            <div class="label">Nicholas Carr deposited funds.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-pink">TM</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Timothy Moreno placed a Order.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">New Users</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="html/user-list-regular.html" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim">
                                                <span>SW</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Sharon Walker</span>
                                                <span class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim">
                                                <span>GO</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Gloria Oliver</span>
                                                <span class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim">
                                                <span>PS</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Phillip Sullivan</span>
                                                <span class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Support Requests</h6>
                                        </div>
                                        <div class="card-tools">
                                            <a href="#" class="link">All Tickets</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nk-support">
                                    <li class="nk-support-item">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                        </div>
                                        <div class="nk-support-content">
                                            <div class="title">
                                                <span>Vincent Lopez</span><span class="badge badge-dot badge-dot-xs badge-warning ml-1">Pending</span>
                                            </div>
                                            <p>Thanks for contact us with your issues...</p>
                                            <span class="time">6 min ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-support-item">
                                        <div class="user-avatar bg-purple-dim">
                                            <span>DM</span>
                                        </div>
                                        <div class="nk-support-content">
                                            <div class="title">
                                                <span>Daniel Moore</span><span class="badge badge-dot badge-dot-xs badge-info ml-1">Open</span>
                                            </div>
                                            <p>Thanks for contact us with your issues...</p>
                                            <span class="time">2 Hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-support-item">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                        </div>
                                        <div class="nk-support-content">
                                            <div class="title">
                                                <span>Larry Henry</span><span class="badge badge-dot badge-dot-xs badge-success ml-1">Solved</span>
                                            </div>
                                            <p>Thanks for contact us with your issues...</p>
                                            <span class="time">3 Hours ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Notifications</h6>
                                        </div>
                                        <div class="card-tools">
                                            <a href="#" class="link">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="timeline">
                                        <h6 class="timeline-head">November, 2019</h6>
                                        <ul class="timeline-list">
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-primary is-outline"></div>
                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                    <div class="timeline-des">
                                                        <p>Re-submitted KYC Application form.</p>
                                                        <span class="time">09:30am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-primary"></div>
                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                    <div class="timeline-des">
                                                        <p>Re-submitted KYC Application form.</p>
                                                        <span class="time">09:30am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-status bg-pink"></div>
                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                <div class="timeline-data">
                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                    <div class="timeline-des">
                                                        <p>Re-submitted KYC Application form.</p>
                                                        <span class="time">09:30am</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        
                                                        <div class="card-inner p-0">
                                                            <ul class="link-list-menu">
                                                            <li><a class="active" href="{{route('crm.client.show',['client'=>$client->id])}}"><em class="icon ni ni-dashboard"></em><span>Dashboard</span></a></li>
                                                                   
                                                            <li><a  href="{{route('crm.client.users',['client'=>$client->id])}}"><em class="icon ni ni-user-fill-c"></em><span>Users</span></a></li>
                                                                <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                                <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                                <li><a href="html/user-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-shield-star-fill"></em><span>Password Change</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li>
                                                            </ul>
                                                        </div><!-- .card-inner -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 556px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection