<div class="templatemo-team1" id="templatemo-service1"><!-- /.product- -->
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">MOBILE APPS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <!-- Carousel -->
                    <section id="dg-containers" class="dg-containers">
                    <div class="dg-wrapper">
                    <?php
						$mobileSql = "SELECT * FROM pagemobiles ORDER BY mobileid ASC";
						$mobileQry = mysql_query($mobileSql, $koneksi) or die ("Query mobiles salah : ".mysql_error());
						
							while ($mobileRow = mysql_fetch_array($mobileQry)) {
					?>
                        <a href="#"><img src="images/<?php echo $mobileRow['picture']; ?>" alt="image01"><div><?php echo $mobileRow['content']; ?></div></a>
                    <?php
							}
					?>
                    </div>
                    <nav>	
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav>
                </section>
                </div>
            </div><!-- /.container -->
        </div><!-- /.templatemo-team1 -->


		<div class="templatemo-team1" id="templatemo-service2"><!-- /.product- -->
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">DESKTOP APPS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <!-- Carousel -->
                    <section id="dg-container2" class="dg-containers">
                    <div class="dg-wrapper">
                    <?php
						$desktopSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC";
						$desktopQry = mysql_query($desktopSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
						
							while ($desktopRow = mysql_fetch_array($desktopQry)) {
					?>
                        <a href="#"><img src="images/<?php echo $desktopRow['picture']; ?>" alt="image01"><div><?php echo $desktopRow['content']; ?></div></a>
                    <?php
							}
					?>
                    </div>
                    <nav>	
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav>
                </section>
                </div>
            </div><!-- /.container -->
        </div><!-- /.templatemo-team1 -->
        
        <div class="templatemo-team1" id="templatemo-service3"><!-- /.product- -->
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">WEB DESIGNS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <!-- Carousel -->
                    <section id="dg-container3" class="dg-containers">
                    <div class="dg-wrapper">
                    <?php
						$webSql = "SELECT * FROM pagewebs ORDER BY webid ASC";
						$webQry = mysql_query($webSql, $koneksi) or die ("Query web salah : ".mysql_error());
						
							while ($webRow = mysql_fetch_array($webQry)) {
					?>
                        <a href="#"><img src="images/<?php echo $webRow['picture']; ?>" alt="image01"><div><?php echo $webRow['content']; ?></div></a>
                    <?php
							}
					?>
                    </div>
                    <nav>	
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav>
                </section>
                </div>
            </div><!-- /.container -->
        </div><!-- /.templatemo-team1 -->