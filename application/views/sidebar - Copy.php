<aside id="left-panel">
<!-- User info -->
		<div class="login-info">
			<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
				<a href="javascript:void(0);" >
					<img src="<?php echo base_url('assets/img/avatars/sunny.png');?>" alt="me" class="online" /> 
					<span>
						<?php 
						$userid = $this->session->userdata('user_id');
						$userdt = $this->user_model->user_detail($userid);
						echo $userdt[0]->first_name.' '.$userdt[0]->last_name;
						?>
					</span>
				</a> 
			</span>
		</div>
		<!-- end user info -->
		<!-- NAVIGATION : This navigation is also responsive-->
        <?php
	
		$sidebar_permission = $this->user_group_model->user_group_permissions_detail($userid);
		$sbperm = array();
		foreach($sidebar_permission as $sidebarperm){
			$sbperm[] = $sidebarperm->user_permissions;
		}
		?>
        
		<nav>
			<ul>
				<li class="<?php if($menu == 'dashboard'){echo 'active';}else{echo '';}?>">
					<a href="<?php echo site_url('');?>" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
				</li>
				<li class="<?php if($menu == 'biller'){echo 'active';}else{echo '';}?>">
					<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">Biller Management</span></a>
					<ul>
                    	<?php if(in_array('biller/listing',$sbperm)){ ?>
						<li class="<?php if($sub_menu == 'biller_listing'){echo 'active';}else{echo '';}?>">
							<a href="<?php echo site_url('biller/listing');?>" title="List of Billers"> <span class="menu-item-parent">List of Biller(s)</span></a>
						</li>
                        <?php }?>
                        
                        <?php if(in_array('biller/add_biller',$sbperm)){ ?>
						<li class="<?php if($sub_menu == 'add_biller'){echo 'active';}else{echo '';}?>">
							<a href="<?php echo site_url('biller/add_biller');?>" title="Create New Biller"> <span class="menu-item-parent">Create New Biller</span></a>
						</li>
                        <?php }?>
                        
						<li class="<?php if($sub_menu == 'biller_approval'){echo 'active';}else{echo '';}?>">
							<a href="#" title="Biller Setup Approval"> <span class="menu-item-parent">Biller Setup Approval</span></a>
                            <ul>
								<?php if(in_array('biller/pending_biller',$sbperm)){ ?>
                                <li class="<?php if($sub_sub_menu == 'pending_biller'){echo 'active';}else{echo '';}?>">
                                    <a href="<?php echo site_url('biller/pending_biller');?>" title="Pending Biller Request"> <span class="menu-item-parent">Pending Biller Request</span></a>
                                </li>
                        		<?php }?>
                                
                                <?php if(in_array('biller/approved_biller',$sbperm)){ ?>
                                <li class="<?php if($sub_sub_menu == 'approved_biller'){echo 'active';}else{echo '';}?>">
                                    <a href="<?php echo site_url('biller/approved_biller');?>" title="Approved Biller"> <span class="menu-item-parent">Approved Billers</span></a>
                                </li>
                        		<?php }?>
                                
                                <?php if(in_array('biller/declined_biller',$sbperm)){ ?>									
                                <li class="<?php if($sub_sub_menu == 'declined_biller'){echo 'active';}else{echo '';}?>">
                                    <a href="<?php echo site_url('biller/declined_biller');?>" title="Declined Biller"> <span class="menu-item-parent">Declined Billers</span></a>
                                </li>
                        		<?php }?>
                            </ul>
                        </li>
                        
                        <?php if(in_array('biller_administration',$sbperm)){ ?>
						<li class="<?php if($sub_menu == 'biller_configuration'){echo 'active';}else{echo '';}?>">
							<a href="#" title="Biller Configuration"> <span class="menu-item-parent">Biller Configuration</span></a>
                           <ul>
                                <li class="<?php if($sub_sub_menu == 'biller_administration'){echo 'active';}else{echo '';}?>">
                                    <a href="<?php echo site_url('biller/administration');?>" title="Biller Administration"> <span class="menu-item-parent">Biller Administration</span></a>
                                </li>
                                <li class="<?php if($sub_sub_menu == 'biller_dbconfig'){echo 'active';}else{echo '';}?>">
                                    <a href="#" title="Service DB Administration"> <span class="menu-item-parent">Service DB Admin</span></a>
                                </li>
                            </ul>
                        </li>
                        <?php }?>
					</ul>
				</li>
                
                <?php if(in_array('tickets',$sbperm)){ ?>
                <li class="<?php if($menu == 'tickets'){echo 'active';}else{echo '';}?>">
                    <a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><!--<em class="bg-color-pink flash animated">!</em>--></i> <span class="menu-item-parent">Support Center</span></a>
                    <ul>
                    	<li class="<?php if($sub_menu == 'new_tickets'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('tickets/new_tickets');?>">New Tickets</a>
                        </li>
                    	<li class="<?php if($sub_menu == 'none_assigned'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('tickets/none_assigned');?>">None Assigned Ticket</a>
                        </li>
                        <li class="<?php if($menu == 'tickets' && $sub_menu == 'index'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('tickets');?>">My Tickets</a>
                        </li>
                        <li class="<?php if($sub_menu == 'closed_tickets'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('tickets/closed_tickets');?>">Closed Tickets</a>
                        </li>							
                    </ul>	
                </li>
                <?php }?>
                
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-envelope"><!--<em class="bg-color-pink flash animated">!</em>--></i> <span class="menu-item-parent">ERCAS Messaging</span></a>
                </li>
                
                <?php if(in_array('reports',$sbperm)){ ?>
                <li class="<?php if($menu == 'reports'){echo 'active';}else{echo '';}?>">
                    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Reports & Analytics</span></a>
                    <ul>
                        <li class="<?php if($menu == 'reports' && $sub_menu == 'table'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('reports');?>">Generate Biller Reports</a>
                        </li>
                        <li class="<?php if($menu == 'reports' && $sub_menu == 'graph'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('reports/analysis');?>">Graphical Analytics</a>
                        </li>
                        <!--<li>
                            <a href="#">Predefined Reports</a>
                        </li>-->
                    </ul>
                </li> 
                <?php }?>
                              
                <li class="<?php if($menu == 'user_privileges'){echo 'active';}else{echo '';}?>">
                    <a href="#"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">User Administration</span></a>
                    <ul>
                    	<?php if(in_array('usergroup_privileges',$sbperm)){ ?>
                        <li class="<?php if($menu == 'user_privileges' && $sub_menu == 'index'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('usergroup_privileges');?>">User Privileges</a>
                        </li>
                        <?php }?>
                        
                        <?php if(in_array('registration',$sbperm)){ ?>
                        <li class="<?php if($menu == 'user_privileges' && $sub_menu == 'create_user'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('registration');?>">Create New User</a>
                        </li>
                        <?php }?>
                        
                        <?php if(in_array('users',$sbperm)){ ?>
                        <li class="<?php if($menu == 'user_privileges' && $sub_menu == 'user_accounts'){echo 'active';}else{echo '';}?>">
                            <a href="<?php echo site_url('users');?>">Users Account</a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                                   
                <li class="<?php if($menu == 'profile_management'){echo 'active';}else{echo '';}?>">
                    <a href="<?php echo site_url('profile_management');?>"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Profile Management</span></a>
                </li>    
                
                <?php if(in_array('general_setting',$sbperm)){ ?>                 
                <li class="<?php if($menu == 'settings'){echo 'active';}else{echo '';}?>">
                    <a href="#"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Settings</span></a>
                    <ul>
						<li class="<?php if($sub_menu == 'ercas_services'){echo 'active';}else{echo '';}?>">
							<a href="#" title="ERCAS Services"> <span class="menu-item-parent">ERCAS Services Mgt</span></a>
                            <ul>
                                <li class="<?php if($sub_sub_menu == 'service_listing'){echo 'active';}else{echo '';}?>">
                                    <a href="#" title="Service Listing"> <span class="menu-item-parent">Administer Services</span></a>
                                </li>
                                <li class="<?php if($sub_sub_menu == 'services_base_dbstructure'){echo 'active';}else{echo '';}?>">
                                    <a href="#" title="Services Baseline DB Structure"> <span class="menu-item-parent">Services DB Structure</span></a>
                                </li>	
                            </ul>
                        </li>                  
                        <li>
                            <a href="#"><span class="menu-item-parent">Auto Notification</span></a>
                            <ul>
                                <li>
                                    <a href="#">Auto Reporting</a>
                                </li>
                                <li>
                                    <a href="#">Bill Notification</a>
                                </li>
                            </ul>
                        </li>                   
                        <li>
                            <a href="#"><span class="menu-item-parent">Messaging Templates</span></a>
                        	<ul>
                                <li>
                                    <a href="#">Setup Template</a>
                                </li>
                                <li>
                                    <a href="#">View Templates</a>
                                </li>
                            </ul>
                        </li> 
						
                    </ul>
                </li>
				<?php }?>
                	
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>
		</aside>
