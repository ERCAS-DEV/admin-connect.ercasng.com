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
			<li>Home></li><li>Biller Management</li><li>Billers Configuration</li><li>Service DB Tables Configuration </li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	<div id="content" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Service DB Tables Configuration
				</h1>
			</div>
		</div>
		<section id="widget-grid" class="">
		<!-- row -->
		<div class="row">	
			<!-- NEW WIDGET START -->
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
			
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
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Service DB Tables Configuration - <b><?php echo $biller_detail[0]->company_name.' (Biller Id - '.$biller_detail[0]->id.')';?> </b></h2>

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
						<?php if($this->session->flashdata('error')!=''){
							echo '<section><p style="color:red;">'.$this->session->flashdata('error').'</p></section>';
						}
						if($this->session->flashdata('success')!=''){
							echo '<section><p style="color:green;">'.$this->session->flashdata('success').'</p></section>';
						}?>
						<form method="post" action ="<?php echo site_url('biller/biller_configuration_change/'.$biller_detail[0]->id);?>" id="smart-form-register">
						<fieldset>						
						<div class="row"><section class="col col-6" >&nbsp;</section></div>
						<section>
							<label class="select">&nbsp;&nbsp;Table for Configuration --&nbsp;&nbsp;
								<select class="input" name="services">
									<option value="">Select Table for configuration</option>
									<?php if($biller_services[0]->service_bank_ebills =='1' ){?>
									<option value="payment_collection_<?php echo $biller_detail[0]->biller_acronymn;?>">Choose ERCASPay Table</option>
									<?php }
									if($biller_services[0]->service_cashpoint =='1' ){?>	
									<option value="payment_pos_<?php echo $biller_detail[0]->biller_acronymn;?>">Choose ERCASPOS Table</option>
									<?php }
									if($biller_services[0]->service_centralpay_ecommerce =='1' ){?>	
									<option value="payment_ecommerce_<?php echo $biller_detail[0]->biller_acronymn;?>">Choose ERCASCentral Table</option>
									<?php } ?>
								</select> <i></i> </label>								
								<footer style="float:right;">
										<button type="submit" name="show_structure" class="btn-primary">Show Structure</button> or 
										<input type="text" name="alter_no" placeholder="No. of fields to alter">
										<button type="submit" name="alter_table" class="btn-primary">Alter Table Structure</button>
								</footer>
								</section>
						</fieldset>
						</form>
					</div>
					<!-- end widget content -->
				</div>
				<!-- end widget div -->
				</div>
			</article>
			<!-- WIDGET END -->
		</div>
		<!-- end row -->
		</section>
	</div>
</div>
<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo base_url('assets/js/plugin/datatables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.colVis.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.tableTools.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatable-responsive/datatables.responsive.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/jquery-form/jquery-form.min.js');?>"></script>
		<style>
.error{color:red;}
</style>
<script type="text/javascript">
// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
	$(document).ready(function() {
		pageSetUp();
		var $registerForm = $("#smart-form-register").validate({
	
		// Rules for form validation
		rules : {
			services : {
				required : true
			}
		},

		// Messages for form validation
		messages : {
			services : {
				required : 'Please select the table name'
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