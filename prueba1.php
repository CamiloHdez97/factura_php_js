<?php include("template/header.php") ?>

<div class="myform">
    <form  class="f" method="GET">
            
        <div class="group">
            <input required="" name="nombre" type="text" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>nombre</label>
        </div><br>

        <div class="group">
            <input required="" name="apellido" type="text" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>apellido</label>
        </div><br>

        <div class="group">
            <input required="" name="cc" type="text" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>nro cc</label>
        </div><br>
    </form>
</div>


<div class="myform">
    <form  class="f" method="POST">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Valor Unidad</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody id="addItemtbody">

                <tr>

                    <th scope="row" id="1">1</th>
                    
                    <td>
                        <input required="" type="text" name="1[]" class="input">
                    </td> 
                    
                    <td>                        
                        <input required="" type="text" name="1[]" class="input">
                    </td>

                    <td>                       
                        <input required="" type="text" name="1[]" class="input">
                    </td>

                    <td>                       
                        <input required="" type="text" name="1[]" class="input">
                    </td>

                    <td>                       
                        <a name="" id="" class="btn btn-success" href="#" role="button">+</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">-</a>
                    </td>

                </tr>

            </tbody>

        </table>

        <div class="d-grid gap-2">
        <button type="button" id="addItem" class="btn btn-primary btn-lg">addItem</button>
        <button type="submit" id="addItem" class="btn btn-primary btn-lg">Facturar</button>
</div>

    </form>

</div>

<?php include("template/footer.php") ?>

<?php 

require("db.php");

    if($_POST){

        //$nombre = $_GET['nombre'];
        //$apellido = $_GET['apellido'];
        //$cc = $_GET['cc'];

        //$sentencia1=$conexion->prepare("INSERT INTO persona(cc,nombre,apellido)
        //VALUES (:cc, :nombre, :apellido)");
        //        //Asignando los valores remplazando la sentencia
        //$sentencia1->bindParam(":cc", $cc);
        //$sentencia1->bindParam(":nombre",$nombre);
        //$sentencia1->bindParam(":apellido",$apellido);
        //$sentencia1->execute();
     
        foreach($_POST as $item){
            
            $subtotal = intval($item[1]) * intval($item[2]);
            $iva = $subtotal * 0.19;
            $total = $subtotal+$iva;
            $item[3] = $total;
            $fecha_actual = date("d-m-Y h:i:s");
                                        
            $nombrepuesto=(isset($_POST['nombrepuest'])?$_POST["nombrepuesto"]:"");
            //Estructurar la sentencia
            $sentencia=$conexion->prepare("INSERT INTO factura(id,producto,valor_unitario,cantidad,iva,total,fecha,cc)
                                                     VALUES (NULL, :producto, :valor_unitario, :cantidad, :iva, :total, NULL , :cc)");
            //Asignando los valores remplazando la sentencia
            $sentencia->bindParam(":producto", $item[0]);
            $sentencia->bindParam(":valor_unitario", $item[1]);
            $sentencia->bindParam(":cantidad", $item[2]);
            $sentencia->bindParam(":iva", $iva);
            $sentencia->bindParam(":total", $item[3]);
            $sentencia->bindParam(":cc",$cc);
            $sentencia->execute();
        }        
    }
?>