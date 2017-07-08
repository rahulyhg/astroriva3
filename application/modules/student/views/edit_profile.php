<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">				
				<div class="col-md-9 col-sm-7 blog-content" style="margin-top: -78px;">
					<div class="replay-box">
						<div class="row">
							<div class="col-md-12">
								<h3>Edit Profile</h3>
								<?php if($this->session->flashdata('error')){ ?>
								<div style="padding:10px;background:#f8dcdc;color:red;margin-bottom:10px;text-align:center;border:1px solid red"><?php echo $this->session->flashdata('error'); ?></div>
								<?php } ?>
								<?php if($this->session->flashdata('success')){ ?>
								<div style="padding:10px;background:#c1f8c6;color:green;margin-bottom:10px;text-align:center;border:1px solid green"><?php echo $this->session->flashdata('success'); ?></div>
								<?php } ?>
								<form id="comment-form" class="row" name="comment-form" method="post" action="">

									<div class="col-md-6">

										<div class="form-group">
											<label>Name</label>
											<input type="text" name="name" class="form-control" required="required"  value="<?php echo $all_data->name; ?>">

										</div>										

										<div class="form-group">
											<label>Phone</label>
											<input type="number" name="phone" class="form-control" required="required" maxlength="10" value="<?php echo $all_data->phone; ?>">
										</div>

										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control" required="required" value="<?php echo $all_data->email; ?>">
										</div>											

									</div>

									<div class="col-md-6">

										<div class="form-group">
											<label>Date of Birth</label>
											<input type="text" name="dob" class="form-control datepicker" required="required" value="<?php echo $all_data->dob; ?>">

										</div>							

										<div class="form-group">
											<label>Time of Birth</label>
											<input type="text" name="tob" class="form-control" required="required" value="<?php echo $all_data->tob; ?>">

										</div>

										<div class="form-group">
											<label>Place of Birth</label>
											<input type="text" name="pob" class="form-control" required="required" value="<?php echo $all_data->pob; ?>">

										</div>
									</div>
									<div class="col-md-12">	
										<div class="form-group">
											<button type="submit" class="btn btn-default pull-right">Submit</button>
										</div>
									</div>
									

								</form>
							</div>
						</div>
					</div><!--/Repaly Box-->					
				</div>
				</div>
		</div>
	</section>
				