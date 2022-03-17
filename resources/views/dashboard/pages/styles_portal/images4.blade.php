<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')
@error('file')

{{! RealRashid\SweetAlert\Facades\Alert::error( $message ) }}

@enderror
@error('description')

{{! RealRashid\SweetAlert\Facades\Alert::error( $message ) }}

@enderror

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Cambio de imagenes</h4>

      <p class="card-description">
        Slider con<code> párrafo</code>
      </p>

      <div class="table-responsive">
    <table style="text-align: center;" class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Pertenece a </th>
          <th scope="col">Imagen</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr class="cosa">
          @foreach ($data as $img)
          @if($img->name == 'longcarousel1')
          <th scope="row">SLIDER 1 </th>
          <td><img style="width: 15em; height: 10em;" src="{{asset('storage/slider')}}/{{$img->file_path}}"></td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">
              Cambiar
            </button></td>
          @endif
          @endforeach
        </tr>
        <tr>
          @foreach ($data as $img)
          @if($img->name == 'longcarousel2')
          <th scope="row">SLIDER 2 </th>
          <td><img style="width: 15em; height: 10em;" src="{{asset('storage/slider/')}}/{{$img->file_path}}"></td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal12">
              Cambiar
            </button></td>
          @endif
          @endforeach
        </tr>
        <tr>
          @foreach ($data as $img)
          @if($img->name == 'longcarousel3')
          <th scope="row">SLIDER 3 </th>
          <td><img style="width: 15em; height: 10em;" src="{{asset('storage/slider/')}}/{{$img->file_path}}"></td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal13">
              Cambiar
            </button></td>
          @endif
          @endforeach
        </tr>

      </tbody>
    </table>
  </div>

    </div>
  </div>
</div>
<br>


@for($i = 11; $i < 14; $i++) <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen</h5>
          <form action="{{ route('upimages')}}" method="post" enctype="multipart/form-data">
            <!-- Add CSRF Token -->
            @csrf
            <div class="form-group">
              <input type="hidden" class="form-control" id="id" name="id" value="{{$i}}">
            </div>
            <div class="form-group">
              <label for="name">Descripcion</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
              <label for="name">Imagen</label>
              <input accept="image/png,image/jpeg,image/webp" type="file" class="form-control" id="file" name="file">
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Cambiar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endfor
  @endsection