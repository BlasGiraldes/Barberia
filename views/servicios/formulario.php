<div class="campo">
    <label for="nombre">Nombre</label>
    <input 
    type="text"
    id="nombre"
    placeholder="Nombre del Servicio"
    name="nombre"
    value="<?php echo $servicio->nombre; ?>"
    />
</div>

<div class="campo">
    <label for="precio">Precio</label>
    <input 
    type="number"
    id="precio"
    placeholder="Precio del Servicio"
    name="precio"
    value="<?php echo $servicio->precio; ?>"

    />
</div>