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
			<li>Home</li><li>Biller Management</li><li>Edit Biller Account</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Edit Biller Account
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
				<h2>Biller Edit form </h2>				
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
					<form id="smart-form-register" class="smart-form" method="post" action ="<?php echo site_url('biller/edit_biller/'.$biller_detail[0]->id);?>" enctype="multipart/form-data">
					<header>Edit Biller Account - <strong><?php echo $biller_detail[0]->company_name;?></strong></header>						
						
						<!--<input type="hidden" name="approverId" value="<?php echo $this->session->userdata('user_id');?>">-->
						<input type="hidden" name="editId" value="<?php echo $biller_detail[0]->id;?>">
							
                        <fieldset>
                        	<?php 
							if($this->session->flashdata('error')!='')
							{
								echo '<div class="alert alert-warning fade in"><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i><strong>Failed!</strong> '.$this->session->flashdata('error').'
								</div><br />';								
							}
							if($this->session->flashdata('success')!='')
							{
								echo '<div class="alert alert-success fade in"><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i><strong>Success!</strong> '.$this->session->flashdata('success').'
								</div><br />';
							}
							?>
                            
							<div class="row">
								<section class="col col-4">
								<label class="label">Biller Company Name (<em><strong>uneditable</strong></em>)</label>
								<label class="input"><i class="icon-append fa fa-building"></i>
										<input type="text" name="company_name" disabled="disabled" placeholder="Company Name" value="<?php echo ucwords($biller_detail[0]->company_name);?>" ></label>
								</section>
								<section class="col col-4">
								<label class="label">NIBBS Merchant ID (<em><strong>uneditable</strong></em>)</label>
									<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="text" name="merchantId" disabled="disabled" placeholder="NIBSS Merchant ID" id="merchantId" value="<?php echo $biller_detail[0]->merchantId_NIBSS;?>" readonly> </label>
								</section>
								<section class="col col-4">
									<label class="label">Biller Abbreviation (<em><strong>uneditable</strong></em>)</label>
									<label class="input"><i class="icon-append fa fa-file-text-o"></i>
										<input type="text" name="biller_acronymn" disabled="disabled" placeholder="Biller Acronymn" value="<?php echo $biller_detail[0]->biller_acronymn;?>" readonly> </label>
								</section>
							</div>
							<div class="row">
								<section class="col col-4">
									<label class="label">Biller ERCAS Prime Account Username (<em><strong>uneditable</strong></em>)</label>
									<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="text" name="username" disabled="disabled" placeholder="Username" value="<?php echo $biller_detail[0]->biller_username;?>" readonly> </label>
								</section>
								<section class="col col-4">
									<label class="label">Prime Contact Name (<em><strong>uneditable</strong></em>)</label>
									<label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="firstname" disabled="disabled" placeholder=" Prime Contact Name" value="<?php echo ucwords($biller_detail[0]->name);?>" readonly> </label>
								</section>
								<section class="col col-4">
									<label class="label">Prime Contact Email (<em><strong>uneditable</strong></em>)</label>
									<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
									<input type="email" name="email" disabled="disabled" placeholder="Prime Contact Email" value="<?php echo $biller_detail[0]->email_address;?>" readonly> </label>
								</section>
							</div>
                            <br /><hr /><br />
							<div class="row">
								<section class="col col-3">
									<label class="label">Prime Contact Phone Number</label>
									<label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="mobile" placeholder="Prime Contact Phone Number" value="<?php echo $biller_detail[0]->mobile;?>" ><b class="tooltip tooltip-bottom-right">Prime contact phone number goes here...</b>
									</label>
								</section>
								<section class="col col-3">
									<label class="label">Alternative Phone No.</label>
									<label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="alternative_mobile" placeholder="Alternative Phone No." value="<?php echo $biller_detail[0]->alternative_mobile;?>" ><b class="tooltip tooltip-bottom-right">Alternative phone number goes here...</b>
									</label>
								</section>
								<section class="col col-3">
									<label class="label">Biller Description</label>
									<label class="input">
                                    	<input type="text" name="billerDescription" placeholder=" Biller Description" id="billerDescription" value="<?php echo $biller_detail[0]->billerDescription;?>" ><b class="tooltip tooltip-bottom-right">Biller description goes in here</b> </label>
								</section>
								<?php if($biller_detail[0]->service_centralpay_ecommerce=='1'):?>
								<section class="col col-3">
									<label class="label">NIBSS Secret key</label>
									<label class="input">
                                    	<input type="text" name="secretId" placeholder=" Secret key" id="secretId" value="<?php echo $biller_detail[0]->secretId;?>" ><b class="tooltip tooltip-bottom-right">Biller description goes in here</b> </label>
								</section>
								<?php endif; ?>
							</div>					
							<br />
							<div class="row">
                                <section class="col col-4">
									<label class="label"><strong>Biller Address</strong></label>
									<label class="input"><textarea rows="4" cols="45" name="billerAddress" placeholder="Biller Address" id="billerAddress" class="custom-scroll" ><?php echo $biller_detail[0]->billerAddress;?></textarea> </label>
								</section>	
								<section class="col col-5" >
                                    <label class="input"><em><strong>ERCAS Services Listing</strong></em></label>
                                    <hr />
                                    <div class="inline-group" style="margin-top: 10px;">
                                        <label class="checkbox">
                                            <input type="checkbox" name="service_bank_ebills" value="1" <?php if($biller_detail[0]->service_bank_ebills=='1'){ echo "checked";}else{echo "";}?> >
                                            <i></i>ERCASPay</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="service_cashpoint" value="1" <?php if($biller_detail[0]->service_cashpoint=='1'){ echo "checked";}else{echo "";}?> >
                                            <i></i>ERCASPOS</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="service_centralpay_ecommerce" value="1" <?php if($biller_detail[0]->service_centralpay_ecommerce=='1'){ echo "checked";}else{echo "";}?> >
                                            <i></i>ERCASCentral</label>
                                    </div>
                                </section>
                                	
                                <section class="col col-3">
                                    <label class="label"><em><strong>Biller Logo</strong></em></label>
                                    <label class="input"><i class="icon-append fa fa-file-photo-o"></i>
										<input type="file" name="pimg" placeholder="Biller Logo" value="<?php echo $biller_detail[0]->company_logo;?>" ><b class="tooltip tooltip-bottom-right">Please choose your profile image</b>
									</label>
                                    <br/>
                                    <?php if($biller_detail[0]->company_logo!=''){?>
                                    <img src="<?php echo site_url('../uploads/biller_logo/'.$biller_detail[0]->company_logo);?>" height="50" />
                                    <?php }?>
                                </section>	
                                					
							</div>
							
							<div class="row">
                                
                            	
							</div>
						</fieldset>
                        
						<footer>
							<button type="submit" class="btn btn-primary">
								Update Biller
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
			},
			secretId : {
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
			},
			merchantId : {
				required : 'Please enter CentralPay NIBSS secret Key'
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