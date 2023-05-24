<?php include("template/header.php") ?>

<div class="myform">
    <form  class="f" action="" method="post">

        <div class="group">
            <input required="" type="text" name="factura" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>#Nro factura</label>
        </div><br>
            
        <div class="group">
            <input required="" name="nombre" type="text" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>nombre</label>
        </div><br>

        <div class="group">
            <input required="" name="cc" type="text" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>nro cc</label>
        </div><br>

        <div class="group">
            <input required="" name="fecha" type="date" class="input">
        </div>

    </form>
</div>


<div class="myform">
    <form  class="f" action="" method="post">

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

<?php include("php/footer.php") ?>

<?php 
    include("../../db.php");


    echo count($_POST);

    foreach($_POST['1'] as $iterador){

        

    }



    if($_POST){
        print_r($_POST);
        $nombrepuesto=(isset($_POST['nombrepuesto'])?$_POST["nombrepuesto"]:"");
        
        //Estructurar la sentencia
        $sentencia=$conexion->prepare("INSERT INTO tbl_puestos(id,nombrepuesto)
                                        VALUES (NULL,:nombrepuesto)");

        //Asignando los valores remplazando la sentencia
        $sentencia->bindParam(":nombrepuesto",$nombrepuesto);
        $sentencia->execute();

    }
?>