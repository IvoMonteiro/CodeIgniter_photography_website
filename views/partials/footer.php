<div id="footer" class="hidding">

    <div id="link_list">
        <ul>
            <li class="logo">
                <h1>andi frank</h1>
            </li>

            <li class="portfolio">
                <a title="Portfolio">Portfolio</a>
            </li>
            <li class="clients">
                <a href="#clients" title="Clients">Clients</a>
            </li>
            <li class="contact">
                <a href="#contact" title="Contact">Contact</a>
            </li>

            <li class="about">
                <a href="#about" title="About">About</a>
            </li>

            <li class="downloads">
                <a href="#downloads" title="Downloads">Downloads</a>
            </li>

            <li class="fullscreen">
                <a title="View in Fullscreen Mode" class="fullscreen_btn">
                    <span class="glyphicon glyphicon-fullscreen"></span>
                </a>
            </li>

        </ul>

        <div id="about">
            <div class="text-block col-sm-10 col-sm-offset-1">
                <div class="row">


                    <div class="col-sm-4">
                        <p class="text-left">
                            Andi lebt mit seiner Familie den Sommer über in der selbstgebauten Baumhausvilla ausserhalb von München. Er studierte Photodesign an
                            der FH Bielefeld und arbeitete bereits in den ersten Jahren danach rund um den Globus für Kunden wie Strellson of Switzerland,
                            S.Oliver, Escada, Betty Barclay, BMW, Siemens, etc. <br> <br> Die Liebe zu allen Brettern die man sich unter die Füße packen kann, die
                            positive Art die er auf Menschen um sich herum ausstrahlt und die ausdauernde Bereitschaft nachts auf die entlegensten Gipfel der
                            Alpen zu steigen um mit den ersten Sonnenstrahlen atemberaubende Momente mit seiner Kamera einzufangen zeichnen den ehemaligen
                            Leistungssportler aus. <br> <br> Diese Kombination aus Sport, Mode, Landschaft und Mensch findet sich in seinen Bildern für Kunden wie
                            Odlo, Lafuma, Bogner, SportScheck, Karstadt Sport, Telekom, Mini Cooper, Payback, Sony, Warner Music u.v.m.
                        </p>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-4">

                        <p class="text-left">
                            During summer Andi is living with his family in a treehouse outside of munich that he built on his own.<br> After studying Photodesign
                            in Bielefeld he immediately worked for clients like Strellson of Switzerland, S.Oliver, Escada, Betty Barclay, BMW, Siemens etc, all
                            around the globe.<br> <br> His passion for any board that he can put under his feet, the positive energy that he gives to all people
                            who surround him and the persistent readiness to climb the farest peaks of the alps even at nighttime to capture with his camera
                            breathtaking moments with the first sunbeams, distinguish the former professional sportsman. <br> <br> This combination of sports,
                            fashion, landscape and people, you can find in pictures for his clients like Odlo, la Fuma, Bogner, Sportscheck, Karstadt Sport,
                            Telekom, Mini Cooper, Runners Point, Sony, Warner Music and lots more
                        </p>

                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2">
                        <p class="text-left">
                            <img src="/../uploads/about-me/andreas-frank.jpg" class="img-responsive" alt="Andreas Frank">
                        </p>
                    </div>


                </div>
            </div>
        </div>

        <div id="clients">
            <div class="text-block col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="client_list">
                            <?php foreach($clients as $client) { ?>
                            <li>
                                <span><?php echo $client->name ?> </span>
                            </li>
                            <?php } ?>
                        </ul>

                        <div class="clear"></div>

                    </div>

                </div>
            </div>
        </div>

        <div id="contact">
            <div class="text-center">

                <address>
                    
                </address>
            </div>

        </div>

        <div id="downloads">
            <div class="row">
                <div class="col-md-12">
                    <ul class="downloads_list">
                        <?php
                        foreach($downloads as $row) {
            ?>
                        <li>
                            <a href="<?php echo base_url()."uploads/downloads/".$row['file_name'].$row['file_type']?>"
                                title="<?php echo $row['file_name'].$row['file_type'] ?>" download>
                                <?php if(isset($row['thumb'])) { ?>
                                <img src="<?php echo base_url()."uploads/downloads/".$row['thumb'].$row['thumb_file_type']?>" width="130" height="90" />
                                <?php } ?>
                                <span><?php echo $row['file_name'] ?>
                                </span>
                            </a>

                        </li>
                        <?php } ?>
                    </ul>
                    <br>
                    <br>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</body>
</html>
