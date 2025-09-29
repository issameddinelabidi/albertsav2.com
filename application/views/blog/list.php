<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">

                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4">Blog d'Albert</h1>

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
                    <div class="row">
                        <?php
                        foreach ($blog_list as $blog) {
                            $url = site_url('blog/' . $blog['id'] . '/' . $blog['slug']);
                        ?>
                            <div class="col-md-4">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="<?= $url; ?>" title="<?= $blog['title']; ?>">
                                                <div style="height: 270px;width: 100%;background-image: url('<?= $blog['cover_url']; ?>');background-position: center center;background-size: cover;"></div>
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Lire</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                <h2 class="post-title h3 mt-1 mb-3">
                                                    <a href="<?= $url; ?>" title="<?= $blog['title']; ?>" class="link-dark"><?= $blog['title']; ?></a>
                                                </h2>
                                                <p><?= $blog['hook']; ?></p>
                                            </div>
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?= date('d', strtotime($blog['change_dt'])); ?> <?= APPUP::smallMonth(date('M', strtotime($blog['change_dt']))); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>