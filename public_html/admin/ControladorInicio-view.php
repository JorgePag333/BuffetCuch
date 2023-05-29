<div class="" style="background-color: white;">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-primary text-center">Mostrar Categorias de carruzel inicio</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                            <form action="#" method="post">

                            <label class="heading">Seleccione Las Categorias que desea mostrar en la pagina de inicio:</label>
                        
                            <?php cateoriaCheck();?>
                            
                            <button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>
                            </form>
                            </div>
                        </div>  
                    </div>    
            </div>
        </div>
    </div>  
</div> 

<?php
if(isset($_POST['enviar'])){
if(!empty($_POST['check_lista'])) {
// Contando el numero de input seleccionados "checked" checkboxes.
$checked_contador = count($_POST['check_lista']);
echo "<p>Has seleccionado los siguientes ".$checked_contador." opcione(s):</p> <br/>";
// Bucle para almacenar y visualizar valores activados checkbox.
foreach($_POST['check_lista'] as $seleccion) {
echo "<p>".$seleccion ."</p>";
}
echo "<br/><b>Nota :</b> <span>De manera similar, también puede realizar operaciones CRUD usando estos valores seleccionados.</span>";
}
else{
echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
}
}
?>