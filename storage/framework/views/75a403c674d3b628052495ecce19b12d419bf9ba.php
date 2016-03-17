<?php $__env->startSection('content'); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/screenshot.png" alt="125x125">
					<div class="caption">
						<h3>SKT Bakery</h3>
						<p>
							<a href="#" class="btn btn-primary" role="button">Buy Now</a>
							<a href="#" class="btn btn-default" role="button">$49</a>
							<a href="/productDetail" class="btn btn-default" role="button">Live Demo</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/screenshot-1.png" alt="125x125">
					<div class="caption">
						<h3>AccessPress Store</h3>
						<p>
							<a href="#" class="btn btn-primary" role="button">Buy Now</a>
							<a href="#" class="btn btn-default" role="button">$49</a>
							<a href="/productDetail" class="btn btn-default" role="button">Live Demo</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/screenshot-2.png" alt="125x125">
					<div class="caption">
						<h3>Kraft Lite</h3>
						<p>
							<a href="#" class="btn btn-primary" role="button">Buy Now</a>
							<a href="#" class="btn btn-default" role="button">$49</a>
							<a href="/productDetail" class="btn btn-default" role="button">Live Demo</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>