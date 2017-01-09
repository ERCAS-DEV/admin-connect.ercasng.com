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
			<li>Home</li><li>Reports & Analytics</li><li>Generate Biller Reports</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	<div id="content" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Biller Transactions' Reports
				</h1>
			</div>
		</div>
		<section id="widget-grid" class="">
		<!-- row -->
			<div class="row">
                <article class="col-sm-12 col-md-12 col-lg-3">
                    
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                            
                        <!-- widget div-->
                        <div>
            
                            <!-- widget content -->
                            <div class="widget-body no-padding">
            					
                                <form method="post" action="<?php echo site_url("reports/biller_search");?>" class="smart-form" id="smart-form-register">
                                    <header>
                                        Report Search Criteria
                                    </header>
                                    
                                    <fieldset>
                                        <div class="row">
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Biller:</label>
                                            <label class="select">	
                                                <select name="biller_srch" id="biller_srch">
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
                                                <select name="billertbl" id="billertbl">
                                                    <option value="">---Please select ERCAS Service---</option>
                                                </select> <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Date From:</label>
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" id="to"  name="dateto" placeholder="Select start date">
                                            </label>
            
                                        </section>
                                        <section class="col col-sm-12 col-md-3 col-lg-12">
                                            <label class="label">Select Date To:</label>
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" id="from" name="datefrm" placeholder="Select end date">
                                            </label>
                                        </section>
                                        
                                        
                                        </div>
                                    </fieldset>
                                    
                                    <footer>
                                            <input type="button" class="btn btn-primary" id="searchreport" name="biller_srch" id="billersearch" value="Go">
                                    </footer>
                                </form>
            
                            </div>
                            <!-- end widget content -->
            
                        </div>
                        <!-- end widget div -->
            
                    </div>
                    <!-- end widget -->
            
                </article>
                
                <article class="col-sm-12 col-md-12 col-lg-9">
                	<div class="jarviswidget jarviswidget-color-pink" id="wid-id-0" data-widget-editbutton="false">
								<header>
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>Biller Transaction Report </h2>
				
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
				
										<table id="datatable_tabletools" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Trxn.Date</th>
                                                    <th>Customer ID</th>
													<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Customer Name</th>
													<th>Amount Paid</th>
													<th data-hide="phone,tablet">Source Bank</th>
												</tr>
											</thead>
											
										</table>
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
                </article>
    		</div>
      
        </section>
    </div>
</div>
<!-- PAGE RELATED PLUGIN(S) -->
        
        <script src="<?php echo site_url('assets/js/plugin/datatables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/datatables/dataTables.colVis.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/datatables/dataTables.tableTools.min.js');?>"></script>
        
		<script src="<?php echo site_url('assets/js/plugin/datatables/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/datatable-responsive/datatables.responsive.min.js');?>"></script>
		<script src="<?php echo site_url('assets/js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js');?>"></script>
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
	
			/* BASIC ;*/
				$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
	
			/* END BASIC */
			
			
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="ERCASConnect Admin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			
			$.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) { 
				console.log(message);
			};
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
		<script>
			$(document).ready(function() {	
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
			});	/**/		
				$('#searchreport').click(function(){
					//buildSearchData = 'tblnm=payment_collection_ewrw';
					
					billertbl = $('#billertbl').val();
					todate = $('#to').val();
					fromdate = $('#from').val();
					//alert("<?php echo site_url('reports/biller_search/');?>"+billertbl+'/'+todate+'/'+fromdate);
					
					//alert(billertbl);
					var responsiveHelper_dt_basic = undefined;
					var responsiveHelper_datatable_fixed_column = undefined;
					var responsiveHelper_datatable_col_reorder = undefined;
					var responsiveHelper_datatable_tabletools = undefined;
					
					
					var breakpointDefinition = {
						tablet : 1024,
						phone : 480
					};
		
					
					/* END COLUMN SHOW - HIDE 
					$.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) { 
						console.log(message);
					};
					*/
					$('#datatable_tabletools').DataTable({
						"processing": true,
						"serverSide": true,
						"bDestroy": true,
						"aaSorting": [[ 0, "desc" ]],
						"ajax": "<?php echo site_url('reports/biller_search/');?>"+'/'+billertbl+'/'+todate+'/'+fromdate,	
						
						 // Tabletools options: 
						//   https://datatables.net/extensions/tabletools/button_options
						
						/**/
						"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
								"t"+
								"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
						"oLanguage": {
							"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>',
							
						},		
						"oTableTools": {
							 "aButtons": [
							 "copy",
							 "csv",
							 "xls",
								{
									"sExtends": "pdf",
									"sTitle": "ERCASConnectAdmin_PDF",
									"sPdfMessage": "ERCASConnect PDF Export",
									"sPdfSize": "letter"
								},
								{
									"sExtends": "print",
									"sMessage": "Generated by ERCASConnect Admin <i>(press Esc to close)</i>"
								}
							 ],
							"sSwfPath": "<?php echo base_url('assets/js/plugin/datatables/swf/copy_csv_xls_pdf.swf');?>"
						},
						"autoWidth" : true,
						
					});
				});
						   
				$('#biller_srch').change(function(){
					billerid = $(this).val();				
					$.ajax({
						url:"reports/getbillertable/",
						method:"POST",
						data:"billerid="+billerid,
					}).done(function(msg){
						$('#billertbl').html(msg);
					});
				});
				$('#billersearch').click(function(){
				alert("ERR");
					billersrch = $('#biller_srch').val();
					billertbl = $('#billertbl').val();
					todate = $('#to').val();
					fromdate = $('#from').val();
					if(billersrch=='' || billertbl == '' || todate == '' || fromdate == ''){
						alert("Please select all fields");	
						return false;
					}else{
						return true;
					}
				});
			} );
		</script>
<style>
.error{color:red;}
</style>
<?php include('footer_main.php');?>	