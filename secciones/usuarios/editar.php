<?php include("../../templates/header.php"); ?>

<?php 

    include("../../bd.php");

    if(isset($_GET['txtID'])){
        //vamos a almacenar el id
        $txtID=(isset($_GET['$txtID'])?$_GET['txtID']:"");
        //preparamos una instruccion SQL
        $sentencia=$conexion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
        //pasamos un parametro para editarlo
        $sentencia->bindParam(":id", $txtID);
        //se ejecuta la posibilidad de edicion
        $sentencia->execute();
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        $usuario=$registro['usuario'];
        $password=$registro['password'];
        $correo=$registro['correo'];
    }

    if($_POST){
        //recolectamos los datos con el metodo post
        $txtID=(isset($_POST['txtID'])?$_POST['txtID']:"");
        $usuario=(isset($_POST['usuario'])?$_POST['usuario']:"");
        $password=(isset($_POST['password'])?$_POST['password']:"");
        $correo=(isset($_POST['correo'])?$_POST['correo']:"");
    
        //preparar la insercion de datos o registros
        $sentencia=$conexion->prepare("UPDATE tbl_usuarios SET 
        usuario=:usuario,
        password=:password,
        correo=:correo
        WHERE id=:id
        ");
    
        //Asignando los valores que vienen del metodo POST (Los que vienen en el formulario)
        $sentencia->bindParam(":usuario", $usuario);
        $sentencia->bindParam(":password", $password);
        $sentencia->bindParam(":correo", $correo);
        $sentencia->bindParam(":id", $txtID);
        //ejecutar sentencia
        $sentencia->execute();
        //header("Location:index.php");
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
                <label for="usuario" class="form-label">Nombre:</label>
                <input
                    type="text"
                    class="form-control"
                    name="usuario"
                    id="usuario"
                    aria-describedby="helpId"
                    placeholder="Escribe nuevo usuario"
                    value="<?php echo $usuario; ?>"
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Contraseña:</label>
                <input
                    type="text"
                    class="form-control"
                    name="editarPassword"
                    id="editarPassword"
                    aria-describedby="helpId"
                    placeholder="Escribe nueva contraseña"
                    value="<?php echo $password; ?>"
                />
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo:</label>
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