<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')
<div class="row container w-50">
    <div class="col-sm-12">
        <div class="statistics-details d-flex align-items-center justify-content-between">

            <div>
                <button type="button" class="btn btn-primary btn-lg btn-block">
                    <b><i class="ti-user"></i>
                    @foreach($user as $count_admins)
                    {{ $count_admins->count() }}
                    @endforeach 
                    Usuario
                    </b>
                </button>
            </div>

            <div>
                <a href="{{ route('customersMk') }}" type="button" class="btn btn-primary btn-lg btn-block">
                    <b><i class="ti-user"> </i>
                    @foreach($usermk as $users)
                    
                    @endforeach 
                    {{ count($usermk )  }}
                    Usuarios Activos en HOTSPOT
                    </b>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection