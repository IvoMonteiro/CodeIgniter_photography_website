<div id="content" class="row">

    <div class="downloads_list col-md-12">
        <ul>
            <?php 
            foreach($downloads as $row) {
            ?>
            <li>
                <?php if(isset($row['thumb'])) { ?>
                <img src="<?php echo base_url()."uploads/downloads/".$row['thumb'].$row['thumb_file_type']?>" width="90" height="90" />
                <?php } ?>
                <a href="<?php echo base_url()."uploads/downloads/".$row['file_name'].$row['file_type']?>" title="<?php echo $row['file_name'].$row['file_type'] ?>" download>
                    <?php echo $row['file_name'] ?>
                </a>
                <br /> <br />
            </li>
            <?php } ?>
        </ul>
        <div style="clear: both"></div>
    </div>
    <div style="clear: both"></div>