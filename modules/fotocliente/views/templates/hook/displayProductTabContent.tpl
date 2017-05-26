<h3 class="page-product-heading">Fotos de clientes</h3>
<div class="fotocliente_bloque">
<form action="" method="post"  enctype="multipart/form-data" id="comment-form">
	<div class="form-group col-xs-12 col-md-4">
	<label for="foto">Foto: </label>
	<input type="file" name="foto" id="foto">		
	</div>

	<div class="form-group col-xs-12 col-md-4" style="{if enabled_coomment==0}display: none;{/if}">
	<label for="coment">Comentario: </label>
	<textarea name="commentario" id="commentario" class="formcontrol"></textarea>		
	</div>
	<br>

	<div class="submit fotocliente_bloque">
	<button type="submit" name="fotocliente_submit_foto" class="button btn btn-default button-medium">
	<span>Enviar <i class="icon-chevron-right right"></i></span>
		
	</button>
		
	</div>
</form>
	
</div>