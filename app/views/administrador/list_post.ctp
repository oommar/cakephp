<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Consultas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Tabla</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Publicaciones</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Categoria</th>
                                    </tr>
                                </thead>
                                <?php foreach ($publicaciones as $publicacion): ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $publicacion['Publicacion']['ID']?></td>
                                        <td><?php echo $publicacion['Publicacion']['titulo']?></td>
                                        <td><?php echo $publicacion['Usuario']['nombre']?></td>
                                        <td><?php echo $publicacion['Publicacion']['categoria']?></td>
                                    </tr>
                                   
                                </tbody>
                                <?php endforeach; ?>

                            </table>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>