
<div class="folders_form panel">
    <ul>
        <?php 
        foreach($downloads as $row) {
            ?>
        <li>
            <?php switch($row['file_type']) {
                case '.pdf' : ?>
            <img src="<?php echo base_url() ?>assets/img/pdf-icon.png" width="50" height="50" />
            <?php break;?>
            <?php case '.jpg' : ?>
            <img src="<?php echo base_url()."downloads/".$row['file_name'].$row['file_type']?>" width="50" height="50" />
            <?php break;?>
            <?php } ?>
            <a href="<?php echo base_url()."downloads/".$row['file_name'].$row['file_type']?>" title="<?php echo $row['file_name'] ?>" download><?php echo $row['file_name'] ?></a>
            <br /> <br />
        </li>
        <?php } ?>
    </ul>
    <div style="clear: both"></div>
</div>
