<div class="container-fluid text-center" style="background-color: #ffffff; padding-top: 20px; padding-bottom: 20px;">
    <div class="container my-5" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #d32f2f;">Nuevo Distribuidor</h2>
        <form method="POST" action="TiendaControl.php?opcion=distribuidor-nuevo-procesar">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Distribuidor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="distribuidor" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Celular</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="celular" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" style="background-color: #d32f2f; border-color: #d32f2f;">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-primary" href="index.php" role="button" style="background-color: #d32f2f; border-color: #d32f2f;">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</div>
