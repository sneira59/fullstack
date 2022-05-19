@extends('template.plantilla')
@section('p')
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Items</h2></h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a class="breadcrumb-item" href="{{url('items')}}">Items</a>
                <span class="breadcrumb-item active">Nuevo Item</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h2>Registrar nuevo Item</h2>
            <br>


            <form action="{{route('items.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="n"><sup class="obligatorio">*</sup>Nombre del item</label>
                        <input type="text" class="form-control" name="n" id="n"
                               placeholder="Nombre del item" value="{{old('n')}}">
                        <strong class="text-danger">{{$errors->first('n')}}</strong>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vu"><sup class="obligatorio">*</sup>Valor unitario</label>
                        <input type="text" class="form-control" name="vu" id="vu"
                               placeholder="Valor Unitario" value="{{old('vu')}}">
                        <strong class="text-danger">{{$errors->first('vu')}}</strong>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="a"><sup class="obligatorio">*</sup>Cliente Con el item</label>
                        <select id="inputState" class="form-control" name="a">
                            <option selected>Elige</option>
                            @foreach ($c as $ca)
                                <option value="{{$ca->id_cli}}">{{$ca->nombre_cli}}</option>
                                @endforeach
                               </select>
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
