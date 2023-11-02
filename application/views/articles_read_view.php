
<div class="container">
    <div class="flex">
            <div class="card">
            <div class="card-header">
            <h1><?php echo $heading?></h1>
            </div>
            <div class="card-body">
            <?php if ($results) : ?>
                <?php foreach ($results as $row) : ?>
                    <div class="article">
                        <?php if ($row->filename) : ?>
                            <div class="thumbnail">
                                <img src="<?php echo base_url('uploads/'.$row->filename) ?>" alt="<?php echo $row->title ?>">
                            </div>
                        <?php endif; ?>
                        <div class="content">
                <h5 class="card-title"><?php echo $row->title ?></h5>
                <p class="card-text"><p>
                                <?php 
                                    $excerpt = substr($row->articles, 0, 400); // limit to 200 characters
                                    echo $excerpt;
                                ?>
                                <?php if (strlen($row->articles) > 200) : ?>....
                                    <p><a href="<?php echo base_url('articles/detail/'.$row->articles_id) ?>" class="btn btn-primary">Read More</a></p>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?></p>
            </div>
            </div>
</div>
</div>