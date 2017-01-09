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
			<li>Home></li><li>Biller Management</li><li>Billers Account</li><li>Approved Billers Account</li>
		</ol>
	</div>
	<!-- END RIBBON -->
	<!-- MAIN CONTENT -->
	<div id="content" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-pencil-square-o"></i>Approved Biller Configuration Table Alter of <?php echo $alter_table_name;?> 
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
									<h2>Table Alter of <?php echo $alter_table_name;?> </h2>
				
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
									<form id="smart-form-register" class="smart-form" method="post" action ="<?php echo site_url('biller/alter_table/'.$biller_id);?>">
										<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">SN</th>
													<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Field</th>
													<th data-hide="phone"><i class="fa fa-fw fa-wrench text-muted hidden-md hidden-sm hidden-xs"></i> Type</th>
													<th data-hide="phone"><i class="fa fa-fw fa-wrench text-muted hidden-md hidden-sm hidden-xs"></i> Length/Values</th>
												</tr>
											</thead>
											<tbody>
												<input type="hidden" name="alter_table_name" value="<?php echo $alter_table_name;?>">
												<input type="hidden" name="biller_id" value="<?php echo $biller_id;?>">
												<input type="hidden" name="alter_no" value="<?php echo $alter_no;?>">
												<?php 
												$i=1;
												while($i <= $alter_no){?>
												<tr>
													<td><?php echo $i;?>.</td>
													<td><input type="text" name="fieldname_<?php echo $i;?>" placeholder=" Field Name"><b class="tooltip tooltip-bottom-right">Please enter field name</b></td>
													<td>
														<select name="fld_type_<?php echo $i;?>" class="input-sm">
															<option value="INT">INT</option>
															<option value="VARCHAR">VARCHAR</option>
															<option value="TEXT">TEXT</option>
															<option value="DOUBLE">DOUBLE</option>
															<option value="BIGINT">BIGINT</option>
															<option value="FLOAT">FLOAT</option>
															<option value="DATE">DATE</option>
															<option value="DATETIME">DATETIME</option>
														</select>
													</td>
													<td><input type="text" name="fld_length_<?php echo $i;?>" placeholder=" Length/Values"></td>
												</tr>
												<?php $i++;
												}		
												?>
											</tbody>
										</table>
										<footer>											
											<a href="<?php echo site_url('biller/biller_configuration/'.$biller_id);?>"><button type="button" class="btn btn-primary">Cancel</button></a>
											<button type="submit" name="addfld" class="btn btn-primary" value="submit">
												Alter Table
											</button>
										</footer>
										</form>

									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							
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
	  

<?php include('footer_main.php');?>		