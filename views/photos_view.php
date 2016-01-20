<div id="content" class="row">


    <div id="tc" class="photos_list">
        <h2 style="display: none">Photos</h2>
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
          

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="text-align: center">
                <?php 
                $i=0;
                foreach($photos as $photo) {
                ?>
                <div class="item <?php if($i==0) { ?>active<?php } $i++;?>">
                    <img class="img-responsive" src="<?php echo base_url().'uploads/480px/'.$cat.$folder.$photo;?>"
                        data-min-width-481="<?php echo base_url().'uploads/1024px/'.$cat.$folder.$photo;?>"
                        data-min-width-1025="<?php echo base_url().'uploads/2048px/'.$cat.$folder.$photo;?>">
                </div>
                <?php 
                    }
                    ?>
            </div>

            
        </div>
        <div class="controls" style="">
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">

                    <span class="backbtn"> </span>
                </a>

                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="nextbtn right"> </span>
                </a>
                <a class="close_btn" href="<?php echo base_url('/home')?>" role="button">
                    <span class="closebtn"> </span>
                </a>
                <div class="clear"></div>
            </div>
    </div>
    <div class="clear"></div>