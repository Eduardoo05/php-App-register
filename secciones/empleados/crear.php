<?php include("../../templates/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">Datos del empleado</div>
    <div class="card-body">
        
    <form action="" method="post" enctype="multipart/form-data"></form>

    <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input
            type="text"
            class="form-control"
            name="primernombre"
            id="primernombre"
            aria-describedby="helpId"
            placeholder="Primer nombre"
        />
        
    </div>

    <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input
            type="text"
            class="form-control"
            name="segundonombre"
            id="segundonombre"
            aria-describedby="helpId"
            placeholder="Segundo nombre"
        />
        
    </div>

    <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer apellido</label>
        <input
            type="text"
            class="form-control"
            name="primerapellido"
            id="primerapellido"
            aria-describedby="helpId"
            placeholder="Primer apellido"
        />
        
    </div>

    <div class="mb-3">
        <label for="segundopellido" class="form-label">Segundo apellido</label>
        <input
            type="text"
            class="form-control"
            name="segundoapellido"
            id="segundoapellido"
            aria-describedby="helpId"
            placeholder="Segundo apellido"
        />
        
    </div>
    
    
    
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>