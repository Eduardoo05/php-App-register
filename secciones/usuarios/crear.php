<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nombredelusuario" class="form-label">Nombre del usuario:</label>
                <input
                    type="text"
                    class="form-control"
                    name="nombredelusuario"
                    id="nombredelusuario"
                    aria-describedby="helpId"
                    placeholder="Nombre del usuario"
                />
                
            </div>
            
            <button
                type="type"
                class="btn btn-success"
            >
                Agregar
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