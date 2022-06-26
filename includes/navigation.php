
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
							
								<?php $manuName = basename(__DIR__); ?>

								<li class=<?php echo $manuName == 'admin' ? "active" : ''; ?> ><a href="<?php echo $isInternal == true ? '../': '';?>index.php"><i class="icon-home4"></i> 
								<span>Dashboard</span></a></li>
								
								<li class=<?php echo $manuName == 'Banner' ? "active" : ''; ?> ><a href="<?php echo $isInternal == true ? '../Banner/': 'Banner/';?>bannar.php"><i class="icon-image-compare"></i> <span>Banners</span></a></li>

								<li class=<?php echo $manuName == 'Project' ? "active" : ''; ?> ><a href="<?php echo $isInternal == true ? '../Project/': 'Project/';?>project.php"><i class="icon-image-compare"></i> <span>Project</span></a></li>

								<li class=<?php echo $manuName == 'services' ? "active" : ''; ?> ><a href="<?php echo $isInternal == true ? '../services/': 'services/';?>services.php"><i class="icon-image-compare"></i> <span>Services</span></a></li>

								<li class=<?php echo $manuName == 'Section' ? "active" : ''; ?> ><a href="<?php echo $isInternal == true ? '../Section/': 'Section/';?>Section.php"><i class="icon-image-compare"></i> <span>Section</span></a></li>
								
								<li><a href="#"><i class="icon-home"></i> <span>Our Project</span></a></li>
								<li><a href="#"><i class="icon-home"></i> <span>Our Staff</span></a></li>
								<li><a href="#"><i class="icon-home"></i> <span>Our Clients</span></a></li>
								<li><a href="#"><i class="icon-home"></i> <span>Contact</span></a></li>
								<li>
									<a href="#"><i class="icon-cog3"></i> <span>Back office Setup</span></a>
									<ul>
										<li><a href="layout_navbar_fixed.html">Category</a></li>
										<li><a href="layout_navbar_fixed.html">Designation</a></li>
									</ul>
								</li>
						
						
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
												<li><a href="starters/3_col_double.html">Double sidebars</a></li>
											</ul>
										</li>
										
									</ul>
								</li>
							
								<!-- /main -->


							


							

							</ul>
						</div>
					</div>
					<!-- /main navigation -->