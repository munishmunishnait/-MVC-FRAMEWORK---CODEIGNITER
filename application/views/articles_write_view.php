

<div class="container">
    <div class="flex">
        <h1 class="mt-4 pb-4">New Article</h1>
        <?php echo form_open_multipart('articles/write'); ?>
        <div class="mb-3 mt-2">
        <label for="title" class="form-label">Title</label>
            <input type="text" placeholder="My Article" name="title" class="form-control form-width" value="<?php echo set_value('title'); ?>" />
            <?php echo form_error('title'); ?>
        </div>
        <div class="mb-3 mt-2">
        <label for="articles" class="form-label">Article</label>
            <textarea name="articles" class="form-control form-width textarea-height"><?php echo
                set_value('articles'); ?></textarea>
            <?php echo form_error('articles'); ?>
        </div>
        <div class="mb-3">
        <label for="filename" class="form-label">Picture</label>
        <input name="filename" class="form-control" type="file" id="filename" value="<?php echo
            set_value('filename'); ?>">
            <?php echo form_error('filename'); ?>
        </div>
        <button type="submit" class="btn btn-primary mt-2" type="submit" value="Submit">Submit</button>
        </form>
    </div>
</div>