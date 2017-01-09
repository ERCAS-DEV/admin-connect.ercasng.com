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
			<li>Home</li><li>Biller Management</li><li>Biller Administration</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	<div id="content" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Biller Administration
				</h1>
			</div>
		</div>
		<section id="widget-grid" class="">
		<!-- row -->
		<div class="row">	
			<!-- NEW WIDGET START -->
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
			<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
			
				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Approved Biller Listing</h2>

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
						}
						?>
						<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
							<thead>			                
								<tr>
									<th data-hide="phone">ID</th>
									<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Biller</th>
									<th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Biller Abbrev</th>
									<th data-hide="phone"><i class="fa fa-fw fa-leaf text-muted hidden-md hidden-sm hidden-xs"></i> Services</th>
									<th data-hide="phone">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i =1;
								foreach($biller_listing as $ul){?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $ul->company_name;?></td>
									<td><?php echo $ul->biller_acronymn;?></td>
									<td><em><?php 
									if($ul->service_bank_ebills	=='1'){
										echo "<span style='text-decoration:underline'>ERCASPay</span> | ";
									}
									if($ul->service_cashpoint =='1'){
										echo "<span style='text-decoration:underline'>ERCASPOS</span> | ";
									}
									if($ul->service_centralpay_ecommerce =='1'){
										echo "<span style='text-decoration:underline'>ERCASCentral</span>";
									}?></em></td>
									<td><a href="<?php echo site_url('biller/edit_biller/'.$ul->id);?>" title="Edit Biller" alt = "Edit Biller"><i class="fa fa-fw fa-edit text-muted hidden-md hidden-sm hidden-xs"></i></a>
									<a href="<?php echo site_url('biller/biller_configuration/'.$ul->id);?>" title="Biller Configuration" alt = "Biller Configuration"><i class="fa fa-fw fa-chain text-muted hidden-md hidden-sm hidden-xs"></i></a>
									</td>
								</tr>
								<?php $i++;
								}?>
							</tbody>
						</table>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

				</div>

			</article>
			<!-- WIDGET END -->
            
            <article class="col-lg-3 hidden-xs hidden-sm  hidden-md">
                <div class="jarviswidget" id="wid-id-6" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                    
                    <header>
                        <h2>Helpful Note!</h2>
    			    </header>
    
                    <div>
    		        <div class="jarviswidget-editbox">
            	        </div>
                        <div class="widget-body">
                        	<p class="alert alert-info">
                                <i class="fa fa-info"></i> This module allows you to edit or configure existing profile of biller. <br /><strong>Please contact the System Administrator is you have challenges! </strong>
                            </p>
                            <ul>
                            	<li><strong>Et harum quidem rerum facilis est et expedita distinctio.</strong></li>
                                <li><em>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</em></li>
                            </ul>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    
                        </div>
                
                    </div>
                
                </div>
                
            </article>
            
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
	   <script type="text/javascript">
		function delete_biller(uid)
		{
			if (confirm('Are You Sure to Delete this Record?')){
				window.location.href = 'biller/delete_biller/' + uid;
			}
		}
		</script>

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