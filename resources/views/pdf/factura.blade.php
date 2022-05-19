<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Factura</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
</div><div id="app" class="col-11">

    <h2>Factura</h2>

    <div class="row my-3">
      <div class="col-10">
    </div>


    <hr />

    <div class="row fact-info mt-3">
      <div class="col-3">
        <h5>Facturar a</h5>
        <p>
            @foreach ( $b as $ba)

         {{$ba->nombre_cli}} {{$ba->apellido}}
         @endforeach

        </p>

      </div>

      <div class="col-3">
        <h5>N° de factura</h5>
        <p>
            @foreach ( $b as $ba)
            {{$ba->id_cli}}
            @endforeach
        </p>
      </div>
    </div>

    <div class="row my-5">
      <table class="table table-borderless factura">
        <thead>
          <tr>
            <th>Descripcion</th>
            <th>Precio Unitario</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($a as $as )
          <tr>

            <td>{{$as->nombre}}</td>
            <td>{{$as->ValorUnitario}}</td>
            @endforeach
          </tr>
        </tbody>
        <tfoot>
          <tr>

            <th></th>
            <th>Total Factura</th>
          <th>  {{$e}}</th>

          </tr>
        </tfoot>
      </table>
    </div>
</div>
<!-- partial -->

</body>
</html>
<style>
.factura {
    table-layout: fixed;
  }

  .fact-info > div > h5 {
    font-weight: bold;
  }

  .factura > thead {
    border-top: solid 3px #000;
    border-bottom: 3px solid #000;
  }

  .factura > thead > tr > th:nth-child(2), .factura > tbod > tr > td:nth-child(2) {
    width: 300px;
  }

  .factura > thead > tr > th:nth-child(n+3) {
    text-align: right;
  }

  .factura > tbody > tr > td:nth-child(n+3) {
    text-align: right;
  }

  .factura > tfoot > tr > th, .factura > tfoot > tr > th:nth-child(n+3) {
    font-size: 24px;
    text-align: right;
  }

  .cond {
    border-top: solid 2px #000;
  }
</style>
