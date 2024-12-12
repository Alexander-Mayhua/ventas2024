<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-user-plus me-2"></i>Formulario de Editar Persona</h4>
                </div>
                <div class="card-body bg-light">
                    <form id="frmActualizar" class="needs-validation" novalidate>
                    <input type="hidden" name="id_persona" id="id_persona">
                    <div class="row g-4">
                            <!-- Nro Identidad -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" placeholder="Número de Identidad">
                                    <label><i class="fas fa-id-card me-2"></i>Número de Identidad</label>
                                </div>
                            </div>

                            <!-- Razón Social -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="razon_social" name="razon_social" class="form-control" placeholder="Razón Social">
                                    <label><i class="fas fa-building me-2"></i>Razón Social</label>
                                </div>
                            </div>

                            <!-- Teléfono -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
                                    <label><i class="fas fa-phone me-2"></i>Teléfono</label>
                                </div>
                            </div>

                            <!-- Correo -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo">
                                    <label><i class="fas fa-envelope me-2"></i>Correo</label>
                                </div>
                            </div>

                            <!-- Departamento -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="departamento" name="departamento" class="form-control" placeholder="Departamento">
                                    <label><i class="fas fa-map-marker-alt me-2"></i>Departamento</label>
                                </div>
                            </div>

                            <!-- Provincia -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia">
                                    <label><i class="fas fa-map me-2"></i>Provincia</label>
                                </div>
                            </div>

                            <!-- Distrito -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="distrito" name="distrito" class="form-control" placeholder="Distrito">
                                    <label><i class="fas fa-map-signs me-2"></i>Distrito</label>
                                </div>
                            </div>

                            <!-- Código Postal -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" id="codigo_postal" name="codigo_postal" class="form-control" placeholder="Código Postal">
                                    <label><i class="fas fa-mail-bulk me-2"></i>Código Postal</label>
                                </div>
                            </div>

                            <!-- Dirección -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección">
                                    <label><i class="fas fa-home me-2"></i>Dirección</label>
                                </div>
                            </div>

                            <!-- Rol -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="rol" name="rol" class="form-control" placeholder="Rol">
                                    <label><i class="fas fa-user-tag me-2"></i>Rol</label>
                                </div>
                            </div>

                        
                

                            <!-- Fecha Registro -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" placeholder="Fecha de Registro">
                                    <label><i class="fas fa-calendar me-2"></i>Fecha de Registro</label>
                                </div>
                            </div>

                            <!-- Botones -->
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success btn-lg px-5" onclick="actualizar_persona();">
                                    <i class="fas fa-save me-2"></i>actualizar
                                </button>
                                <button type="reset" class="btn btn-secondary btn-lg px-5 ms-2">
                                    <i class="fas fa-undo me-2"></i>Limpiar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

<script>
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
ver_persona(id_p);
</script>