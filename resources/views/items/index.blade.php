@extends('template.plantilla')
@section('p')
@include('sweetalert::alert')



                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Items</h2>
                        <div class="header-sub-title">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <h4>Items</h4>
                            <a href="{{url('items/create')}}"><button class="btn btn-primary">Nuevo Item</button></a>
                            <div class="m-t-25">



                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Valor unitario</th>






                                        </tr>
                                    </thead>
                                    <tbody>








                                        @foreach ($items as $i)

                                        <tr>



                                            <td>{{$i->nombre}}</td>

                                            <td>{{$i->ValorUnitario}}</td>




                                        </tr>
                                        @endforeach





                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Valor unitario</th>




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
