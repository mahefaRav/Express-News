<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-left">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
                            <?php foreach($listeBreaking as $liste) { ?>
							<li>
								<img src="<?php echo base_url(); ?>assets/images/<?php echo $liste['image'] ;?>.jpg" alt="">
								<div class="caption">
									<a href="#"><?php echo $liste['titre'] ;?></a>
								</div>
							</li>
                            <?php } ?>
						</ul>
					</div>
				</div>
				<div class="articles">
					<header>
						<h3 class="title-head">All around the world</h3>
					</header>

                    <?php foreach($listeArticle as $liste) { ?>
                        <div class="article">
                            <div class="article-left">
                                <a href="<?php echo base_url() ?>ficheproduits/<?php echo $liste['idarticle'] ;?>/<?php echo $liste['sortie'] ;?>/<?php echo str_replace(' ', '-',$liste['titre'])  ;?>"><img src="<?php echo base_url(); ?>assets/images/<?php echo $liste['image'] ;?>"></a>
                            </div>
                            <div class="article-right">
                                <div class="article-title">
                                    <p><?php echo $liste['sortie'] ;?> <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>104 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
                                    <a class="title" href="<?php echo base_url() ?>ficheproduits/<?php echo $liste['idarticle'] ;?>/<?php echo $liste['sortie'] ;?>/<?php echo str_replace(' ', '-',$liste['titre'])  ;?>"><?php echo $liste['titre'] ;?></a>
                                </div>
                                <div class="article-text">
                                    <p><?php echo $liste['info'] ;?></p>
                                    <a href="<?php echo base_url() ?>ficheproduits/<?php echo $liste['idarticle'] ;?>/<?php echo $liste['sortie'] ;?>/<?php echo str_replace(' ', '-',$liste['titre'])  ;?>"><img src="<?php echo base_url(); ?>assets/images/css_sprites.png" style="object-fit:none; object-position: -285px -130px; width: 35px; height: 35px;" alt="" /></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
					
				</div>

				</div>
			<div class="col-md-4 side-bar">
			<div class="first_half">
				
					 <div class="side-bar-articles">
						<div class="side-bar-article">
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/sai.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/sai2.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">There are many variations of passages of Lorem</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/sai3.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
							</div>
						</div>
					 </div>
					 </div>

					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>