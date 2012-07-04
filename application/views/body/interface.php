<div>
	<!--
	<form class="well form-search" enctype="multipart/form-data">
  		<input type="text" class="large-input">
  		<button type="submit" class="btn">Search</button>
	</form>
	-->


	<div id="div-add-image" style="display:none; margin-top:50px; margin-left: 50px; border: 1px solid #000; width: 400px; padding: 10px;">
		<form class="form-horizontal" id="form_upload_photo" action="upload" method="post" enctype="multipart/form-data">
		    <input type="file" class="input-file" id="file-image" name="file-image">
		    <br/><br/><br/>
		    <input type="submit" class="btn btn-primary" id="button-upload-photo" value="Upload Photo" />
		    <input type="button" class="btn" id="button-cancel-upload-photo" value="Cancel" />
	    </form>
	</div>

	<div id="div-image-interface" style="margin-top:50px; margin-left: 50px;">
	    <a href="#" id="a-add-image" class="btn btn-primary">Add / Replace Image</a>
	    <div id="div-image-holder" style="padding-top:10px;">
	    </div>

	    <div style="position: relative;">
 			<img src="<?php echo $image_source; ?>" id="image-main"/>
	    </div>
    </div>

<!-- 
	<div style="margin-top: 50px;">	
		<a class="btn btn-primary btn-large" data-toggle="modal" href="#form-add-image"> Add/Replace Image </a>
	</div>

	<div id="form-add-image" class="modal hide">

	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>Modal header</h3>
	  </div>
	  <div class="modal-body">
		<form class="form-horizontal" action="upload" method="post" enctype="multipart/form-data">
		    <input type="file" class="input-file" id="file-image" name="file-image">
		    <br/>
		    <input type="submit" class="btn" value="Submit" />
	    </form>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
	  </div>
	</div>
 -->
</div>