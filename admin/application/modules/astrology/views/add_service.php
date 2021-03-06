<!-- Chosen -->
<link href="<?php echo ASSETS; ?>css/chosen/chosen.min.css" rel="stylesheet"/>

<!-- Datepicker -->
<link href="<?php echo ASSETS; ?>css/datepicker.css" rel="stylesheet"/>

<!-- Timepicker -->
<link href="<?php echo ASSETS; ?>css/bootstrap-timepicker.css" rel="stylesheet"/>

<!-- Slider -->
<link href="<?php echo ASSETS; ?>css/slider.css" rel="stylesheet"/>

<!-- Tag input -->
<link href="<?php echo ASSETS; ?>css/jquery.tagsinput.css" rel="stylesheet"/>

<!-- WYSIHTML5 -->
<link href="<?php echo ASSETS; ?>css/bootstrap-wysihtml5.css" rel="stylesheet"/>

<!-- Dropzone -->
<link href='<?php echo ASSETS; ?>css/dropzone/dropzone.css' rel="stylesheet"/>

<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index-2.html"> Astrology Management</a></li>
					 <li class="active">Add Service</li>	 
				</ul>
			</div><!-- breadcrumb -->
			<div class="padding-md">
				<div class="row">	
				<?php if($this->session->flashdata('success')){ ?>
					<div class="alert alert-success">
						<strong>Well done!</strong> <?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php } ?>
					<?php if($this->session->flashdata('error')){ ?>
					<div class="alert alert-danger">
						<strong>Oh snap!</strong> <?php echo $this->session->flashdata('error'); ?>
					</div>
				<?php } ?>	
				<?php
					$csrf = array(
					        'name' => $this->security->get_csrf_token_name(),
					        'hash' => $this->security->get_csrf_hash()
					);
				?>		
				<div class="col-md-4">		
					<div class="col-md-12">						
						<div class="panel panel-default">
							<div class="panel-heading">Add Service</div>
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>astrology/add_service/" enctype="multipart/form-data">									
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Name</label>
										<div class="col-lg-10">
											<input type="text" name="name" class="form-control input-sm" id="inputEmail1" placeholder="Enter name" required>
											<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
										</div><!-- /.col -->
									</div><!-- /form-group --> 

									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Description</label>
										<div class="col-lg-10">
											<textarea name="description" class="form-control input-sm" id="inputEmail1" placeholder="Enter description" rows="7" required></textarea>											
										</div><!-- /.col -->
									</div><!-- /form-group --> 

									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Type</label>
										<div class="col-lg-10">									
											<select name="service_type" class="form-control input-sm" required>											
												<option value="">[select]</option>
												<option value="1">Horoscope</option>
												<option value="2">Match Making</option>
											</select>
										</div><!-- /.col -->
									</div><!-- /form-group -->	

									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Amount</label>
										<div class="col-lg-10">
											<input type="text" name="amount" class="form-control input-sm" id="inputEmail1" placeholder="Enter amount" max="10" required>
										</div><!-- /.col -->
									</div><!-- /form-group -->	

									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Discount</label>
										<div class="col-lg-10">
											<input type="text" name="discount" class="form-control input-sm" id="inputEmail1" placeholder="Enter discount" required>
										</div><!-- /.col -->
									</div><!-- /form-group -->	

									<div class="form-group">
										<label class="control-label col-lg-2">Image</label>
										<div class="col-lg-10">								
												<input name="file" type="file" role="button" data-toggle="modal" id="upload" class="form-control input-sm" multiple />	<br/>
												<img src="" id="imggg" width="100%" height="auto" />
												<input type="hidden" name="popimage" id="popimage" />

												<div class="modal fade" id="EnSureModal" role="dialog">
												    <div class="modal-dialog">
												        <div class="modal-content">
												            <div class="modal-header">
												                <button type="button" class="close" data-dismiss="modal">&times;</button>
												                <h4 class="modal-title">Upload Image </h4>
												            </div>
												            <div class="modal-body">
												                <div class="upload-demo" style="margin-bottom: 50px;width: 100%;height: auto;"></div>	
												            </div>
												            <div class="modal-footer">
												                <button type="button" class="btn btn-default upload-result" data-dismiss="modal" >Upload</button>
												                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												            </div>
												        </div>
												    </div>
												</div>
									  	</div>													
									</div><!-- /.col -->

									<div class="form-group">
										<label class="control-label col-lg-2">Sample</label>
										<div class="col-lg-10">								
												<input name="file1" type="file" class="form-control input-sm" multiple />
									  	</div>													
									</div><!-- /.col -->

																					

									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Add Service</button>
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->					
				</div>

				<div class="col-md-8">		
					<div class="col-md-12">						
						<div class="panel panel-default">
							<div class="panel-heading">List Service</div>
							<div class="panel-body">
								<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Image</th>
										<th>Type</th>
										<th>Amount</th>
										<th>Price</th>
										<th>Sample</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>									
									<?php if(count($service)> 0){ ?>
									<?php foreach($service as $key => $list) { ?>
									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $list->name; ?></td>
										<td><img src="<?php echo SITE_URL; ?>assets/services/image/<?php echo $list->image; ?>" width="50px"/></td>
										<td><?php if($list->service_type == 1) echo "Horoscope"; else echo "Match Making"; ?></td>	
										<td><?php echo $list->amount; ?></td>
										<td><?php echo $list->discount; ?></td>	
										<td><a href="<?php echo SITE_URL; ?>assets/services/<?php echo $list->sample_pdf; ?>" target="blank">Download</a></td>										
										<td><a href="#EditModal<?php echo $list->id; ?>" role="button" data-toggle="modal"><span class="badge badge-warning">Edit</span></a>
											<a href="#deleteModal<?php echo $list->id; ?>" role="button" data-toggle="modal"><span class="badge badge-danger">Delete</span></a></td>
									</tr>
									<tr><td colspan="8"><?php echo $list->description; ?></td></tr>

									<div class="modal fade" id="deleteModal<?php echo $list->id; ?>">
										<div class="modal-dialog">
											<div class="modal-content">
								  				<div class="modal-header">
								    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4>Delete Service</h4>
								  				</div>
											    <div class="modal-body">
											        <p>Are you sure you want to delete this item?</p>	        
											    </div>
											    <div class="modal-footer">
											        <a href="<?php echo base_url(); ?>astrology/delete_service/<?php echo $list->id; ?>/<?php echo $list->sample_pdf; ?>"><button class="btn btn-sm btn-success" aria-hidden="true">Yes</button></a>	
											        <button class="btn btn-sm btn-danger" data-dismiss="modal" aria-hidden="true">No</button>
											    </div>
										  	</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->
										
									<div class="modal fade" id="EditModal<?php echo $list->id; ?>">
										<div class="modal-dialog">
											<div class="modal-content">
								  				<div class="modal-header">
								    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4>Edit Service</h4>
								  				</div>
											    <div class="modal-body">
										       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>astrology/edit_service/" enctype="multipart/form-data">	
													<div class="form-group">
													<label for="inputEmail1" class="col-lg-2 control-label">Name</label>
													<div class="col-lg-10">
														<input type="text" name="name" value="<?php echo $list->name; ?>" class="form-control input-sm" id="inputEmail1" placeholder="Enter name" required>
														<input type="hidden" name="id" value="<?php echo $list->id; ?>" />
														<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
													</div><!-- /.col -->
												</div><!-- /form-group -->

												<div class="form-group">
													<label for="inputEmail1" class="col-lg-2 control-label">Description</label>
													<div class="col-lg-10">
														<textarea name="description" class="form-control input-sm" id="inputEmail1" placeholder="Enter description" rows="7" required><?php echo $list->description; ?></textarea>											
													</div><!-- /.col -->
												</div><!-- /form-group -->  

												<div class="form-group">
													<label for="inputEmail1" class="col-lg-2 control-label">Type</label>
													<div class="col-lg-10">									
														<select name="service_type" class="form-control input-sm" required>											
															<option value="">[select]</option>
															<option value="1" <?php if($list->service_type == 1){echo "selected";} ?>>Horoscope</option>
															<option value="2" <?php if($list->service_type == 2){echo "selected";} ?>>Match Making</option>
														</select>
													</div><!-- /.col -->
												</div><!-- /form-group -->	

												<div class="form-group">
													<label for="inputEmail1" class="col-lg-2 control-label">Amount</label>
													<div class="col-lg-10">
														<input type="text" name="amount" value="<?php echo $list->amount; ?>" class="form-control input-sm" id="inputEmail1" placeholder="Enter amount" max="10" required>
													</div><!-- /.col -->
												</div><!-- /form-group -->	

												<div class="form-group">
													<label for="inputEmail1" class="col-lg-2 control-label">Discount</label>
													<div class="col-lg-10">
														<input type="text" name="discount" class="form-control input-sm" value="<?php echo $list->discount; ?>" id="inputEmail1" placeholder="Enter discount" required>
													</div><!-- /.col -->
												</div><!-- /form-group -->	

												<div class="form-group">
													<label class="control-label col-lg-2">Upload</label>
													<div class="col-lg-10">								
														<input name="file" type="file" atr="<?php echo $list->id; ?>" class="form-control input-sm upload1" multiple />
														<input type="hidden" name="oldimage" value="<?php echo $list->image; ?>" />
														<img src="" class="imggg1" width="100%" height="auto" />
														<input type="hidden" name="popimage1" class="popimage1" />
													</div>													
												</div>

												    
												    <div class="modal-footer">
												        <button class="btn btn-sm btn-success upload-result1" type="submit" aria-hidden="true">Save Changes</button>
												        <button class="btn btn-sm btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>	
											    	</div>
									    		</form>
										  	</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->

						















									<?php } } else { ?>
									<tr>
										<td colspan="6" style="color:red;text-align:center">No records found</td>										
									</tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
						</div><!-- /panel -->

						
					</div><!-- /.col -->					
				</div>							
			</div>
		</div>
	</div><!-- /main-container -->
</div><!-- /wrapper -->


<script src="<?php echo SITE_URL; ?>assets/site_assets/js/jquery.min.js"></script>
<script src="<?php echo SITE_URL; ?>assets/site_assets/cropping/croppie.js"></script>

<script type="text/javascript">

function readFile(input)
{
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
			$('.upload-demo').addClass('ready');
        	$uploadCrop.croppie('bind', {
        		url: e.target.result
        	}).then(function(){
        		$('.cr-slider').show();
        		$('.croppie-container').css('width','100%').css('height','250px');
        	});
        	
        }
        
        reader.readAsDataURL(input.files[0]);
    }
    else {
        alert("Sorry - you're browser doesn't support the FileReader API");
    }
}

$uploadCrop = $('.upload-demo').croppie({
	viewport: {
		width: 300,
		height: 200,
		type: 'rectangle'
	},
	enableExif: true
});

var abce = null;
$('#upload').on('change', function () { $('#EnSureModal').modal();readFile(this); });

$('.upload1').on('change', function () { 

	var id = $(this).attr('atr');
	abce = id;
	$('#EditModal'+id).modal('hide');
	$('#EnSureModal').modal();
	readFile(this);

 });

$('.upload-result').on('click', function (ev) {

	$uploadCrop.croppie('result', {

		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {		
		if(abce  == null)
		{	
			$('#imggg').attr('src',resp);
			$('#popimage').val(resp);
			$('#EnSureModal').modal('toggle');
		}
		else
		{
			$('.imggg1').attr('src',resp);
			$('.popimage1').val(resp);		
			$('#EnSureModal').modal('hide');
			$('#EditModal'+abce).modal('show');
		}
	});
});

</script>