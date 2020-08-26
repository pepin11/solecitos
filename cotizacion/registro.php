<div class="registro container py-2">
    <h1>Registro</h1>
    <form id="frmcliente">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="nombre(s)..." name="nombre">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos..." name="apellidos">
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="mail" class="form-control" id="email" placeholder="Correo..." name="correo">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Telefonico..." name="numerotelefonico">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Producto..." name="producto">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Tamaño..." name="tamaño">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Tipo..." name="tamaño">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Cantidad..." name="cantidad">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Marca..." name="marca">
        </div>
        <div class="col">
        <button type="button" onclick="guardar('productos','frmcliente');" class="btn btn-primary mt-3">Guardar</button>  
        </div>
    </div>
    </form>
</div>