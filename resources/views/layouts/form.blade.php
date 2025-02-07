@extends('layouts.appForm')
@section('content')
	
			

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					

					<div class="row">
						<div class="col-md-6 ">
							<div class="x_panel">
							  
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
									<form method="POST" action="{{ route('form.add') }}" class="form-label-left input_mask">
									@csrf
										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" name = "pot_name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="pot name">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text"  name = "pot_type" class="form-control" id="inputSuccess3" placeholder="Pot type">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" name = "pot_number" class="form-control has-feedback-left" id="inputSuccess4" placeholder="pot number">
											<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
										</div>

										

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">pot category</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name = "pot_category" class="form-control" placeholder="pot category">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" name = "pot_manufacture_date" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="button" class="btn btn-primary">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							
							</div>

							<div class="x_panel">
								<div class="x_title">
									<h2>Star Rating</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<h4>Star Ratings<small> Hover and click on a star</small></h4>
									<div>
										<div class="starrr stars"></div>
										You gave a rating of <span class="stars-count">0</span> star(s)
									</div>

									<p>Also you can give a default rating by adding attribute data-rating</p>
									<div class="starrr stars-existing" data-rating='4'></div>
									You gave a rating of <span class="stars-count-existing">4</span> star(s)
								</div>
							</div>

							<div class="x_panel">
								<div class="x_title">
									<h2>Registration Form <small>Click to validate</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<!-- start form for validation -->
									<form id="demo-form" data-parsley-validate>
										<label for="fullname">Full Name * :</label>
										<input type="text" id="fullname" class="form-control" name="fullname" required />

										<label for="email">Email * :</label>
										<input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

										<label>Gender *:</label>
										<p>
											M:
											<input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
											<input type="radio" class="flat" name="gender" id="genderF" value="F" />
										</p>

										<label>Hobbies (2 minimum):</label>
										<p style="padding: 5px;">
											<input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
											<br />

											<input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
											<br />

											<input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
											<br />

											<input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
											<br />
											<p>

												<label for="heard">Heard us by *:</label>
												<select id="heard" class="form-control" required>
													<option value="">Choose..</option>
													<option value="press">Press</option>
													<option value="net">Internet</option>
													<option value="mouth">Word of mouth</option>
												</select>

												<label for="message">Message (20 chars min, 100 max) :</label>
												<textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

												<br />
												<span class="btn btn-primary">Validate form</span>

									</form>
									<!-- end form for validations -->

								</div>
							</div>


						</div>

						<div class="col-md-6 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Basic Elements <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form class="form-horizontal form-label-left">

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Default Input</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Default Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Disabled Input </label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Read-Only Input</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<textarea class="form-control" rows="3" placeholder="Date Of Birth"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Password</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="password" class="form-control" value="passwordonetwo">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">AutoComplete</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="form-control">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Custom</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Grouped</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_group form-control">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Multiple</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_multiple form-control" multiple="multiple">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
													<option>Option five</option>
													<option>Option six</option>
												</select>
											</div>
										</div>

										<div class="control-group row">
											<label class="control-label col-md-3 col-sm-3 ">Input Tags</label>
											<div class="col-md-9 col-sm-9 ">
												<input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
												<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-9 col-sm-9 ">
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option one. select more than one options
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option two. select more than one options
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
													</label>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-9 col-sm-9 ">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" checked="checked"> Checked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat"> Unchecked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" checked name="iCheck"> Checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck"> Unchecked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Switch</label>
											<div class="col-md-9 col-sm-9 ">
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" checked /> Checked
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" /> Unchecked
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
													</label>
												</div>
											</div>
										</div>


										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="button" class="btn btn-primary">Cancel</button>
												<button type="reset" class="btn btn-primary">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>


						<div class="col-md-6 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Buttons <small>Sessions</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<form class="form-horizontal form-label-left">

										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Button addons</label>

											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-primary go-class">Go!</button>
													</span>
													<input type="text" class="form-control">
												</div>
												<div class="input-group">
													<input type="text" class="form-control">
													<span class="input-group-btn">
														<button type="button" class="btn btn-primary">Go!</button>
													</span>
												</div>
											</div>
										</div>
										<div class="divider-dashed"></div>

										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Button addons</label>

											<div class="col-sm-9">
												<div class="dropdown input-group row">
													<input type="text" class="form-control" aria-label="Text input with dropdown button">
													<div class="input-group-btn">
														<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu dropdown-menu-right" role="menu">
															<li><a class="dropdown-item" href="#">Action</a>
															</li>
															<li><a class="dropdown-item" href="#">Another action</a>
															</li>
															<li><a class="dropdown-item" href="#">Something else here</a>
															</li>
															<li class="divider"></li>
															<li><a class="dropdown-item" href="#">Separated link</a>
															</li>
														</ul>
													</div>
													<!-- /btn-group -->
												</div>
												<div class="input-group">
													<input type="text" class="form-control">
													<span class="input-group-btn">
														<button type="button" class="btn btn-primary">Go!</button>
													</span>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 ">
						
					</div>

					


					<div class="x_panel">
						<div class="x_title">
							<h2>Form Design <small>different form elements</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Settings 1</a>
										<a class="dropdown-item" href="#">Settings 2</a>
									</div>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />

							<h4>Horizontal labels</h4>
							<p class="font-gray-dark">
								Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
							</p>
							<form class="form-horizontal form-label-left">
								<div class="form-group row">
									<label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>
									</label>
									<div class="col-md-7">
										<input type="text" id="first-name2" required="required" class="form-control col-md-7 ">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3" for="last-name">Last Name <span class="required">*</span>
									</label>
									<div class="col-md-7">
										<input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 ">
									</div>
								</div>
							</form>


							<h4>Vertical labels</h4>
							<p class="font-gray-dark">
								For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
							</p>
							<div class="col-md-8 center-margin">
								<form class="form-horizontal form-label-left">
									<div class="form-group row">
										<label>Email address</label>
										<input type="email" class="form-control" placeholder="Enter email">
									</div>
									<div class="form-group row">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="Password">
									</div>

								</form>
							</div>

							<h4>Inline Form </h4>
							<p class="font-gray-dark">
								Add .form-inline to your form (which doesn't have to be a &lt;form&gt;) for left-aligned and inline-block controls.
							</p>
							<form class="form-inline">
								<div class="form-group">
									<label for="ex3" class="col-form-label">Email address</label>
									<input type="text" id="ex3" class="form-control" placeholder=" ">
								</div>
								<div class="form-group">
									<label for="ex4" class="col-form-label">Email address</label>
									<input type="email" id="ex4" class="form-control" placeholder=" ">
								</div>
								<div class="form-check">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-secondary">Send invitation</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

@endsection		


