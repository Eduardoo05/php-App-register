<?php include("../../templates/header.php"); ?>

<?php 

    include("../../bd.php");

    if(isset($_GET['editText'])){
        //vamos a almacenar el id
        $txtID=(isset($_GET['$txtID'])?$_GET['txtID']:"");
        //preparamos una instruccion SQL
        $sentencia=$conexion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
        //pasamos un parametro para editarlo
        $sentencia->bindParam("txtID", $txtID);
        //se ejecuta la posibilidad de edicion
        $sentencia->execute();
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        $usuario=$registro['usuario'];
        $passwordText=$registro['password'];
        $correo=$registro['correo'];
        //validar compatibilidad entre variables y datos
        echo 'esta parte debe ser borrada lol';


    }

    if($_POST){

        //recolectamos los datos del metodo post
        $txtID=(isset($_POST['txtID'])?$_POST['txtID']:"");
        //conectamos los inputs con los conectores de la base de datos
        $usuario=(isset($_POST['editarNombre'])?$_POST['editarNombre']:"");
        $passwordText=(isset($_POST['editarPassword'])?$_POST['editarPassword']:"");
        $correo=(isset($_POST['editarCorreo'])?$_POST['editarCorreo']:"");
        //se prepara la insercion de datos mediante una sentencia
        $sentencia=$conexion->prepare("UPDATE tbl_usuarios SET usuarios=:editarNombre 
            /*password=:editarPassword correo=:editarCorreo*/ WHERE id=:id");
        $sentencia=$conexion->prepare("UPDATE tbl_usuarios SET passwordText=:editarPassword WHERE id=:id");
        //asignando los valores que vienen de la base de datos y el metodo post con bindParam
        $sentencia->bindParam("usuario", $usuario);
        $sentencia->bindParam("password", $passwordText);
        $sentencia->bindParam("correo", $correo);
        //volvemos el metodo global txtID en que vaya vinculado al id que caiga asignado
        $sentencia->bindParam(":id", $txtID);
        //ejecutar el post
        $sentencia->execute();
        //redirigir una vez ejecutado
        header("Location:index.php");
    }

?>

<br/>

<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID</label>
                <input
                    type="text"
                    class="form-control"
                    name="txtID"
                    id="txtID"
                    aria-describedby="helpId"
                    placeholder="ID"
                    value="<?php echo $txtID; ?>"
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
                    value="<?php echo $usuario; ?>"
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
                    value="<?php echo $passwordText; ?>"
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
                    value="<?php echo $correo; ?>"
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