<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">

                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4"><?= $article['title']; ?></h1>
                    <div class="post-category">
                        <?= $article['hook']; ?>
                    </div>

                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <figure class="card-img-top">
                            <div style="height: 470px;width: 100%;background-image: url('<?= $article['cover_url']; ?>');background-position: center center;background-size: cover;border-radius: 10px 10px 0px 0px;"></div>
                        </figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <?= $article['content']; ?>
                                    </div>

                                    <hr class="my-2">
                                    <small>Dernière modification le <?= APPUP::getFullDate($article['change_dt'], true, 'fr'); ?></small>
                                    <hr class="my-2">
                                    <div class="fb-comments" data-href="<?= site_url('blog/' . $article['id'] . '/' . $article['slug']); ?>" data-width="100%" data-numposts="5"></div>

                                </article>
                                <!-- /.post -->
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
