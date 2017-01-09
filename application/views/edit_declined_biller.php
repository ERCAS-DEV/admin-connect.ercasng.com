<?php
include('header_main.php');
include('sidebar.php');
?>
<div id="main" role="main">
	<!-- RIBBON -->
	<div id="ribbon">
		<span class="ribbon-button-alignment"> 
			<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
				<i class="fa fa-refresh"></i>
			</span> 
		</span>
		<!-- breadcrumb -->
		<ol class="breadcrumb">
			<li>Home></li><li>Biller Management</li><li>Approve Biller Setup</li><li>Declined Biller Detail</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Declined Biller Details
				</h1>
			</div>
		</div>
		<!-- Widget ID (each widget will need unique ID)-->
		<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
			<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
				data-widget-colorbutton="false"	
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true" 
				data-widget-sortable="false"
				
			-->
			<header>
				<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
				<h2>Declined Biller Details</h2>				
			</header>
			<!-- widget div-->
			<div>
				
				<!-- widget edit box -->
				<div class="jarviswidget-editbox">
					<!-- This area used as dropdown edit box -->
					
				</div>
				<!-- end widget edit box -->
				
				<!-- widget content -->
				<div class="widget-body no-padding">					
				
					<form id="smart-form-register" class="smart-form">
										
						<?php if($this->session->flashdata('error')!=''){
							echo '<section><p style="color:red;">'.$this->session->flashdata('error').'</p></section>';
						}
						?>
						<input type="hidden" name="approverId" value="<?php echo $this->session->userdata('user_id');?>">
						<input type="hidden" name="editId" value="<?php echo $biller_detail[0]->id;?>">
						
						<fieldset>
							<div class="row">
								<section class="col col-6">
								<label class="label">Company Name</label>
								<label class="input"><i class="icon-append fa fa-building"></i>
										<input type="text" name="company_name" placeholder="Company Name" value="<?php echo ucwords($biller_detail[0]->company_name);?>" readonly><b class="tooltip tooltip-bottom-right">Please enter your company name</b>
									</label>
								</section>
								<section class="col col-6">
								<label class="label">NIBBS Merchant ID</label>
									<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="text" name="merchantId" placeholder="NIBSS Merchant ID" id="merchantId" value="<?php echo $biller_detail[0]->merchantId_NIBSS;?>" readonly>
									<b class="tooltip tooltip-bottom-right">Don't forget your NIBSS Merchant ID</b> </label>
								</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">Biller Acronymn</label>
									<label class="input"><i class="icon-append fa fa-file-text-o"></i>
										<input type="text" name="biller_acronymn" placeholder="Biller Acronymn" value="<?php echo $biller_detail[0]->biller_acronymn;?>" readonly><b class="tooltip tooltip-bottom-right">Please enter your biller acronymn</b>
									</label>
								</section>
								<section class="col col-6">
									<label class="label">Biller Username</label>
									<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="text" name="username" placeholder="Username" value="<?php echo $biller_detail[0]->biller_username;?>" readonly>
									<b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
								</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">Prime Contact Name</label>
									<label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="firstname" placeholder=" Prime Contact Name" value="<?php echo ucwords($biller_detail[0]->name);?>" readonly><b class="tooltip tooltip-bottom-right">Please enter your First & Last name</b>
									</label>
								</section>
								<section class="col col-6">
									<label class="label">Prime Contact Email</label>
									<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
									<input type="email" name="email" placeholder="Prime Contact Email" value="<?php echo $biller_detail[0]->email_address;?>" readonly>
									<b class="tooltip tooltip-bottom-right">Needed to verify your account email address</b> </label>
								</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">Prime Contact Phone Number</label>
									<label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="mobile" placeholder="Prime Contact Phone Number" value="<?php echo $biller_detail[0]->mobile;?>" readonly><b class="tooltip tooltip-bottom-right">Please enter your Prime Contact Phone Number</b>
									</label>
								</section>
								<section class="col col-6">
									<label class="label">Alternative Phone No.</label>
									<label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="alternative_mobile" placeholder="Alternative Phone No." value="<?php echo $biller_detail[0]->alternative_mobile;?>" readonly><b class="tooltip tooltip-bottom-right">Please enter your alternative phone number</b>
									</label>
								</section>
							</div>					
							
							<div class="row">
								<section class="col col-6">
									<label class="label">Biller Address</label>
									<label class="input"><textarea rows="3" cols="72" name="billerAddress" placeholder="  Biller Address" id="billerAddress" class="custom-scroll" readonly>  <?php echo $biller_detail[0]->billerAddress;?></textarea>
									<b class="tooltip tooltip-bottom-right">Don't forget your Biller Address</b> </label>
								</section>
								<section class="col col-6">
									<label class="label">Biller Description</label>
									<label class="input">
									<textarea rows="3" cols="72" name="billerDescription" placeholder=" Biller Description" id="billerDescription" class="custom-scroll">  <?php echo $biller_detail[0]->billerDescription;?></textarea>
									<b class="tooltip tooltip-bottom-right">Don't forget your Description</b> </label>
								</section>								
							</div>
							
							<div class="row">
								<section class="col col-6" >
									<label class="input">ERCAS Services Listing
									</label>
									<div class="col col-6" style="margin-top: 10px;">
									<label class="checkbox state-disabled" >
									<input type="checkbox" name="service_bank_ebills" value="1" <?php if($biller_detail[0]->service_bank_ebills=='1'){ echo "checked";}else{echo "";}?> disabled>
									<i></i>Bank/Ebills</label>
									<label class="checkbox state-disabled">
									<input type="checkbox" name="service_cashpoint" value="1" <?php if($biller_detail[0]->service_cashpoint=='1'){ echo "checked";}else{echo "";}?> disabled>
									<i></i>CashPoint</label>
									<label class="checkbox state-disabled">
										<input type="checkbox" name="service_centralpay_ecommerce" value="1" <?php if($biller_detail[0]->service_centralpay_ecommerce=='1'){ echo "checked";}else{echo "";}?> disabled>
										<i></i>CentralPay/E-Commerce
									</label>
								</div>	
							</section>
							</div>
						</fieldset>
						<header>Biller Account Approval Action</header>
						<fieldset>	
							<section >
								<div >
								
								<?php
								$creator_dt = $this->user_model->user_detail($biller_detail[0]->creatorId);
								?>	
									<label class="label">Biller Created By -- <b><?php echo ucwords($creator_dt[0]->first_name.' '.$creator_dt[0]->last_name);?></b></label>
															
							</div>
							</section>
							<section>
								<div>
									<?php
								$approved_dt = $this->user_model->user_detail($biller_detail[0]->approverId);
								?>	
									<label class="label">Biller Declined By -- <b><?php echo ucwords($approved_dt[0]->first_name.' '.$approved_dt[0]->last_name);?></b></label>
								</div>
							</section>
							<section>
								<label class="label">Approver's Comment -- <?php echo $biller_detail[0]->comment;?></label>
							</section>
						</fieldset>
						<footer>
							<a href="<?php echo site_url('biller/declined_biller');?>"><button type="button" class="btn btn-primary">
								Back
							</button>
						</footer>
					</form>		
					
				</div>
				<!-- end widget content -->				
			</div>
			<!-- end widget div -->			
		</div>
		<!-- end widget -->
	</div>
</div>
<style>
.error{color:red;}
</style>
<script src="<?php echo base_url('assets/js/plugin/jquery-form/jquery-form.min.js');?>"></script>
<script type="text/javascript">
// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
	$(document).ready(function() {
		pageSetUp();
		var $registerForm = $("#smart-form-register").validate({
	
		// Rules for form validation
		rules : {
			username : {
				required : true
			},
			email : {
				required : true,
				email : true
			},
			password : {
				required : true,
				minlength : 3,
				maxlength : 20
			},
			passwordConfirm : {
				required : true,
				minlength : 3,
				maxlength : 20,
				equalTo : '#password'
			},
			firstname : {
				required : true
			},
			mobile : {
				required : true
			},
			biller_acronymn : {
				required : true
			},
			billerAddress : {
				required : true
			},
			merchantId : {
				required : true	
			}
		},

		// Messages for form validation
		messages : {
			username : {
				required : 'Please enter your username'
			},
			email : {
				required : 'Please enter your email address',
				email : 'Please enter a VALID email address'
			},
			password : {
				required : 'Please enter your password'
			},
			passwordConfirm : {
				required : 'Please enter your password one more time',
				equalTo : 'Please enter the same password as above'
			},
			firstname : {
				required : 'Please select your first name'
			},
			mobile : {
				required : 'Please select your mobile no.'
			},
			biller_acronymn : {
				required : 'Please enter your Biller Acronymn.'
			},
			billerAddress : {
				required : 'please enter your Biller Address'
			},
			merchantId : {
				required : 'Please enter your NIBSS Merchant ID'
			}
		},

		// Do not change code below
		errorPlacement : function(error, element) {
			error.insertAfter(element.parent());
		}
	});
});
</script>
<?php include('footer_main.php');?>		