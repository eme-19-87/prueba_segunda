<div class="container-fluid pt-4 pb-5 ps-4">
	<h2 class="text-star mb-4">Iniciar Sesión</h2>
	<?php if(isset ($validation)){?>
          <div class="alert alert-danger">
            <?php echo $validation->listErrors();?>
          </div>
          

        <?php };?>

    <?php if(isset ($error) and $error!=""){?>
          <div class="alert alert-danger">
            <?php echo $error;?>
          </div>
          

        <?php };?>
  <div class="row px-3 pb-5">
  	<div class="col-lg-6 col-md-12 m-auto text-star p-4" style="background: #F9B400; border-radius:15px;">
  		<form class="w-100" method="post" action="<?php echo base_url('/loguear_usuario')?>">
				<label for="exampleFormControlInput1" class="form-label fw-semibold fs-5">Correo electrónico</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: jose@gmail.com" id="mail_login" name="mail_login">

				<label for="exampleFormControlInput1" class="form-label fw-semibold fs-5 pt-4">Contraseña</label>
				<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Abc123456" name="pass_login" id="pass_login" >

				<div class="d-flex pt-4 justify-content-between">
					<button type="submit" class="boton-aceptar fs-5">
						Ingresar
					</button>

					<button type="button" class="boton-cancelar fw-semibold fs-5" >
						Cancelar
					</button>
				</div>
			</form>
		</div>

   
   <div class="col-md-6 m-auto offset-md-0 p-5">
   		<img src="./assets/img/logo-login.svg" class="d-none d-lg-grid w-100" alt="logo-idi">
   </div>

  </div>
  
</div>