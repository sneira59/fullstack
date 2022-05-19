@extends('template.plantilla')
@section('p')
@include('sweetalert::alert')



                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Clientes</h2>
                        <div class="header-sub-title">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @php
                            $suma=0;
                        @endphp
                            <h4>Clientes</h4>
                            <a href="{{url('cliente/create')}}"><button class="btn btn-primary">Nuevo Cliente</button></a>
                            <div class="m-t-25">



                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Telefono</th>
                                            <th>Identificacion</th>
                                            <th>Fecha de Nacimiento</th>





                                        </tr>
                                    </thead>
                                    <tbody>








                                        @foreach ($cliente as $c)


                                        <tr>

                                            <td>{{$c->nombre_cli}}</td>


                                            <td>{{$c->apellido}}</td>

                                            <td>{{$c->telefono}}</td>

                                            <td>{{$c->identificacion}}</td>

                                            <td>{{$c->fechan}}</td>

                                           <td> <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                <a href="{{url('fx/'.$c->id_cli)}}"><i class="anticon anticon-edit"></i></a>
                                            </button></td>



                                        </tr>
                                        @endforeach





                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Telefono</th>
                                            <th>Identificacion</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Factura</th>



                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <div class="">
                                <pre><code class=""></code></pre>
                            </div>
                            <div class="">
                                <pre><code class=""><script type="text/plain"><table id="data-table" class="table">
  </script></code></pre>
                            </div>
                            <div class="code-example">
                                <pre><code class=""><script type="text/plain">$('#data-table').DataTable();</script></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
