<?php

$item = "id";
$valor = $_GET["idVenta"];

$venta = ControladorVentas::ctrMostrarVentas($item, $valor);

$itemUsuario = "id";
$valorUsuario = $venta["id_vendedor"];

$vendedor = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

$itemCliente = "id";
$valorCliente = $venta["id_cliente"];

$cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

$porcentajeImpuesto = $venta["impuesto"] * 100 / $venta["neto"];
$listaProducto = json_decode($venta["productos"], true);


?>



<div class="content-wrapper">

    <section class="content-header">

        <h1>Detalle de venta</h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Detalle venta</li>

        </ol>

    </section>
    <section class="content">
        <div class="card">
            <h4 class="card-header">Datos del cliente</h4>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    echo  '<tr>

                        <td>'.$cliente["documento"].'</td>
                        <td>'.$cliente["nombre"].'</td>
                        <td>'.$cliente["telefono"].'</td>
                        <td>'.$cliente["direccion"].'</td>

                        <td>'.$cliente["email"].'</td>
                    </tr>'

                    ?>
                    </tbody>
                </table>


            </div>
        </div>

        <div class="card">
            <h3 class="card-header">Detalles de la compra -Orden No. <?php echo $venta["codigo"]?></h3>
            <?php echo "<h4>Fecha:".$venta["fecha"]."</h4>";?>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">Nombre producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Valor unidad</th>
                        <th scope="col">Valor total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach ($listaProducto as $key => $value) {

                            echo  '<tr> 

                          <td>'.$value["descripcion"].'</td>
                          <td>'.$value["cantidad"].'</td>
                          <td>'.$value["precio"].'</td>
                          <td>'.$value["total"].'</td>
                          </tr>';

                        }

                        ?>




                    </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><h4 style="font-weight: bold;color: #0b93d5">Total:$</h4></td>
                        <td><input  id="nuevoTotalVenta" class="input-lg " type="text" value="<?php echo $venta["neto"] ?>" readonly></td>
                    </tr>
                    </tfoot>
                </table>


            </div>
        </div>






    </section>

</div>