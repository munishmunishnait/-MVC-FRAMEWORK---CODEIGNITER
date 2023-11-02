<div class="container">
    <div class="flex">

        <h1 class="mt-4 mb-4"><?php echo $heading?></h1>
        <?php if(($results)) : ?>
        <?php foreach($results as $row): ?>
        <div class="well">
        <h3><?php echo $row->title ?></h3>
        <h5 class="text-primary">Added by <?php echo $row->username ?></h5>
        <p><?php echo $this->typography->nl2br_except_pre($row->articles); ?></p>
        <h3><?php echo $row->filename ?></h3>
        <a href="<?php echo base_url() ."articles/edit/" .$row->articles_id;?>" class="btn btn-primary btn-sm"> <i
        class="material-icons">edit</i>Edit</a>
        <a href="<?php echo base_url('articles/delete/' . $row->articles_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this article?')"> <i class="material-icons">delete</i> Delete</a>

        </div>
        <?php endforeach;?>
        <?php else:?>
        <p>No results</p>
        <?php endif; ?>

</div>
</div>
