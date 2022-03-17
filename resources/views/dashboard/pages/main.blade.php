<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dashboard</h4>

                <p class="card-description">
                    Información general
                </p>

                <div class="card-group">
                    <div class="card">
                        <p style="text-align: center; margin-top:10px;">
                            <img src="{{asset('dashboard/images/admin.png')}}" class="img-fluid" alt="img" width="100" height="100">
                        </p>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                            {{ count($user )  }} <br> Administradores
                            </h5>
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary btn-sm " href="{{ route('showadmin') }}">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <p style="text-align: center; margin-top:10px;">
                            <img src="{{asset('dashboard/images/customer.png')}}" class="img-fluid" alt="img" width="100" height="100">
                        </p>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                            {{ count($customer )  }}
                                <br> Clientes
                            </h5>
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary btn-sm " href="#">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <p style="text-align: center; margin-top:10px;">
                            <img src="{{asset('dashboard/images/wife.png')}}" class="img-fluid" alt="img" width="100" height="100">
                        </p>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                {{ count($usermk )  }} <br> Usuario activos en HOTSPOT
                            </h5>
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary btn-sm " href="{{ route('customersMk') }}">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection