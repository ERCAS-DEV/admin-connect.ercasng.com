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
			<li>Home></li><li>Profile Administration</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Edit Profile
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
				<h2>Profile Edit Form </h2>				
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
					<form id="smart-form-register" name="smart-form-register" class="smart-form" method="post" action ="<?php echo site_url('profile_management');?>" enctype="multipart/form-data">
						<header>User Detail form</header>
						<fieldset>
							<?php if($this->session->flashdata('error')!=''){
								echo '<div class="alert alert-warning fade in"><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i><strong>Failed!</strong> '.$this->session->flashdata('error').'
								</div>';								
							}
							if($this->session->flashdata('success')!=''){
								echo '<div class="alert alert-success fade in"><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i><strong>Success!</strong> '.$this->session->flashdata('success').'
								</div>';
							}
							?>
							<div class="row">
							<section class="col col-6">
								<label class="label">Username</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="text" name="username" placeholder="Username" value="<?php echo $user_detail[0]->username;?>" readonly>
									<b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
								</label>
							</section>
							<section class="col col-6">
								<label class="label">Login Email Address</label>
                                <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
									<input type="email" name="email" placeholder="Email address" value="<?php echo $user_detail[0]->email;?>" readonly>
									<b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
							</section>
							</div>
							<div class="row">
							<section class="col col-6">
								<label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password" placeholder="Password" id="password">
									<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
							</section>

							<section class="col col-6">
								<label class="label">Confirm Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="passwordConfirm" placeholder="Confirm password">
									<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
							</section>
							</div>
							<div class="row">
								<section class="col col-6">
									<label class="label">First Name</label>
                                    <label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="firstname" placeholder="First name" value="<?php echo $user_detail[0]->first_name;?>" ><b class="tooltip tooltip-bottom-right">Please enter your first name</b>
									</label>
								</section>
								<section class="col col-6">
									<label class="label">Last Name</label>
                                    <label class="input"><i class="icon-append fa fa-user"></i>
										<input type="text" name="lastname" placeholder="Last name" value="<?php echo $user_detail[0]->last_name;?>" ><b class="tooltip tooltip-bottom-right">Please enter your last name</b>
									</label>
								</section>
							</div>							
							<div class="row">
								
								<section class="col col-4">
									<label class="label">Phone Number</label>
                                    <label class="input"><i class="icon-append fa fa-mobile"></i>
										<input type="text" name="mobile" placeholder="Mobile No." value="<?php echo $user_detail[0]->mobile;?>"><b class="tooltip tooltip-bottom-right">Please enter your mobile no.</b>
									</label>
								</section>
								<!--<section class="col col-6">
									<label class="select">
										<select name="user_group">
											<option value="0" selected="" disabled="">Select User Group</option>
											<?php $user_group = $this->user_model->user_group();
											foreach($user_group as $ug){
											?>
											<option value="<?php //echo $ug->id;?>" <?php //if($user_detail[0]->user_group_id == $ug->id){ echo "selected";}else{}?>><?php //echo $ug->user_group;?></option>
											<?php }?>
										</select> <i></i> </label>
								</section>-->
                                <input type="hidden" name="user_group" value="<?php $user_detail[0]->user_group_id;?>">
								<section class="col col-4">
									<label class="label">Profile Image</label>
									<label class="input"><i class="icon-append fa fa-user"></i>
										<input type="file" name="pimg" placeholder="User Image" value="<?php echo $user_detail[0]->user_img;?>" ><b class="tooltip tooltip-bottom-right">Please choose your profile image</b>
									</label>
								</section>
                                
                                <?php if($user_detail[0]->user_img!=''){?>
                                <section class="col col-2">
									<label class="input">
										<a href="<?php echo site_url('../uploads/user_img/'.$user_detail[0]->user_img);?>" target="_blank"><img src="<?php echo site_url('../uploads/user_img/'.$user_detail[0]->user_img);?>" height="100" /> </a>
									</label>
								</section>
                                <?php }?>
							</div>
						</fieldset>
						<footer>
							<button type="submit" class="btn btn-primary">
								Edit Profile
							</button>
						</footer>
					</form>	
	<!--				<form name="posting_comment" id="posting_comment" enctype="multipart/form-data" method="post">
 
      <input id="file_upload" name="attachment_file" class="file_upload_icon" type="file"/>
      <input type="button" class="post postbtn" style="border: none;outline:none;" value="Post" onclick = "return sendData()"/>
</form>
-->
					
				</div>
				<!-- end widget content -->				
			</div>
			<!-- end widget div -->			
		</div>
		<!-- end widget -->
	</div>
</div>

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
				required : false,
				minlength : 3,
				maxlength : 20
			},
			passwordConfirm : {
				required : false,
				minlength : 3,
				maxlength : 20,
				equalTo : '#password'
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
			user_group : {
				required : true
			}
		},

		// Messages for form validation
		messages : {
			login : {
				required : 'Please enter your login'
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
			lastname : {
				required : 'Please select your last name'
			},
			mobile : {
				required : 'Please select your mobile no.'
			},
			user_group : {
				required : 'Please select your user group'
			}
		},

		// Do not change code below
		errorPlacement : function(error, element) {
			error.insertAfter(element.parent());
		}
	});
});
</script>
<!--

<script type="text/javascript">
function sendData()
{
    var data = new FormData($('#posting_comment')[0]);
     $.ajax({
               type:"POST",
               url:"<?php echo site_url('users/fileUpload');?>",
               data:data,
               mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
               success:function(data)
              {
				alert(data);
				  // alert("<?php echo site_url('users/fileUpload');?>");
                        console.log(data);
 
               }
       });
 
}
 
</script>-->
<?php include('footer_main.php');?>		