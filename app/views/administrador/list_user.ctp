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
                        <h2>Usuarios</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Fecha</th>
                                        <th>Publicacion </th>
                                    </tr>
                                </thead>
                                <?php foreach ($usuario as $item): ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $item['Usuario']['id']?></td>
                                        <td><?php echo $item['Usuario']['nombre']?></td>
                                        <td><?php echo $item['Usuario']['email']?></td>
                                        <td><?php echo $item['Usuario']['fecha']?></td>
                                        <td><?php echo $item['Publicacion'][0]['titulo']?></td>
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