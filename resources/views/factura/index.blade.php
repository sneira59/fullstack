@extends('template.plantilla')
@section('p')
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Factura</h2></h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <span class="breadcrumb-item active">Nueva Factura</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h2>Realizar Nueva Factura</h2>
            <br>


            <form action="{{route('factura.resuelta')}}"  target="_blank" method="POST">
                @csrf
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="a"><sup class="obligatorio">*</sup>Cliente</label>
                            <select id="inputState" class="form-control" name="a">
                                <option selected>Elige</option>
                                @foreach ($c as $ca)
                                    <option value="{{$ca->id}}">{{$ca->nombre}}</option>
                                    @endforeach
                                   </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="e"><sup class="obligatorio">*</sup>Nombre de la Empresa</label>
                        <input type="text" class="form-control" name="e" id="e"
                               placeholder="Empresa" value="{{old('e')}}">
                        <strong class="text-danger">{{$errors->first('e')}}</strong>
                    </div>
                <br>
                <br>
                <br>


                <input type="submit" style="margin-left: 500px; width: 220px;" class="btn btn-enviar" value="Generar Factura">
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
