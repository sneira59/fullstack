@extends('template.plantilla')
@section('p')
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Cliente</h2></h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a class="breadcrumb-item" href="{{url('cliente')}}">Cliente</a>
                <span class="breadcrumb-item active">Nuevo Cliente</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h2>Registrar nuevo Cliente</h2>
            <br>


            <form action="{{route('cliente.store')}}" method="POST">
                @csrf
                <div class="form-row">
                 <div class="form-group col-md-6">
                        <label for="name"><sup class="obligatorio">*</sup>Nombre Cliente</label>
                        <input type="text" class="form-control" name="name" id="name"
                               placeholder="Nombre" value="{{old('name')}}">
                        <strong class="text-danger">{{$errors->first('name')}}</strong>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido"><sup class="obligatorio">*</sup>Apellido Cliente</label>
                        <input type="text" class="form-control" name="apellido" id="apellido"
                               placeholder="Apellido" value="{{old('apellido')}}">
                        <strong class="text-danger">{{$errors->first('apellido')}}</strong>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono"><sup class="obligatorio">*</sup>Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono"
                               placeholder="telefono" value="{{old('telefono')}}">
                        <strong class="text-danger">{{$errors->first('telefono')}}</strong>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="identificacion"><sup class="obligatorio">*</sup>Identificacion</label>
                        <input type="text" class="form-control" name="identificacion" id="identificacion"
                               placeholder="identificacion" value="{{old('identificacion')}}">
                        <strong class="text-danger">{{$errors->first('identificacion')}}</strong>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha"><sup class="obligatorio">*</sup>Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha" id="fecha"
                               placeholder="Fecha de nacimiento" value="{{old('fecha')}}">
                        <strong class="text-danger">{{$errors->first('fecha')}}</strong>
                    </div>

                </div>

                <br>
                <br>
                <br>


                <input type="submit" style="margin-left: 500px; width: 220px;" class="btn btn-enviar" value="Registrar">
                <br>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>
<!-- Search End-->

<!-- Quick View START -->




@endsection
