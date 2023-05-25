<?php include("template/header.php")  ?>

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

<!-- este es el formulario de compra de productos -->
  
<p class="text-center titulo">nuestra seccion de compras</p>

<div class="products">
 

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
                    <th scope="row">1</th>
                    <td>
                        <input required="" type="text" name="factura" class="input">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    <td>                        
                        <input required="" type="text" name="factura" class="input">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                    <td>                       
                        <input required="" type="text" name="factura" class="input">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                    <td>                       
                        <input required="" type="text" name="factura" class="input">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                    <td>                       
                        <a name="" id="addItem" class="btn btn-success" href="#" role="button">+</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">-</a>
                        
                    </td>
                </tr>


            </tbody>

        </table>

    </form>
    
    
</div>








</div>  


<div class="facturar">
<button class="btn btn-success ">facturar</button>
</div>

  <div class="generarFac"></div>




<?php include("php/footer.php") ?>