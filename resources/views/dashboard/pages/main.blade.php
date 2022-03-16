<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')
<div class="row">
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
                <p class="statistics-title">Page Views</p>
                <h3 class="rate-percentage">7,682</h3>
                <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
            </div>

            <div>
                <p class="statistics-title">New Sessions</p>
                <h3 class="rate-percentage">68.8</h3>
                <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
            </div>

        </div>
    </div>
</div>
@endsection