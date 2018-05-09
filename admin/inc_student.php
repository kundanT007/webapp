<div class="content">
		<div class="container-fluid">
				<div class="row">
						<div class="col-md-6">
								<div class="card">
										<div class="header">
												<h4 class="title">Student</h4>
												<p class="category">Student login details</p>
										</div>
										<div class="content table-responsive table-full-width">
												<table class="table table-hover table-striped">
														<thead>
																<th>ID</th>
															<th>Name</th>
															<th>Email</th>
															<th>Password</th>

														</thead>
														<tbody>
																<?php $std->displayLogin(); ?>

														</tbody>
												</table>

										</div>
								</div>
						</div>



            						<div class="col-md-6">
            								<div class="card">
            										<div class="header">
            												<h4 class="title">Student details</h4>
            												<p class="category">Details of students that are enrolled</p>
            										</div>
            										<div class="content table-responsive table-full-width">
            												<table class="table table-hover table-striped">
            														<thead>
            																<th>ID</th>
            															<th>Name</th>
            															<th>Gender</th>
            															<th>Contact</th>
            														</thead>
            														<tbody>
            																<?php $std->displayStudentDetails(); ?>
																						<td>
																							<a href="main.php?id=addstudent&q=addstudent&"> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																									<i class="pe-7s-add-user"> Add New Students</i>
																							</button></a>

																						</td>
            														</tbody>

            												</table>

            										</div>
            								</div>
            						</div>

            				</div>
            		</div>
            </div>
