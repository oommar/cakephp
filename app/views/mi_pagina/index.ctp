
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                  Blog 
                    <small>Cake PHP</small>
                </h1>
                <?php foreach ($publicaciones as $publicacion): ?>
                <!-- First Blog Post -->
                <?php //pr($publicacion); ?>
                <h2>
                    <a href="#"><?php echo $publicacion['Publicacion']['titulo']?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $publicacion['Publicacion']['autor']?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $publicacion['Publicacion']['created']?></p>
                <hr>
                <img class="img-responsive" src="http://www.clarksonfinecars.com/img/banner1.jpg" alt="">
                <hr>
                <p><?php echo $publicacion['Publicacion']['contenido']?></p>
                <a class="btn btn-primary" href="#">Leer Más <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php endforeach; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Anterior</a>
                    </li>
                    <li class="next">
                        <a href="#">Siguiente &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Búsqueda</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                
                    <h4>Categorias</h4>
                    <div class="row">
                        <div class="col-lg-6">
                        
                            <ul class="list-unstyled">
                            <?php foreach ($publicaciones as $publicacion): ?>
                                <li><a href="#"><?php echo $publicacion['Publicacion']['categoria']?></a></li>
                                 <?php endforeach; ?>
                            </ul>
                           
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->