@extends('layouts.user')
@section('content')
<br>
<!-- GALLERY START -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/monyet.png" style="height:200px">

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/gajah2.png" style="height:200px">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/singa2.png" style="height:200px">  
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/kurakura.png" style="height:200px">

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/kudanil.png" style="height:200px">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/fauna.jpg" style="height:200px">
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/rusa.png" style="height:200px">

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/kucinganjing.jpg" style="height:200px">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/tapir.jpg" style="height:200px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-control-prev bg-transparent">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                        <div class="carousel-control-next bg-transparent">
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- GALLERY END -->

<div class="container">
<div class="row g-0">
    @foreach ($gallery as $data)
    <div class="col-md-3 container">
        <img class="w-100" src="{{ $data->image() }}" style="height:220px"><br><br>
    </div>
    @endforeach
</div>
</div>
@endsection