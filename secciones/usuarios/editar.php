<?php include("../../templates/header.php"); ?>

<?php 

    include("../../bd.php");

    if(isset($_GET['editText'])){
        //vamos a almacenar el id
        $editarText=(isset($_GET['$editarText'])?$_GET['editarText']:"");
        //preparamos una instruccion SQL
        $sentencia=$conexion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
        //pasamos un parametro para editarlo
        $sentencia->bindParam("editarText", $editarText);
        //se ejecuta la posibilidad de edicion
        $sentencia->execute();
    }

?>

<br/>

<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input
                    type="text"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder="ID"
                    value=""
                    readonly
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input
                    type="text"
                    class="form-control"
                    name="editarNombre"
                    id="editarNombre"
                    aria-describedby="helpId"
                    placeholder="Escribe nuevo usuario"
                    value=""
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Contraseña</label>
                <input
                    type="text"
                    class="form-control"
                    name="editarPassword"
                    id="editarPassword"
                    aria-describedby="helpId"
                    placeholder="Escribe nueva contraseña"
                    value=""
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input
                    type="text"
                    class="form-control"
                    name="editarCorreo"
                    id="editarCorreo"
                    aria-describedby="helpId"
                    placeholder="Escribe nuevo correo"
                    value=""
                />
                
            </div>

            <a
                name=""
                id=""
                class="btn btn-success"
                href="index.php"
                role="button"
                >Actualizar</a
            >

            <a
                name=""
                id=""
                class="btn btn-danger"
                href="index.php"
                role="button"
                >Cancelar</a
            >
            
            
            
            
            
            
        </form>
    </div>
    
</div>

<?php include("../../templates/footer.php"); ?>