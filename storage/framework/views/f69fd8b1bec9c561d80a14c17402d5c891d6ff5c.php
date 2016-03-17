
<section>
  <div class="container">
  
      <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
      <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title">

        </div>
      </div>
      <div class="form-group">
        <label for="inputDescription" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputDescription" name="description" placeholder="Description">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPrice" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Price">
        </div>
      </div>
      <div class="form-group">
        <label for="inputOldPrice" class="col-sm-2 control-label">Old price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputOldPrice" name="old_price" placeholder="Old price">
        </div>
      </div>
      <div class="form-group">
        <label for="inputCurrency" class="col-sm-2 control-label">Currency</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputCurrency" name="currency" placeholder="Currency">
        </div>
      </div>
      <div class="form-group">
        <label for="inputImg-url" class="col-sm-2 control-label">Img_url</label>
        <div class="col-sm-10">
          <input type="file" name="img_url" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputField-path" class="col-sm-2 control-label">File_path</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputField-path" name="file_path" placeholder="File_path">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Submit">
          <a class="btn btn-default" href="/admin/adminproductdata" role="button">Show Product data</a>
      </div>
  </div>
<?php echo Form::close(); ?>

</section>
