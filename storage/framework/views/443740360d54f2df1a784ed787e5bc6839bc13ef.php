<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        <?php if(Session::has('success')): ?>
          <div class="alert-box success">
          <h2><?php echo Session::get('success'); ?></h2>
          </div>
        <?php endif; ?>
        <div class="secure">Upload form</div>
        <?php echo Form::open(array('url'=>'public/img','method'=>'POST', 'files'=>true)); ?>

         <div class="control-group">
          <div class="controls">
          <?php echo Form::file('image'); ?>

        	<p class="errors"><?php echo $errors->first('image'); ?></p>
        	<?php if(Session::has('error')): ?>
        	<p class="errors"><?php echo Session::get('error'); ?></p>
        	<?php endif; ?>
        </div>
        </div>
        <div id="success"> </div>
      <?php echo Form::submit('Submit', array('class'=>'send-btn')); ?>

      <?php echo Form::close(); ?>

      </div>
   </div>
</div>
