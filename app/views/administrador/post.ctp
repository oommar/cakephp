<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ficha de Publicación
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Publicación</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" id="frmPublicacion" action="http://localhost/cakephp/administrador/save_post" method="POST">

                            <div class="form-group">
                                <label>Titulo </label>
                                <input class="form-control" placeholder="Titulo" name="data[titulo]">
                            </div>
                            	<div class="form-group">
                                <label>Autor</label>
                                <input class="form-control" placeholder="autor" name="data[autor]">
                            </div>

                             <div class="form-group">
                                <label>Imagen</label>
                                <input class="form-control" placeholder="nombre de imagen" name="data[imagen]">
                            </div>
						
                            <div class="form-group">
                                <label>Lugar de acontecimiento</label>
                                <select class="form-control" name="data[categoria]">
                                    <option>Sociales</option>
                                    <option>Deportes</option>
                                    <option>Regional</option>
                                    <option>Policiaca</option>
                                    <option>Nacional</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Comentarios</label>
                                <textarea class="form-control" rows="3"  name="data[contenido]"></textarea>
                            </div>

                            	

                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>
                           
                        </form>
	<p>Para terminar con su preinscripción favor de pagar en el banco la referencia <a href="http://getbootstrap.com/css/#forms">unipolidgo</a>.</p>

                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>