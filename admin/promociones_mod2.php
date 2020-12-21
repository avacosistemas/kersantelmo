<?php if(!isset($database_kerhistoric)){ include "access.php"; }

$colname_promociones = "-1"; if (isset($_GET['id'])) {  $colname_promociones = intval($_GET['id']);}
$query_promociones = sprintf("SELECT * FROM promociones WHERE Id = %s", GetSQLValueString($colname_promociones, "int"));
$promociones = mysqli_query($kerhistoric, $query_promociones ) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);
?>

<form method="post" name="form1"  enctype="multipart/form-data" action="procesos.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Titulo_esp:.</td>
      <td><input type="text" name="titulo_esp" value="<?php echo htmlentities($row_promociones['titulo_esp'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Titulo_ing:</td>
      <td><input type="text" name="titulo_ing" value="<?php echo htmlentities($row_promociones['titulo_ing'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto:</td>
      <td>
      
<?php if($row_promociones['foto']){ ?>
        <div id="foto"><img src="../img_promociones/<?php echo $row_promociones['foto']; ?>" width="100 " /> <a href="javascript:del_imagen('foto','arch');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>      
      
      
      <input type="file" name="foto" size="32"></td>
    </tr>
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto detalle:</td>
      <td><?php if($row_promociones['foto_detalle']){ ?>
        <div id="foto_detalle"><img src="../img_promociones/<?php echo $row_promociones['foto_detalle']; ?>" width="100 " /> <a href="javascript:del_imagen('foto_detalle','arch3');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>
        <input type="file" name="foto_detalle" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto popup esp:</td>
      <td>
      
<?php if($row_promociones['foto_popup_esp']){ ?>
        <div id="foto_popup_esp"><img src="../img_promociones/<?php echo $row_promociones['foto_popup_esp']; ?>" width="100 " /> <a href="javascript:del_imagen('foto_popup_esp','arch1');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>      
      
      
      <input type="file" name="foto_popup_esp" size="32"></td>
    </tr>    


    <tr valign="baseline">
      <td nowrap align="right">Foto popup ing:</td>
      <td>
      
<?php if($row_promociones['foto_popup_ing']){ ?>
        <div id="foto_popup_ing"><img src="../img_promociones/<?php echo $row_promociones['foto_popup_ing']; ?>" width="100 " /> <a href="javascript:del_imagen('foto_popup_ing','arch2');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>      
      
      
      <input type="file" name="foto_popup_ing" size="32"></td>
    </tr>
    
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto interior esp:</td>
      <td><?php if($row_promociones['popup_interior_esp']){ ?>
        <div id="popup_interior_esp"><img src="../img_promociones/<?php echo $row_promociones['popup_interior_esp']; ?>" width="100 " /> <a href="javascript:del_imagen('popup_interior_esp','arch4');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>
        <input type="file" name="popup_interior_esp" size="32" /></td>
    </tr>
    
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto interior ing:</td>
      <td><?php if($row_promociones['popup_interior_ing']){ ?>
        <div id="popup_interior_ing"><img src="../img_promociones/<?php echo $row_promociones['popup_interior_ing']; ?>" width="100 " /> <a href="javascript:del_imagen('popup_interior_ing','arch5');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>
        <input type="file" name="popup_interior_ing" size="32" /></td>
    </tr>
    
        <tr valign="baseline">
      <td nowrap="nowrap" align="right">Iconos descuentos (350px ancho):</td>
      <td><?php if($row_promociones['fotoicono']){ ?>
        <div id="fotoicono"><img src="../img_promociones/<?php echo $row_promociones['fotoicono']; ?>" width="100 " /> <a href="javascript:del_imagen('fotoicono','arch6');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a><br />
        </div>
        <?php } ?>
        <input type="file" name="fotoicono" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    
    <tr valign="baseline">
      <td nowrap align="right">Texto_esp:</td>
      <td><textarea name="texto_esp" cols="32"><?php echo htmlentities($row_promociones['texto_esp'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Texto_ing:</td>
      <td><textarea name="texto_ing" cols="32"><?php echo htmlentities($row_promociones['texto_ing'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="email" class="form-control" name="email" value="<?php echo htmlentities($row_promociones['email'], ENT_COMPAT, 'utf-8'); ?>" required size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Link;</td>
      <td><input type="link" class="form-control" name="link" value="<?php echo htmlentities($row_promociones['link'], ENT_COMPAT, 'utf-8'); ?>"  size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="center" nowrap><input type="submit" value="Modificar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="promociones">
  <input type="hidden" name="Id" value="<?php echo $row_promociones['Id']; ?>">
  <input name="arch" type="hidden" id="arch" value="<?php echo htmlentities($row_promociones['foto'], ENT_COMPAT, 'utf-8'); ?>" />
  <input name="arch1" type="hidden" id="arch1" value="<?php echo htmlentities($row_promociones['foto_popup_esp'], ENT_COMPAT, 'utf-8'); ?>" />
  <input name="arch2" type="hidden" id="arch2" value="<?php echo htmlentities($row_promociones['foto_popup_ing'], ENT_COMPAT, 'utf-8'); ?>" />    
  <input name="arch3" type="hidden" id="arch3" value="<?php echo htmlentities($row_promociones['foto_detalle'], ENT_COMPAT, 'utf-8'); ?>" />      
  <input name="arch4" type="hidden" id="arch4" value="<?php echo htmlentities($row_promociones['popup_interior_esp'], ENT_COMPAT, 'utf-8'); ?>" />
  <input name="arch5" type="hidden" id="arch5" value="<?php echo htmlentities($row_promociones['popup_interior_ing'], ENT_COMPAT, 'utf-8'); ?>" />  
  <input name="arch6" type="hidden" id="arch6" value="<?php echo htmlentities($row_promociones['fotoicono'], ENT_COMPAT, 'utf-8'); ?>" />          
  
</form>
<?php mysqli_free_result($promociones); ?>