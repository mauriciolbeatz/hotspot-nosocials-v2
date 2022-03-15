<!-- TEMPLATE MASTER -->
@extends('dashboard.app') 

@section('content')

@error('file')
    
    {{! RealRashid\SweetAlert\Facades\Alert::error( $message ) }}
    
@enderror

<h1>Cambio de imagenes</h1>
<br>
<div class="container w-75" > 
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
    @if($img->name == 'introcarousel1')
      <th scope="row">SLIDER 1 </th>
      <td><img style="width: 15em; height: 10em;"  src="{{asset('storage/slider')}}/{{$img->file_path}}" ></td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Cambiar
</button></td>
    @endif
  @endforeach
    </tr>
    <tr>
    @foreach ($data as $img)
    @if($img->name == 'introcarousel2')
      <th scope="row">SLIDER 2 </th>
      <td><img style="width: 15em; height: 10em;"   src="{{asset('storage/slider/')}}/{{$img->file_path}}"  ></td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Cambiar
</button></td>
    @endif
  @endforeach
    </tr>
    <tr>
    @foreach ($data as $img)
    @if($img->name == 'introcarousel3')
      <th scope="row">SLIDER 3 </th>
      <td><img  style="width: 15em; height: 10em;" src="{{asset('storage/slider/')}}/{{$img->file_path}}"  ></td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
  Cambiar
</button></td>
    @endif
  @endforeach
    </tr>
  </tbody>
</table>
</div>
</div>

@for($i = 1; $i < 4; $i++)
<!-- Modal -->
<div  class="modal fade" id="exampleModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen</h5>
        <form action="{{ route('upimages')}}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
        <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id"  value="{{$i}}">
        <input type="hidden" class="form-control" id="name" name="name"  value="introcarousel{{$i}}">
        </div>
        <div class="form-group">
    <label for="name">Imagen</label>
    <input accept="image/png,image/jpeg,image/webp" type="file" class="form-control" id="file" name="file" >
        </div>
        <br>
    <button class="btn btn-primary"type="submit">Cambiar</button>
        </form>
    </div>
  </div>
</div>
</div>
@endfor
@endsection