<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-user-plus me-2"></i>Registro de Persona</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="" id="frmRegistrar" class="needs-validation" novalidate>
                        <div class="row g-4">
                            <!-- Nro Identidad -->
                            <div class="col-12">
                                <label for="nro_identidad" class="form-label">Nro Identidad</label>
                                <input type="text" id="nro_identidad" name="nro_identidad" class="form-control">
                            </div>

                            <!-- Razón Social -->
                            <div class="col-12">
                                <label for="razon_social" class="form-label">Razón Social</label>
                                <input type="text" id="razon_social" name="razon_social" class="form-control">
                            </div>

                            <!-- Teléfono -->
                            <div class="col-12">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="number" id="telefono" name="telefono" class="form-control">
                            </div>

                            <!-- Correo -->
                            <div class="col-12">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control">
                            </div>

                            <!-- Departamento -->
                            <div class="col-12">
                                <label for="departamento" class="form-label">Departamento</label>
                                <input type="text" id="departamento" name="departamento" class="form-control">
                            </div>

                            <!-- Provincia -->
                            <div class="col-12">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" id="provincia" name="provincia" class="form-control">
                            </div>

                            <!-- Distrito -->
                            <div class="col-12">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" id="distrito" name="distrito" class="form-control">
                            </div>

                            <!-- Código Postal -->
                            <div class="col-12">
                                <label for="codigo_postal" class="form-label">Código Postal</label>
                                <input type="number" id="codigo_postal" name="codigo_postal" class="form-control">
                            </div>

                            <!-- Dirección -->
                            <div class="col-12">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" id="direccion" name="direccion" class="form-control">
                            </div>

                            <!-- Rol -->
                            <div class="col-12">
                                <label for="rol" class="form-label">Rol</label>
                                <input type="text" id="rol" name="rol" class="form-control">
                            </div>

                            <!-- Password -->
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>

                            <!-- Estado -->
                            <div class="col-12">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" id="estado" name="estado" class="form-control">
                            </div>

                            <!-- Fecha Registro -->
                            <div class="col-12">
                                <label for="fecha_registro" class="form-label">Fecha Registro</label>
                                <input type="date" id="fecha_registro" name="fecha_registro" class="form-control">
                            </div>

                            <!-- Botón de Registro -->
                            <div class="col-12 text-center mt-4">
                                <button type="button" class="btn btn-success btn-lg" onclick="registrar_persona();">
                                    <i class="fas fa-save me-2"></i>Registrar
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

<!--<script>listar_categoria();</script>
<script>listar_proveedor();</script>-->