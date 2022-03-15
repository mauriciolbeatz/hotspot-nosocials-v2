<!-- TEMPLATE MASTER -->
@extends('dashboard.app') 

@section('content')
 <h1>Estilo Base</h1>
<br>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <form method="POST" action="{{ route('style')}}">
                    @csrf
                   

                    <div class="form-group row">
                        <label for="navbarColor" class="col-md-4 col-form-label text-md-right">
                            <strong>Color de Menu</strong>
                        </label>
                        <div class="col-md-6">
                        @foreach($data as $colores)
                        @if($colores->name == "navbarColor")
                                <input id="navbarColor" value="{{$colores->color}}" type="color" class="col-md-12" name="navbarColor" style="margin-top:10px; border-radius:5px;" value="{{--$style->backgroundColor--}}" onchange="changeColorNav(this)" required autofocus>
                         @endif
                         @endforeach
                            </div>
                    </div>


                    <div class="form-group row">
                        <label for="bodyColor" class="col-md-4 col-form-label text-md-right">
                            <strong>Color de Fondo</strong>
                        </label>
                        <div class="col-md-6">
                        @foreach($data as $colores)
                        @if($colores->name == "bodyColor")
                            <input id="bodyColor" value="{{$colores->color}}" type="color" class="col-md-12" name="bodyColor" style="margin-top:10px; border-radius:5px;" value="{{--$style->backgroundColor--}}" onchange="changeColorBody(this)" required autofocus>
                            @endif
                         @endforeach
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="footerColor" class="col-md-4 col-form-label text-md-right">
                            <strong>Color Pie de pagina</strong>
                        </label>
                        <div class="col-md-6">
                        @foreach($data as $colores)
                        @if($colores->name == "footerColor")
                            <input id="footerColor" value="{{$colores->color}}" type="color" class="col-md-12" name="footerColor" style="margin-top:10px; border-radius:5px;" value="{{--$style->backgroundColor--}}" onchange="changeColorFooter(this)" required autofocus>
                            @endif
                         @endforeach
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-dark btn-block">
                                    Aplicar
                    </button>

                </form>    
            </div>
        </div>
    </div>


<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Vista previa</h4>
            <div class="col-md-12">
                <div class="card text-center">
                    
                    <div id="navColor-preview" class="card-header">
                        <h6 class="card-title">Menu</h6>
                    </div>
                    <div id="body-preview" class="card-body">
                        <h6 class="card-title">Fondo</h6>
                        <div id="category-preview" >
                            <br><br><br><br>
                        </div>
                    </div>
                    <div id="footerColor-preview" class="card-footer">
                        <h6 id="textFoot-preview"><strong>Pie de Pagina</strong></h6>
                    </div>
                </div>
            </div>               
        </div> 
    </div>
</div>


<script type="text/javascript">
 
         
    function changeColorNav(color){
        console.log(color.value);
        nav =  $('#navbarColor').val();
        $('#navColor-preview').css('background',nav);
    }

    function changeColorBody(color){
        body = $('#bodyColor').val();
        $('#body-preview').css('background',body);
        footer = $('#footerColor').val();
       
       
    }

    function changeColorFooter(color){
        footer = $('#footerColor').val();
        $('#footerColor-preview').css('background',footer);
    }
   
    
</script>
@endsection