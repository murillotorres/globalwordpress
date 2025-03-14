<?php get_header(); ?>

<section>
	<div class="banner">
		<?php while(have_rows('banners')) : the_row();?>
			<div class="item">
				<img src="<?php the_sub_field('imagem_desktop'); ?>" alt="" class="desktop">
				<img src="<?php the_sub_field('imagem_mobile'); ?>" alt="" class="mobile">
				<div class="container wow fadeInUp start-hidden" data-wow-delay="0.5s">
					<div class="row col-12">
						<div class="col-lg-6">
							<h1 class="title"><?php the_sub_field('titulo'); ?></h1>
							<p><?php the_sub_field('descricao'); ?></p>
							<a href="#" class="btn btn-primary">Comece Agora</a>
						</div>
					</div>
				</div>
			</div>
    	<?php endwhile; ?>
	</div>
</section>

<section>
	<div class="about">
		<div class="packages">
			<div class="container">
				<div class="packages-app">
					<?php $a = 0; while(have_rows('pacotes')) : the_row(); $a = ($a + 0.5); ?>
						<div class="item wow fadeInUp start-hidden" data-wow-delay="<?= $a ?>s">
							<a href="<?php the_sub_field('url'); ?>" class="content">
								<img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
								<h2><?php the_sub_field('titulo'); ?></h2>
								<p><?php the_sub_field('descricao'); ?></p>
								<span>Saiba Mais</span>
							</a>
						</div>
                	<?php endwhile; ?>
				</div>
			</div>
		</div>

		<div class="container" id="quemsomos">
			<div class="row justify-content-between align-items-start">
				<div class="col-lg-5 download wow fadeInUp">
					<img alt="Download Ebook" src="<?php the_field('imagem_download'); ?>" class="img">
					<p><?php the_field('descricao'); ?></p>
					<a href="<?php the_field('url_download'); ?>" download><img src="<?= get_template_directory_uri() ?>/assets/img/download.png" alt="Download" class="d-block me-3">Faça o Download</a>
				</div>
				<div class="col-lg-6 texto wow fadeInRight" data-wow-delay="0.5s">
					<?php the_field('sobre_a_empresa'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="focus">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-12">
					<h2 class="title text-center mb-5"><?php the_field('titulo_foco'); ?></h2>
				</div>

				<?php while(have_rows('itens_foco')) : the_row();?>
					<div class="col-lg-4 col-6 mb-5">
						<div class="content">
							<div class="img"><img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('texto'); ?>"></div>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
            	<?php endwhile; ?>
				
				<div class="col-lg-4">
					<div class="content">
						<h3><?php the_field('texto_final'); ?></h3>
						<a href="<?php the_field('url_final'); ?>" class="btn btn-secondary">Comece Agora</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="teach">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-lg-6">
					<?php the_field('conteudo'); ?>
				</div>
				<div class="col-lg-6">
					<img src="<?php the_field('imagem_ensinamentos'); ?>" class="img" alt="Educação Financeira">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>