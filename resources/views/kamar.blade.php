@extends('layouts.tamu',['title'=>'Kamar'])

@section('content')
    <x-form-pesan/>
    <h1 class="text-center my-4">Kamar</h1>

<div class="row kamar">
    <div class="col-md-4">
        <a class="card card-light" href="#">
            <div class="card-header">
                Standart Room
            </div>
            <div class="card-body p-1">
                <img src="images/kamar_standar.jpg" class="img-fluid rounded" />
            </div>
            <div class="card-footer">
                Rp. 300.000
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="card card-light" href="#">
            <div class="card-header">
                Suite Room
            </div>
            <div class="card-body p-1">
                <img src="images/kamar_suite.jpg" class="img-fluid rounded" />
            </div>
            <div class="card-footer">
                Rp. 400.000
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="card card-light" href="#">
            <div class="card-header">
                Deluxe Room
            </div>
            <div class="card-body p-1">
                <img src="images/kamar_deluxe.jpg" class="img-fluid rounded" />
            </div>
            <div class="card-footer">
                Rp. 700.000
            </div>
        </a>
    </div>
</div>
@endsection