<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Producto</h4>
                </div>
                <div class="card-body bg-light">
                    <form id="frmRegistrar" class="needs-validation" novalidate>
                        <div class="row g-4">
                            <!-- Código -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" id="codigo" name="codigo" class="form-control" placeholder="Código">
                                    <label><i class="fas fa-barcode me-2"></i>Código</label>
                                </div>
                            </div>

                            <!-- Nombre -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                    <label><i class="fas fa-tag me-2"></i>Nombre</label>
                                </div>
                            </div>

                            <!-- Detalle -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" id="detalle" name="detalle" class="form-control" placeholder="Detalle">
                                    <label><i class="fas fa-info-circle me-2"></i>Detalle</label>
                                </div>
                            </div>

                            <!-- Precio -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio">
                                    <label><i class="fas fa-dollar-sign me-2"></i>Precio</label>
                                </div>
                            </div>

                            <!-- Stock -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock">
                                    <label><i class="fas fa-boxes me-2"></i>Stock</label>
                                </div>
                            </div>

                            <!-- Categoría -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="categoria" id="categoria" class="form-select" required>
                                        <option value="">Seleccione</option>
                                    </select>
                                    <label><i class="fas fa-list me-2"></i>Categoría</label>
                                </div>
                            </div>

                            <!-- Imagen -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label"><i class="fas fa-image me-2"></i>Imagen del Producto</label>
                                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
                                </div>
                            </div>

                            <!-- Proveedor -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="proveedor" id="proveedor" class="form-select" required>
                                        <option value="">Seleccione</option>
                                    </select>
                                    <label><i class="fas fa-truck me-2"></i>Proveedor</label>
                                </div>
                            </div>

                            <!-- Botones -->
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary btn-lg px-5" onclick="registrar_producto();">
                                    <i class="fas fa-save me-2"></i>Guardar Producto
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

<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>
<script>listar_categoria();</script>
<script>listar_proveedor();</script>