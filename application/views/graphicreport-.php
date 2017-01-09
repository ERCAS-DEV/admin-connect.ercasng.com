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
			<li>Home</li><li>Biller Management</li><li>Reports</li><li>Graphical Analysis</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	<div id="content" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Reports
				</h1>
			</div>
		</div>
		<section id="widget-grid" class="">
        
        	<div class="row">
                <article class="col-sm-12 col-md-12 col-lg-3">
                    
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                            
                        <!-- widget div-->
                        <div>
            
                            <!-- widget content -->
                            <div class="widget-body no-padding">
            					<!---->
                                <form method="post" action="<?php echo site_url("reports/analysis");?>" class="smart-form" id="smart-form-register">
                                    <header>
                                        Report Search Criteria
                                    </header>
                                    
                                    <fieldset>
                                        <div class="row">
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Biller:</label>
                                            <label class="select">	
                                                <select name="biller_srch" id="biller_srch2">
                                                    <option value="">--no selection--</option>
                                                    <?php 
                                                    $all_biller = $this->biller_model->approved_biller_listing();
                                                    foreach($all_biller as $allbiller){ ?>
                                                    <option value="<?php echo $allbiller->id;?>">
                                                    <?php echo $allbiller->company_name;?></option>
                                                    <?php }?>
                                                </select> <i></i> 
                                            </label>
                                            
                                        </section>
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select ERCAS Service:</label>
                                            <label class="select">
                                                <select name="billertbl" id="billertbl2">
                                                    <option value="">---Please select ERCAS Service---</option>
                                                </select> <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Date From:</label>
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" id="to"  name="dateto" value="<?php echo @$dateto; ?>" placeholder="Select start date">
                                            </label>
            
                                        </section>
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Date To:</label>
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" id="from" name="datefrm" value="<?php echo @$datefrm; ?>" placeholder="Select end date">
                                            </label>
                                        </section>
                                        
                                        
                                        </div>
                                    </fieldset>
                                    
                                    <footer>
                                            <input type="submit" class="btn btn-primary" name="submit" value="Go">                                    </footer>
                                </form>
            					
                                
                                
                            </div>
                            <!-- end widget content -->
            
                        </div>
                        <!-- end widget div -->
            
                    </div>
                    <!-- end widget -->
            
                </article>
                
                <article class="col-sm-12 col-md-12 col-lg-9">
                    <div class="jarviswidget jarviswidget-color-pink" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
                            <h2>
							<?php 
							if($grapharr!=NULL){
								$biller_detail = $this->biller_model->biller_detail($biller_srch);
								foreach($biller_detail as $detail)
								{
									$biller_name = $detail->biller_acronymn;
								}
								echo '<strong>'.strtoupper($biller_name).' | '.$ercas_service.'</strong>';}else{echo 'Biller';}?> Transaction Chart<?php if($grapharr!=NULL){echo ' | <strong>'.date('M d, Y', strtotime($dateto)).'</strong> to <strong>'.date('M d, Y', strtotime($datefrm)).'</strong>';}?></h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding">
                                <div id="non-date-graph" class="chart no-padding"></div>
                            </div>
                        </div>
                    </div>
                </article>
    		</div>
		</section>
	</div>
</div>

		<script src="<?php echo site_url('assets/js/plugin/datatables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js');?>"></script>
<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->

		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.cust.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.resize.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.fillbetween.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.orderBar.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.pie.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.time.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/flot/jquery.flot.tooltip.min.js');?>"></script>
	
		<script src="<?php echo site_url('assets/js/plugin/morris/raphael.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/morris/morris.min.js');?>"></script>
		
		
		<script type="text/javascript">		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!		
			$(document).ready(function() {		
					
				pageSetUp();
				
				/* // DOM Position key index //
			
				l - Length changing (dropdown)
				f - Filtering input (search)
				t - The Table! (datatable)
				i - Information (records)
				p - Pagination (paging)
				r - pRocessing 
				< and > - div elements
				<"#id" and > - div with an id
				<"class" and > - div with a class
				<"#id.class" and > - div with an id and class
				
				Also see: http://legacy.datatables.net/usage/features
				*/	
		
					
					// Date Range Picker
				$("#from").datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					dateFormat:'yy-mm-dd',
					numberOfMonths: 2,
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onClose: function (selectedDate) {
						$("#to").datepicker("option", "maxDate", selectedDate);
					}
			
				});
				$("#to").datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 2,
					dateFormat:'yy-mm-dd',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onClose: function (selectedDate) {
						$("#from").datepicker("option", "minDate", selectedDate);
					}
				});
			})
		</script>		
		
		<script type="text/javascript">
			// PAGE RELATED SCRIPTS
			$(document).ready(function() {
				
				/* chart colors default */
				var $chrt_border_color = "#efefef";
				var $chrt_grid_color = "#DDD"
				var $chrt_main = "#E24913";
	
				/* red       */
				var $chrt_second = "#6595b4";
	
				/* blue      */
				var $chrt_third = "#FF9F01";
	
				/* orange    */
				var $chrt_fourth = "#7e9d3a";
	
				/* green     */
				var $chrt_fifth = "#BD362F";
	
				/* dark red  */
				var $chrt_mono = "#000";
				// DO NOT REMOVE : GLOBAL FUNCTIONS!
				pageSetUp();
				
			
				// non date data
				if ($('#non-date-graph').length) {
	
					var day_data = [<?php 
					$daystr='';
					foreach($grapharr as $marr){
							if($daystr!=''){ $daystr .= ',';}
							$daystr .= '{'.
								'"elapsed" : "'.$marr[0].'",'.
								'"value" : '.$marr[1].	
							'}';
						
					} 
					echo $daystr;?>];
					
					Morris.Line({
						element : 'non-date-graph',
						data : day_data,
						xkey : 'elapsed',
						ykeys : ['value'],
						labels : ['value'],
						parseTime : false,
						barColors : function(row, series, type) {
							if (type === 'bar') {
								var red = Math.ceil(150 * row.y / this.ymax);
								return 'rgb(' + red + ',0,0)';
							} else {
								return '#000';
							}
						}
					});
	
				}
			
			});
		</script>

		<script>
			$(document).ready(function() {
				 $('#cd-grid').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "<?php echo site_url('reports/cd_list');?>"
                });
				$('#biller_srch2').change(function(){
					billerid = $(this).val();				
					
					$.ajax({
						url:"<?php echo site_url('reports/getbillertable/');?>",
						method:"POST",
						data:"billerid="+billerid,
					}).done(function(msg){
						$('#billertbl2').html(msg);
					});
				});
				var $registerForm = $("#smart-form-register").validate({
	
				// Rules for form validation
				rules : {
					biller_srch : {
						required : true
					},
					billertbl : {
						required : true
					},
					dateto : {
						required : true
					},
					datefrm : {
						required : true
					}
				},

				// Messages for form validation
				messages : {
					biller_srch : {
						required : 'Please select biller company name'
					},
					billertbl : {
						required : 'Please select the service table'
					},
					dateto : {
						required : 'Please choose the date'
					},
					datefrm : {
						required : 'Please choose the date'
					}
				},

				// Do not change code below
				errorPlacement : function(error, element) {
					error.insertAfter(element.parent());
				}
			});
			} );
		</script>
		    
<?php include('footer_main.php');?>	