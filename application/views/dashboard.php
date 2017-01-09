<?php
include('header_main.php');
include('sidebar.php');
?>

		
		<!-- MAIN PANEL -->
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
					<li>Home</li><li>Dashboard</li>
				</ol>

			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">
				<div class="row">
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <h1 class="page-title txt-color-blueDark">
                            
                            <!-- PAGE HEADER -->
                            <i class="fa-fw fa fa-home"></i> 
                                ERCASConnect Dashboard
                        </h1>
                    </div>
                </div>
                
				<?php
				if($this->session->flashdata('success')!=''){
					echo '<div class="alert alert-success fade in"><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i><strong>Welcome Administrator!</strong> '.$this->session->flashdata('success').'
					</div>';
				}
				?>
                
                <div class="alert alert-block alert-info">
                    <p></p>
                </div><!---->
				
                <section id="widget-grid" class="">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="well well-light">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Active ERCAS Billers</strong></h3>
                                            </div>
                                            <div class="panel-body no-padding text-align-center">
                                                <div class="the-price">
                                                    <h1><strong><?php echo $activebillers; ?></strong></h1>
                                                </div>
                                                
                                            </div>
                                            <div class="panel-footer text-align-center">
                                                <a href="<?php echo site_url('biller/listing'); ?>" class="btn btn-info btn-block" role="button">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-warning">
                                            
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Pending Request</strong></h3>
                                            </div>
                                            <div class="panel-body no-padding text-align-center">
                                                <div class="the-price">
                                                    <h1><strong><?php echo $nonassignedticketcnt; ?></strong></h1>
                                                </div>
                                                
                                            </div>
                                            <div class="panel-footer text-align-center">
                                                <a href="<?php echo site_url('biller/pending_biller'); ?>" class="btn btn-warning btn-block" role="button">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Open Support Tickets</strong></h3>
                                            </div>
                                            <div class="panel-body no-padding text-align-center">
                                                <div class="the-price">
                                                    <h1><?php echo $openticketcnt; ?></h1>
                                                </div>
                                                
                                            </div>
                                            <div class="panel-footer text-align-center">
                                                <a href="<?php echo site_url('tickets'); ?>" class="btn btn-primary btn-block" role="button">View</a>
                                            </div>
                                        </div>
                                    </div>	    	
                                </div>
                    
                                <hr>
                                
                                <h5><strong>Summary of Current Biller Transactions</strong></h5>
                                
                                <div class="jarviswidget jarviswidget-color-teal" id="wid-id-0" data-widget-editbutton="false">
                                    <header>
                                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                        <h2>Biller Current Transactions Summary </h2>
                        
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
                        
                                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                <thead>			                
                                                    <tr>
                                                        <th>Company</th>
                                                        <th data-hide="phone">Today' Volume</th>
                                                        <th>Today's Revenue</th>
                                                        <th data-hide="phone">Month's Volume</th>
                                                        <th>Month's Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>FCTWB</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ABUTH</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>FCTIRS</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">50,000.00</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                        
                                        </div>
                                        <!-- end widget content -->
                        
                                    </div>
                                    <!-- end widget div -->
                        
                                </div>
            				</div>
                            
                        </div>
                        <article class="col-sm-12 col-md-12 col-lg-4">
                            <div class="jarviswidget" id="wid-id-6" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                                
                                <header>
                                    <h2>Latest Billers' Transactions</h2>
                                </header>
                				<div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Biller</th>
                                                <th>Amt Paid</th>
                                                <th>Datetime</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 2</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 2</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 1</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                            <tr>
                                                <td>Biller 2</td>
                                                <td class="text-right">40,000</td>
                                                <td>31-05-16</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            
                        </article>
                        
                    </div>
                </section>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN PANEL -->
        
        <!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo base_url('assets/js/plugin/datatables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.colVis.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.tableTools.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/plugin/datatable-responsive/datatables.responsive.min.js');?>"></script>
	   	

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
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
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
			
			/* COLUMN FILTER  */
		    var otable = $('#datatable_fixed_column').DataTable({
		    	//"bFilter": false,
		    	//"bInfo": false,
		    	//"bLengthChange": false
		    	//"bAutoWidth": false,
		    	//"bPaginate": false,
		    	//"bStateSave": true // saves sort state using localStorage
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_fixed_column) {
						responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_fixed_column.respond();
				}		
			
		    });
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			/* COLUMN SHOW - HIDE */
			$('#datatable_col_reorder').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_col_reorder) {
						responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_col_reorder.respond();
				}			
			});
			
			/* END COLUMN SHOW - HIDE */
	
			/* TABLETOOLS */
			$('#datatable_tabletools').dataTable({
				
				// Tabletools options: 
				//   https://datatables.net/extensions/tabletools/button_options
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},		
		        "oTableTools": {
		        	 "aButtons": [
		             "copy",
		             "csv",
		             "xls",
		                {
		                    "sExtends": "pdf",
		                    "sTitle": "SmartAdmin_PDF",
		                    "sPdfMessage": "SmartAdmin PDF Export",
		                    "sPdfSize": "letter"
		                },
		             	{
	                    	"sExtends": "print",
	                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
	                	}
		             ],
		            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
		        },
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
			});
			
			/* END TABLETOOLS */
		
		})

		</script>
		
		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
			_gaq.push(['_trackPageview']);
			
			(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
			})();
		</script>
<?php include('footer_main.php');?>		 