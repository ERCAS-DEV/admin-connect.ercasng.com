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
			<li>Home</li><li>Support Center</li><li>Support Messaging</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Support Message
					<span>> New Ticket</span>
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
				<h2>New Ticket form </h2>				
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
					<form id="smart-form-register" class="smart-form" method="post" action ="<?php echo site_url('tickets/new_tickets');?>">
						<header>New Ticket Form</header>						
							<?php if($this->session->flashdata('error')!=''){
								echo '<section><p style="color:red;">'.$this->session->flashdata('error').'</p></section>';
							}?>
						<fieldset>
							
							<div class="row">
								<section class="col col-6">
									<label class="label">First Name</label>
									<label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="firstname" placeholder="First name"><b class="tooltip tooltip-bottom-right">Please enter your first name</b>
									</label>
								</section>
								<section class="col col-6">
									<label class="label">Last Name</label>
									<label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="lastname" placeholder="Last name"><b class="tooltip tooltip-bottom-right">Please enter your last name</b>
									</label>
								</section>
							</div>							
							<div class="row">
								<section class="col col-6">
									<label class="label">Email Address</label>
									<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
									<input type="email" name="email" placeholder="Email address">
									<b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
								</section>
								<section class="col col-6">
									<label class="label">Mobile no.</label>
									<label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="mobile" placeholder="Mobile No."><b class="tooltip tooltip-bottom-right">Please enter your mobile number</b>
									</label>
								</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">Issue Title</label>
									<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
									<input type="text" name="issue_title" placeholder="Issue Title">
									<b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
								</section>
								<section class="col col-6">
									<label class="label">Issue Description</label>
									<label class="input">
										<textarea class="custom-scroll" rows="2" cols="73" name="issue_desc" placeholder="
										Issue Description">
										</textarea>
									</label>
								</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">Choose Biller</label>
									<label class="select"><select name="biller_id">
											<option value="0" selected="" disabled="">Choose Biller</option>
											<?php $biller = $this->biller_model->approved_biller_listing();
											foreach($biller as $billerlst){
											?>
											<option value="<?php echo $billerlst->id;?>"><?php echo $billerlst->company_name;?></option>
											<?php }?>
										</select> 
									</label>
								</section>
							</div>
						</fieldset>
						<footer>
							<button type="submit" class="btn btn-primary">
								Create Ticket
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
			email : {
				required : true,
				email : true
			},
			firstname : {
				required : true
			},
			lastname : {
				required : true
			},
			mobile : {
				required : true
			},
			issue_title : {
				required : true
			},
			issue_desc : {
				required : true
			},
			biller_id: {
				required : true
			}
		},

		// Messages for form validation
		messages : {
			email : {
				required : 'Please enter your email address',
				email : 'Please enter a VALID email address'
			},			
			firstname : {
				required : 'Please enter your first name'
			},
			lastname : {
				required : 'Please enter your last name'
			},
			mobile : {
				required : 'Please enter your mobile no.'
			},
			issue_title : {
				required : 'Please enter the issue title'
			},
			issue_desc :{
				required : 'Please enter the issue description'			
			},
			biller_id: {
				required : 'Please select the biller'
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