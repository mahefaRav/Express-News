	<!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="index.html">Home</a></li>
			  <li class="active">Business</li>
			</ol>
			<div class="col-md-8 content-left">
			<div class="articles sports">
					<header>
						<h3 class="title-head">Business</h3>
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
				<div class="latest-articles">
							<div class="main-title-head">
								<header>
									<h3 class="title-head">What's Hot</h3>
								</header>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grid">
									<img src="images/tech1.jpg" alt="" />
									<a href="single.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
								</div>
								<div class="world-news-grid">
									<img src="images/tech5.jpg" alt="" />
									<a href="single.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
								</div>
								<div class="world-news-grid">
									<img src="images/tech6.jpg" alt="" />
									<a href="single.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- content-section-ends-here -->