

<div class="folders_form panel">
    <?php $attributes = array('id' => 'folders_form','role' => 'form'); echo form_open('',$attributes);?>

    <?php 
        foreach($folders as $folder) { ?>
    <ul>
        <?php 
        foreach($folder as $row) {
            ?>

        <li>
            <label><?php echo $row->category.$row->folder?> </label>
            <img src="<?php echo base_url()?>uploads/480px/<?php echo $row->category.$row->folder.$row->thumb?>" width="50" height="50"/>
            <input type="text" name="order[<?php echo $row->category ?>][<?php echo $row->folder ?>]" value="<?php echo $row->order ?>" size="6"/>
            <br /> <br />
        </li>
        <?php } ?>
    </ul>
    <?php } ?>
    
    <div style="clear:both"></div>
    <?php 
    $data = array(
            'name' => 'submit_folders',
            'class' => 'btn btn-default btn_submit',
            'value' => 'submit_folders',
            'type' => 'submit',
            'content' => 'Sortieren'
        );

        echo form_button($data);
        ?>
    <?php echo form_close(); ?>
</div>
