<div class="form-group">
    <label for="isbn">ISBN</label>
    <input id="isbn" name="isbn" type="text" class="form-control" value="<?php echo $data->getIsbn();?>" />
</div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" />
</div>
<div class="form-group">
    <label for="id_autor">Autor</label>
    <select name="id_autor" id="id_autor">
        <option>null</option>
    </select>
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" class="form-control"  name="descripcion" rows="5">
    <?php        
       echo  $data->getDescripcion();
    ?>
    </textarea>
</div>
<div class="form-group">
    <label for="id_categoria">Categoria</label>
    <select name="id_categoria" id="id_categoria">
        <option>null</option>
    </select>
</div>
<div class="form-group">
    <label for="id_editorial">Editorial</label>
    <select name="id_editorial" id="id_editorial">
        <option>null</option>
    </select>
</div>









