<?php
if($results){
foreach($results as $row){
$title = $row->title;
$articles = $row->articles;
$articles_id = $row->articles_id;
 echo $title; //just to test
}
}

?>

<div class="container">
    <div class="flex">
        <h1 class="mt-4 pb-4">Edit</h1>
        <?php echo form_open_multipart("articles/edit/$articles_id"); ?>
        <div class="mb-3 mt-2">
        <label for="title" class="form-label">Title</label>
            <input type="text" placeholder="My Article" name="title" class="form-control form-width" value="<?php echo set_value('title',$title); ?>" />
            <?php echo form_error('title'); ?>
        </div>
        <div class="mb-3 mt-2">
        <label for="articles" class="form-label">Article</label>
            <textarea style="height:20rem;" name="articles" class="form-control form-width"><?php echo
                set_value('articles',$articles); ?></textarea>
            <?php echo form_error('articles'); ?>
        </div>
        <button type="submit" class="btn btn-primary mt-2" type="submit" value="Submit">Submit</button>
        </form>
    </div>
</div>