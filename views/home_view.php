<div id="content" class="row">
    <div class="col col-xs-12 col-sm-3">
        <h2 id="outdoor_handle">
            Outdoor <span class="dragbar-arrows"></span>
        </h2>
        <div class="scroll_wrapper">
            <ul>
                <?php 
                foreach($folders['outdoor/'] as $folder_key => $photo) {
            ?>
                <li>
                    <a class="info <?php echo $folder_key ?>" href="<?php echo base_url().'photos/outdoor/'.$photo['order']; ?>">
                        <?php echo $photo['count'] ?>
                        photos
                    </a>
                    <img class="img-responsive" src="<?php echo base_url().'uploads/480px/outdoor/'.$folder_key.$photo['thumb'];?>">
                </li>
                <?php 
                    }
                    ?>
            </ul>
        </div>
    </div>
    <div class="col col-xs-12 col-sm-3">
        <h2 id="sports_handle">
            Sports <span class="dragbar-arrows"></span>
        </h2>

        <div class="scroll_wrapper">
            <ul>
                <?php 
                foreach($folders['sports/'] as $folder_key => $photo) {
        ?>
                <li>
                    <a class="info <?php echo $folder_key ?>" href="<?php echo base_url().'photos/sports/'.$photo['order']; ?>">
                        <?php echo $photo['count'] ?>
                        photos
                    </a>
                    <img class="img-responsive" src="<?php echo base_url().'uploads/480px/sports/'.$folder_key.$photo['thumb'];?>">
                </li>
                <?php 
                    }
                    ?>
            </ul>
        </div>
    </div>
    <div class="col col-xs-12 col-sm-3">
        <h2 id="lifestyle_handle">
            Lifestyle <span class="dragbar-arrows"></span>
        </h2>
        <div class="scroll_wrapper">
            <ul>
                <?php 
                foreach($folders['lifestyle/'] as $folder_key => $photo) {
        ?>
                <li>
                    <a class="info <?php echo $folder_key ?>" href="<?php echo base_url().'photos/lifestyle/'.$photo['order']; ?>">
                        <?php echo $photo['count'] ?>
                        photos
                    </a>
                    <img class="img-responsive" src="<?php echo base_url().'uploads/480px/lifestyle/'.$folder_key.$photo['thumb'];?>">
                </li>
                <?php 
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col col-xs-12 col-sm-3">
        <h2 id="commision_handle">
            Comission <span class="dragbar-arrows"></span>
        </h2>
        <div class="scroll_wrapper">
            <ul>
                <?php 
                foreach($folders['comission/'] as $folder_key => $photo) {


        ?>
                <li>
                    <a class="info <?php echo $folder_key ?>" href="<?php echo base_url().'photos/comission/'.$photo['order']; ?>">
                        <?php echo $photo['count'] ?>
                        photos
                    </a>
                    <img class="img-responsive" src="<?php echo base_url().'uploads/480px/comission/'.$folder_key.$photo['thumb'];?>">
                </li>
                <?php 
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>