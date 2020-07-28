<!-- <div class="row">
    <div class="col-sm-3">
        <button type="submit" data-toggle="modal" data-target="#modal_user_add" class="btn bg-blue btn-block mb-2 mt-2 ml-20">Add</i></button>
    </div>
</div>

<div class="page-container">
    <div class="page-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="panel panel-flat">
                    <table class="table datatable-pagination">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Job Title</th>
                                <th>DOB</th>
                                <th>DOB</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marth</td>
                                <td><a href="#">Enright</a></td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td>22 Jun 1972</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a type="button" data-toggle="modal" data-target="#modal_user_edit"><i class="icon-pencil3"></i> Edit</a></li>
                                                <li><a href="#"><i class="icon-trash-alt"></i> Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->load->view('UserAdmAddViews') ?>
<?= $this->load->view('UserAdmEditViews') ?> -->



<div class="content">

					<!-- Single row selection -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Single row selection<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							This example shows a modification of the multiple row <code>selection</code> example, where just a <code>single</code> can now be selected. This is done simply by checking to see if the row already has a selected class or not, and if so removing it, if not then the class is removed from any other row in the table which does have it and applied to the row to be selected.
						</div>

						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label></div><div class="dataTables_length" id="DataTables_Table_0_length"><label><span>Show:</span> <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-g8-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-g8-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div></div><div class="datatable-scroll"><table class="table datatable-selection-single dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Salary</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
							</thead>
							<tbody>
								
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
							<tr role="row" class="odd">
					                <td class="sorting_1">Airi Satou</td>
					                <td>Accountant</td>
					                <td>33</td>
					                <td><a href="#">2008/11/28</a></td>
					                <td><span class="label label-danger">$162,700</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Ashton Cox</td>
					                <td>Junior Technical Author</td>
					                <td>66</td>
					                <td><a href="#">2009/01/12</a></td>
					                <td><span class="label label-default">$86,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Brielle Williamson</td>
					                <td>Integration Specialist</td>
					                <td>61</td>
					                <td><a href="#">2012/12/02</a></td>
					                <td><span class="label label-info">$372,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Cedric Kelly</td>
					                <td>Senior Javascript Developer</td>
					                <td>22</td>
					                <td><a href="#">2012/03/29</a></td>
					                <td><span class="label label-success">$433,060</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Charde Marshall</td>
					                <td>Regional Director</td>
					                <td>36</td>
					                <td><a href="#">2008/10/16</a></td>
					                <td><span class="label label-success">$470,600</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Colleen Hurst</td>
					                <td>Javascript Developer</td>
					                <td>39</td>
					                <td><a href="#">2009/09/15</a></td>
					                <td><span class="label label-success">$405,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Garrett Winters</td>
					                <td>Accountant</td>
					                <td>63</td>
					                <td><a href="#">2011/07/25</a></td>
					                <td><span class="label label-danger">$170,750</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Haley Kennedy</td>
					                <td>Senior Marketing Designer</td>
					                <td>43</td>
					                <td><a href="#">2012/12/18</a></td>
					                <td><span class="label label-danger">$113,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Herrod Chandler</td>
					                <td>Sales Assistant</td>
					                <td>59</td>
					                <td><a href="#">2012/08/06</a></td>
					                <td><span class="label label-danger">$137,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Jena Gaines</td>
					                <td>Office Manager</td>
					                <td>30</td>
					                <td><a href="#">2008/12/19</a></td>
					                <td><span class="label label-danger">$90,560</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr></tbody>
						</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">→</a></div></div></div>
					</div>
					<!-- /single row selection -->


					<!-- Multiple rows selection -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Multiple rows selection<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							It can be quite useful at times to provide the user with the option to select rows in a DataTable. This can be done by simply using a <code>click</code> event to add/remove a class on the table rows. The <code>rows().data()</code> method can then be used to get the data for the selected rows. In this case it is simply counting the number of selected rows, but much more complex interactions can easily be developed.
						</div>

						<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_1"></label></div><div class="dataTables_length" id="DataTables_Table_1_length"><label><span>Show:</span> <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_1_length-gj-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_1_length-gj-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div></div><div class="datatable-scroll"><table class="table datatable-selection-multiple dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Salary</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
							</thead>
							<tbody>
								
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
							<tr role="row" class="odd">
					                <td class="sorting_1">Airi Satou</td>
					                <td>Accountant</td>
					                <td>33</td>
					                <td><a href="#">2008/11/28</a></td>
					                <td><span class="label label-danger">$162,700</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Ashton Cox</td>
					                <td>Junior Technical Author</td>
					                <td>66</td>
					                <td><a href="#">2009/01/12</a></td>
					                <td><span class="label label-default">$86,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Brielle Williamson</td>
					                <td>Integration Specialist</td>
					                <td>61</td>
					                <td><a href="#">2012/12/02</a></td>
					                <td><span class="label label-info">$372,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Cedric Kelly</td>
					                <td>Senior Javascript Developer</td>
					                <td>22</td>
					                <td><a href="#">2012/03/29</a></td>
					                <td><span class="label label-success">$433,060</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Charde Marshall</td>
					                <td>Regional Director</td>
					                <td>36</td>
					                <td><a href="#">2008/10/16</a></td>
					                <td><span class="label label-success">$470,600</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Colleen Hurst</td>
					                <td>Javascript Developer</td>
					                <td>39</td>
					                <td><a href="#">2009/09/15</a></td>
					                <td><span class="label label-success">$405,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Garrett Winters</td>
					                <td>Accountant</td>
					                <td>63</td>
					                <td><a href="#">2011/07/25</a></td>
					                <td><span class="label label-danger">$170,750</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Haley Kennedy</td>
					                <td>Senior Marketing Designer</td>
					                <td>43</td>
					                <td><a href="#">2012/12/18</a></td>
					                <td><span class="label label-danger">$113,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Herrod Chandler</td>
					                <td>Sales Assistant</td>
					                <td>59</td>
					                <td><a href="#">2012/08/06</a></td>
					                <td><span class="label label-danger">$137,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Jena Gaines</td>
					                <td>Office Manager</td>
					                <td>30</td>
					                <td><a href="#">2008/12/19</a></td>
					                <td><span class="label label-danger">$90,560</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr></tbody>
						</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" id="DataTables_Table_1_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" id="DataTables_Table_1_next">→</a></div></div></div>
					</div>
					<!-- /multiple rows selection -->


					<!-- Individual column searching (text inputs) -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Individual column searching<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Individual columns searching with <code>text inputs</code>. The searching functionality that is provided by DataTables is very useful for quickly search through the information in the table - however the search is global, and you may wish to present controls to search on specific columns only. This examples shows text elements being used with the <code>column().search()</code> method to add input controls in the footer of the table for each column.
						</div>

						<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper"><div class="datatable-header"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_2"></label></div><div class="dataTables_length" id="DataTables_Table_2_length"><label><span>Show:</span> <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_2_length-ee-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_2_length-ee-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div></div><div class="datatable-scroll"><table class="table datatable-column-search-inputs dataTable" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Salary</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
							</thead>
							<tbody>
								
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
							<tr role="row" class="odd">
					                <td class="sorting_1">Airi Satou</td>
					                <td>Accountant</td>
					                <td>33</td>
					                <td><a href="#">2008/11/28</a></td>
					                <td><span class="label label-danger">$162,700</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Ashton Cox</td>
					                <td>Junior Technical Author</td>
					                <td>66</td>
					                <td><a href="#">2009/01/12</a></td>
					                <td><span class="label label-default">$86,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Brielle Williamson</td>
					                <td>Integration Specialist</td>
					                <td>61</td>
					                <td><a href="#">2012/12/02</a></td>
					                <td><span class="label label-info">$372,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Cedric Kelly</td>
					                <td>Senior Javascript Developer</td>
					                <td>22</td>
					                <td><a href="#">2012/03/29</a></td>
					                <td><span class="label label-success">$433,060</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Charde Marshall</td>
					                <td>Regional Director</td>
					                <td>36</td>
					                <td><a href="#">2008/10/16</a></td>
					                <td><span class="label label-success">$470,600</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Colleen Hurst</td>
					                <td>Javascript Developer</td>
					                <td>39</td>
					                <td><a href="#">2009/09/15</a></td>
					                <td><span class="label label-success">$405,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Garrett Winters</td>
					                <td>Accountant</td>
					                <td>63</td>
					                <td><a href="#">2011/07/25</a></td>
					                <td><span class="label label-danger">$170,750</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Haley Kennedy</td>
					                <td>Senior Marketing Designer</td>
					                <td>43</td>
					                <td><a href="#">2012/12/18</a></td>
					                <td><span class="label label-danger">$113,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Herrod Chandler</td>
					                <td>Sales Assistant</td>
					                <td>59</td>
					                <td><a href="#">2012/08/06</a></td>
					                <td><span class="label label-danger">$137,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Jena Gaines</td>
					                <td>Office Manager</td>
					                <td>30</td>
					                <td><a href="#">2008/12/19</a></td>
					                <td><span class="label label-danger">$90,560</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr></tbody>
							<tfoot>
								<tr><td rowspan="1" colspan="1"><input type="text" class="form-control input-sm" placeholder="Search Name"></td><td rowspan="1" colspan="1"><input type="text" class="form-control input-sm" placeholder="Search Position"></td><td rowspan="1" colspan="1"><input type="text" class="form-control input-sm" placeholder="Search Age"></td><td rowspan="1" colspan="1"><input type="text" class="form-control input-sm" placeholder="Search Start date"></td><td rowspan="1" colspan="1"><input type="text" class="form-control input-sm" placeholder="Search Salary"></td><td rowspan="1" colspan="1"></td></tr>
							</tfoot>
						</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" id="DataTables_Table_2_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" id="DataTables_Table_2_next">→</a></div></div></div>
					</div>
					<!-- /individual column searching (text inputs) -->


					<!-- Individual column searching (selects) -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Individual column searching<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Individual columns searching with <code>selects</code>. This example is almost identical to text based individual column example and provides the same functionality, but in this case using <code>select</code> input controls. After the table is initialised, the API is used to build the select inputs through the use of the <code>column().data()</code> method to get the data for each column in turn.
						</div>

						<div id="DataTables_Table_3_wrapper" class="dataTables_wrapper"><div class="datatable-header"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_3"></label></div><div class="dataTables_length" id="DataTables_Table_3_length"><label><span>Show:</span> <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_3_length-fb-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_3_length-fb-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div></div><div class="datatable-scroll"><table class="table datatable-column-search-selects dataTable" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Salary</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
							</thead>
							<tbody>
								
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
					            
							<tr role="row" class="odd">
					                <td class="sorting_1">Airi Satou</td>
					                <td>Accountant</td>
					                <td>33</td>
					                <td><a href="#">2008/11/28</a></td>
					                <td><span class="label label-danger">$162,700</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Ashton Cox</td>
					                <td>Junior Technical Author</td>
					                <td>66</td>
					                <td><a href="#">2009/01/12</a></td>
					                <td><span class="label label-default">$86,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Brielle Williamson</td>
					                <td>Integration Specialist</td>
					                <td>61</td>
					                <td><a href="#">2012/12/02</a></td>
					                <td><span class="label label-info">$372,000</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Cedric Kelly</td>
					                <td>Senior Javascript Developer</td>
					                <td>22</td>
					                <td><a href="#">2012/03/29</a></td>
					                <td><span class="label label-success">$433,060</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Charde Marshall</td>
					                <td>Regional Director</td>
					                <td>36</td>
					                <td><a href="#">2008/10/16</a></td>
					                <td><span class="label label-success">$470,600</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Colleen Hurst</td>
					                <td>Javascript Developer</td>
					                <td>39</td>
					                <td><a href="#">2009/09/15</a></td>
					                <td><span class="label label-success">$405,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Garrett Winters</td>
					                <td>Accountant</td>
					                <td>63</td>
					                <td><a href="#">2011/07/25</a></td>
					                <td><span class="label label-danger">$170,750</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Haley Kennedy</td>
					                <td>Senior Marketing Designer</td>
					                <td>43</td>
					                <td><a href="#">2012/12/18</a></td>
					                <td><span class="label label-danger">$113,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="odd">
					                <td class="sorting_1">Herrod Chandler</td>
					                <td>Sales Assistant</td>
					                <td>59</td>
					                <td><a href="#">2012/08/06</a></td>
					                <td><span class="label label-danger">$137,500</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr><tr role="row" class="even">
					                <td class="sorting_1">Jena Gaines</td>
					                <td>Office Manager</td>
					                <td>30</td>
					                <td><a href="#">2008/12/19</a></td>
					                <td><span class="label label-danger">$90,560</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown dropup">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr></tbody>
							<tfoot>
								<tr><td rowspan="1" colspan="1"><select class="filter-select select2-hidden-accessible" data-placeholder="Filter" tabindex="-1" aria-hidden="true"><option value=""></option><option value="Airi Satou">Airi Satou</option><option value="Ashton Cox">Ashton Cox</option><option value="Brielle Williamson">Brielle Williamson</option><option value="Cedric Kelly">Cedric Kelly</option><option value="Charde Marshall">Charde Marshall</option><option value="Colleen Hurst">Colleen Hurst</option><option value="Garrett Winters">Garrett Winters</option><option value="Haley Kennedy">Haley Kennedy</option><option value="Herrod Chandler">Herrod Chandler</option><option value="Jena Gaines">Jena Gaines</option><option value="Quinn Flynn">Quinn Flynn</option><option value="Rhona Davidson">Rhona Davidson</option><option value="Sonya Frost">Sonya Frost</option><option value="Tatyana Fitzpatrick">Tatyana Fitzpatrick</option><option value="Tiger Nixon">Tiger Nixon</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-181d-container"><span class="select2-selection__rendered" id="select2-181d-container"><span class="select2-selection__placeholder">Filter</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></td><td rowspan="1" colspan="1"><select class="filter-select select2-hidden-accessible" data-placeholder="Filter" tabindex="-1" aria-hidden="true"><option value=""></option><option value="Accountant">Accountant</option><option value="Integration Specialist">Integration Specialist</option><option value="Javascript Developer">Javascript Developer</option><option value="Junior Technical Author">Junior Technical Author</option><option value="Office Manager">Office Manager</option><option value="Regional Director">Regional Director</option><option value="Sales Assistant">Sales Assistant</option><option value="Senior Javascript Developer">Senior Javascript Developer</option><option value="Senior Marketing Designer">Senior Marketing Designer</option><option value="Software Engineer">Software Engineer</option><option value="Support Lead">Support Lead</option><option value="System Architect">System Architect</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-flkd-container"><span class="select2-selection__rendered" id="select2-flkd-container"><span class="select2-selection__placeholder">Filter</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></td><td rowspan="1" colspan="1"><select class="filter-select select2-hidden-accessible" data-placeholder="Filter" tabindex="-1" aria-hidden="true"><option value=""></option><option value="19">19</option><option value="22">22</option><option value="23">23</option><option value="30">30</option><option value="33">33</option><option value="36">36</option><option value="39">39</option><option value="43">43</option><option value="55">55</option><option value="59">59</option><option value="61">61</option><option value="63">63</option><option value="66">66</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-qrr0-container"><span class="select2-selection__rendered" id="select2-qrr0-container"><span class="select2-selection__placeholder">Filter</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></td><td rowspan="1" colspan="1"><select class="filter-select select2-hidden-accessible" data-placeholder="Filter" tabindex="-1" aria-hidden="true"><option value=""></option><option value="<a href=" #"="">2008/10/16"&gt;2008/10/16</option><option value="<a href=" #"="">2008/11/28"&gt;2008/11/28</option><option value="<a href=" #"="">2008/12/13"&gt;2008/12/13</option><option value="<a href=" #"="">2008/12/19"&gt;2008/12/19</option><option value="<a href=" #"="">2009/01/12"&gt;2009/01/12</option><option value="<a href=" #"="">2009/09/15"&gt;2009/09/15</option><option value="<a href=" #"="">2010/03/17"&gt;2010/03/17</option><option value="<a href=" #"="">2010/10/14"&gt;2010/10/14</option><option value="<a href=" #"="">2011/04/25"&gt;2011/04/25</option><option value="<a href=" #"="">2011/07/25"&gt;2011/07/25</option><option value="<a href=" #"="">2012/03/29"&gt;2012/03/29</option><option value="<a href=" #"="">2012/08/06"&gt;2012/08/06</option><option value="<a href=" #"="">2012/12/02"&gt;2012/12/02</option><option value="<a href=" #"="">2012/12/18"&gt;2012/12/18</option><option value="<a href=" #"="">2013/03/03"&gt;2013/03/03</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-a2m6-container"><span class="select2-selection__rendered" id="select2-a2m6-container"><span class="select2-selection__placeholder">Filter</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></td><td rowspan="1" colspan="1"><select class="filter-select select2-hidden-accessible" data-placeholder="Filter" tabindex="-1" aria-hidden="true"><option value=""></option><option value="<span class=" label="" label-danger"="">$103,600"&gt;$103,600</option><option value="<span class=" label="" label-danger"="">$113,500"&gt;$113,500</option><option value="<span class=" label="" label-danger"="">$137,500"&gt;$137,500</option><option value="<span class=" label="" label-danger"="">$162,700"&gt;$162,700</option><option value="<span class=" label="" label-danger"="">$170,750"&gt;$170,750</option><option value="<span class=" label="" label-danger"="">$90,560"&gt;$90,560</option><option value="<span class=" label="" label-default"="">$86,000"&gt;$86,000</option><option value="<span class=" label="" label-default"="">$97,900"&gt;$97,900</option><option value="<span class=" label="" label-info"="">$320,800"&gt;$320,800</option><option value="<span class=" label="" label-info"="">$342,000"&gt;$342,000</option><option value="<span class=" label="" label-info"="">$372,000"&gt;$372,000</option><option value="<span class=" label="" label-info"="">$385,750"&gt;$385,750</option><option value="<span class=" label="" label-success"="">$405,500"&gt;$405,500</option><option value="<span class=" label="" label-success"="">$433,060"&gt;$433,060</option><option value="<span class=" label="" label-success"="">$470,600"&gt;$470,600</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hf2x-container"><span class="select2-selection__rendered" id="select2-hf2x-container"><span class="select2-selection__placeholder">Filter</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></td><td rowspan="1" colspan="1"></td></tr>
							</tfoot>
						</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" id="DataTables_Table_3_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_3" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_3" data-dt-idx="3" tabindex="0" id="DataTables_Table_3_next">→</a></div></div></div>
					</div>
					<!-- /individual column searching (selects) -->


					<!-- Footer -->
					<div class="footer text-muted">
						© 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>