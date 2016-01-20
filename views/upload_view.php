
<h2>Upload Files</h2>
<?php 

$attributes = array('role' => 'form');
echo form_open('',$attributes);

?>

<div class="form-group">
    <?php 
    echo form_label("Insert Folder",'folder');
    echo form_input('folder', '', 'class="form-control"');
    ?>
</div>

<div class="form-group">
    <?php
    echo form_label("Select Category",'category');

    $options = array(
            'outdoor'  => 'outdoor',
            'sports'    => 'sports',
            'lifestyle' => 'lifestyle',
            'comission'   => 'comission',
        );

    echo form_dropdown('category', $options,'outdoor', ' class="form-control"');
    ?>
</div>

<?php 
$data = array(
            'name' => 'submit_folder',
            'class' => 'btn btn-default',
            'value' => 'submit_folder',
            'type' => 'submit',
            'content' => 'Insert Folder'
    );

    echo form_button($data);
    ?>

<?php 
echo form_close();
?>


