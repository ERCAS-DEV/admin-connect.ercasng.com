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
			<li>Home</li><li>Biller Management</li><li>Create New Biller</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Biller Registration
					<span>> Create New Biller</span>
				</h1>
			</div>
		</div>
		<!-- Widget ID (each widget will need unique ID)-->
        
        <div class="row">
            <article class="col-sm-12 col-md-12 col-lg-8">
    
                <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Biller Registration form </h2>				
                    </header>
                    <!-- widget div-->
                    <div>
                        
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                        </div>
                        <div class="widget-body no-padding">					
                            <form id="smart-form-register" class="smart-form" method="post" action ="<?php echo site_url('biller/add_secretkey');?>">
                            <header>Enter Biller NIBSS CentralPay Secret Key</header>						
                                <?php if($this->session->flashdata('error')!=''){
                                    echo '<section><p style="color:red;">'.$this->session->flashdata('error').'</p></section>';
                                }?>
                                <input type='hidden' name="last_insert_id" value="<?php echo $last_inserted_id; ?>" >
                                <input type="hidden" name="creatorId" value="<?php echo $this->session->userdata('user_id');?>">
                                <fieldset>
                                    <div class="row">
<!--                                         <section class="col col-6">
                                            <label class="input"><i class="icon-append fa fa-building"></i>
                                                <input type="text" name="merchantid" placeholder="NIBSS Merchant ID"><b class="tooltip tooltip-bottom-right">Please enter Merchant id...</b>
                                            </label>
                                        </section> -->
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="text" name="secretId" placeholder="NIBSS Secret key" id="merchantId">
                                            <b class="tooltip tooltip-bottom-right">Don't forget your NIBSS Secret Key</b> </label>
                                        </section>
                                    </div>
<!--                                     
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"><i class="icon-append fa fa-file-text-o"></i>
                                                <input type="text" name="biller_acronymn" placeholder="Biller Acronymn"><b class="tooltip tooltip-bottom-right">Please enter your biller acronymn</b>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="text" name="username" placeholder="Username">
                                            <b class="tooltip tooltip-bottom-right">Provide prime username for biller</b> </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password" placeholder="Password" id="password">
                                            <b class="tooltip tooltip-bottom-right">Password goes here...</b> </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="passwordConfirm" placeholder="Confirm password">
                                            <b class="tooltip tooltip-bottom-right">Retype Password</b> </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"><i class="icon-append fa fa-user"></i>
                                                <input type="text" name="firstname" placeholder="Prime contact name"><b class="tooltip tooltip-bottom-right">Please enter your first & last name</b>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                            <input type="email" name="email" placeholder="Prime Contact Email">
                                            <b class="tooltip tooltip-bottom-right">Needed to validate biller account</b> </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"><i class="icon-append fa fa-mobile"></i>
                                                <input type="text" name="mobile" placeholder="Prime Contact Phone Number"><b class="tooltip tooltip-bottom-right">Please enter phone number for prime contact</b>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input"><i class="icon-append fa fa-mobile"></i>
                                                <input type="text" name="alternative_mobile" placeholder="Alternative Phone No."><b class="tooltip tooltip-bottom-right">Please enter an alternative phone number if any for biller</b>
                                            </label>
                                        </section>
                                    </div>					
                                    
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"><textarea rows="4" cols="45" name="billerAddress" placeholder="  Biller Address" id="billerAddress" class="custom-scroll"></textarea>
                                            <b class="tooltip tooltip-bottom-right">Biller address goes here...</b> </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input">
                                            <textarea rows="4" cols="45" name="billerDescription" placeholder="  Description" id="billerDescription" class="custom-scroll"></textarea>
                                            <b class="tooltip tooltip-bottom-right">Please provide with a brief description of biller</b> </label>
                                        </section>								
                                    </div>
                                    <div class="row">
                                        <section class="col col-7" >
                                            <label class="input"><em><strong>Select ERCAS Services</strong></em></label>
                                            <hr />
                                            <div class="inline-group" style="margin-top: 10px;">
                                                <label class="checkbox">
                                                    <input type="checkbox" name="service_bank_ebills" value="1" >
                                                    <i></i>ERCASPay</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" name="service_cashpoint" value="1" >
                                                    <i></i>ERCASPOS</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" name="service_centralpay_ecommerce" value="1" >
                                                    <i></i>ERCASCentral</label>
                                            </div>
                                    	</section>
                                        <section class="col col-5">
                                            <label class="label"><strong>Biller Logo</strong></label>
                                            <label class="input"><i class="icon-append fa fa-user"></i>
                                                <input type="file" name="pimg" placeholder="Company Logo" value="" ><b class="tooltip tooltip-bottom-right">Please choose your profile image</b>
                                            </label>
                                        </section>	
                                        
                                    </div> -->
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Create Biller
                                    </button>
                                </footer>
                            </form>		
                            
                        </div>
                        <!-- end widget content -->				
                    </div>
                    <!-- end widget div -->			
                </div>
            
            </article>
            
            <article class="col-lg-4 hidden-xs hidden-sm  hidden-md">
                <div class="jarviswidget" id="wid-id-6" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                    
                    <header>
                        <h2>Helpful Notes - <strong>BILLER PROFILE CREATION</strong>!</h2>
    			    </header>
    
                    <div>
                        <div class="widget-body">
                        	<p class="alert alert-info">
                                <i class="fa fa-info"></i> Please be mindful of the following before creating a new biller profile. <strong>Having challenges, kindly contact the System Administrator! </strong>
                            </p>
    
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            
                            <p>
                            <ul>
                            	<li>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</li>
                            	<li><strong>Et harum quidem rerum facilis est et expedita distinctio.</strong></li>
                                <li><em>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</em></li>
                                <li>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</li>
                            </ul>
                            </p>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    
                        </div>
                
                    </div>
                
                </div>
                
            </article>
        </div>
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
				required : 'Please enter biller CentralPay secret key'
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