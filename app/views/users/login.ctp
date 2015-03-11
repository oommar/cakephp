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
                                <label>Usuario </label>
                                <input class="form-control" placeholder="usuario" name="data[usuario]">
                            </div>
                            	<div class="form-group">
                                <label>Contraseña</label>
                                <input class="form-control" placeholder="contraseña" name="data[password]">
                            </div>

                            

                            <a onclick="" class="btn btn-default">Login</a>
                           
                        </form>
	
                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>