<?php include("../../templates/header.php"); ?>

<?php

include("../../bd.php");

    //como se lee: si recibimoes este dato
    if(isset($_GET['txtID'])){
        //vamos a almacenar el id
        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

        //vamos a preparar una instruccion SQL
        $sentencia=$conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
        //vamos a pasar un parametro para editarlo
        $sentencia->bindParam(":id", $txtID);
        //y lo editamos
        $sentencia->execute();
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        $nombredelpuesto=$registro["puestodelempleado"];
        
        
    }

    if($_POST){
        
        //recolectamos los datos del metodo post
        $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
        $nombredelpuesto=(isset($_POST["nombredelpuesto"])?$_POST["nombredelpuesto"]:"");
        //preparar la inserccion de los datos
        $sentencia=$conexion->prepare("UPDATE tbl_puestos SET puestodelempleado=:nombredelpuesto
                    WHERE id=:id");
        //Asignando los valores que vienen del metodo POST (los que vienen del formulario)
        $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();
        header("Location:index.php");
        
    }


?>

<br/>

<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input
                    type="text"
                    class="form-control"
                    name="txtID"
                    id="txtID"
                    aria-describedby="helpId"
                    placeholder="ID"
                    readonly
                    value="<?php echo $txtID; ?>"
                />
                
            </div>
            

            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto:</label>
                <input
                    type="text"
                    class="form-control"
                    name="nombredelpuesto"
                    id="nombredelpuesto"
                    aria-describedby="helpId"
                    placeholder="Nombre del puesto"
                    value="<?php echo $nombredelpuesto; ?>"
                />
                
            </div>
            
            <button
                type="type"
                class="btn btn-success"
            >
                Actualizar
            </button>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Cancelar</a
            >
            
        </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>