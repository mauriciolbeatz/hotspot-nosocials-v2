<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Usuarios Activos HOTSPOT</h4>
                  <div class="table-responsive ">
                <table id="datatable" class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USERNAME</th>
      <th scope="col">UPTIME</th>
      <th scope="col">CONSUMO CARGA</th>
      <th scope="col">CONSUMO DESCARGA</th>
    </tr>
  </thead>
  <tbody>
  <input type="hidden" name="" value="{{$i = 1}}" >  
  
  @foreach($usermk as $users)
    <tr>
      <td scope="row">{{$i++}}</td>
      <td class="py-1">{{ $users['user'] }}</td>
      <td>{{ $users['uptime'] }}</td>
      <td>{{ ($users['bytes-in']/ 100)*1  }} MB</td>
      <td>{{ ($users['bytes-out']/ 10000)*1 }} MB</td>
    </tr>
@endforeach 
  </tbody>
</table>           
    </div>
                  
                </div>
              </div>
            </div>
            </div>

@endsection