@extends('layouts.app')

@section('title','Clients')

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

                                            <livewire:Client.Create />
                                        </div>
                                    </div>
                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div><!-- .col -->

                        <div class="col-xxl-12">

                            <livewire:Client.Index />

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