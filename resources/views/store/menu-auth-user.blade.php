@extends('store.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user"></i> MIS DATOS</h1>
        </div>
        
        <h2>Bienvenido(a) {{ Auth::user()->name }} {{ Auth::user()->last_name }} a su Panel de Control.</h2><hr>
        
        <div class="row">
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="{{ route('order-detail-user', Auth::user()->id) }}" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
                </div>
            </div> 
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-user  icon-home"></i>
                    <a href="{{ route('user-detail-update', Auth::user()->id) }}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>
            </div>
                    
        </div>
        
    </div>
    </div>

@stop