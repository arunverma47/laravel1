<?php $__env->startSection('title' ,'Book your star'); ?>
<?php $__env->startSection('content'); ?>
		<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php if($page == 'signup'): ?>
			<?php echo $__env->make('pages.auth.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($page == 'user'): ?>
			<?php echo $__env->make('pages.user-signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($page == 'star'): ?>
			<?php echo $__env->make('pages.star-signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($page == 'login'): ?>
			<?php echo $__env->make('pages.auth.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php elseif($page == 'forgot_ps'): ?>
				<?php echo $__env->make('pages.auth.forgot-ps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  	<?php else: ?>
				<?php echo $__env->make('pages.landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>

		<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>