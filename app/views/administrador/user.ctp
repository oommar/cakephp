<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Registro de usuarios
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Usuarios</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" id="frmUser" action="http://localhost/cakephp/administrador/save_user" method="POST">

                            <div class="form-group">
                                <label>Nombre </label>
                                <input class="form-control" placeholder="Nombre completo" name="data[nombre]">
                            </div>
                            	<div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" placeholder="autor@gmail.com" name="data[email]">
                            </div>

                             <div class="form-group">
                                <label>Celular</label>
                                <input class="form-control" placeholder="(###)-###-##-##" name="data[celular]">
                            </div>
						
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input class="form-control" type="date" placeholder="**/**/****" name="data[fecha]">
                            </div>
                            	

                            <a onclick="User.guardar()" class="btn btn-default">Guardar</a>
                           
                        </form>
	<p>Gracias por registrarse <a href="http://getbootstrap.com/css/#forms">Bienvenido!</a>.</p>

                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>