<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')

@error('logo')
    {{! RealRashid\SweetAlert\Facades\Alert::warning( $message ) }}
@enderror

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CARGAR LOGO</h4>

                <form action="{{ route('addlogo') }}" method="post" enctype="multipart/form-data">
                    <!-- Add CSRF Token -->
                    @csrf
                    <div class="form-group">
                        <label>Subir logo</label>
                        <input accept="image/png,image/jpeg" type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
                        @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">VISTA PREVIA</h4>

                <br>
                @foreach ($logo as $logos)
                    @if($logos->name == 'logo')
                    <div class="text-center">
                        <img src="{{asset('storage/logo')}}/{{$logos->file_path}}" class="rounded" alt="logo" width="150" height="150">
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection