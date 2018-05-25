 @extends('include.layout')

@section('body')
<div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Create Institute</h3> 
                </div>
                  <!-- Form-validation -->
                <div class="row">
                
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Create Institute</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                        <div class="form-group ">
                                            <label for="firstname" class="control-label col-lg-2">Institute Name *</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="firstname" name="firstname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="lastname" class="control-label col-lg-2">Mobile Number  *</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="lastname" name="lastname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="username" class="control-label col-lg-2">Contact Person *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="username" name="username" type="text">
                                            </div>
                                        </div>
                                         <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2">Email (Username)*</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="email" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="password" class="control-label col-lg-2">Password *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="password" name="password" type="password">
                                            </div>
                                        </div>
                                         <div class="form-group ">
                                            <label for="username" class="control-label col-lg-2">GSTIN *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="gstin" name="gstin" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-2">Address *</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control " id="ccomment" name="comment" required="" aria-required="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
										<label class="col-sm-2 control-label"> Select Package</label>
										<div class="col-sm-10">
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
                                                </select>
											
										</div>
									</div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->
                

            </div>
            <!-- Page Content Ends -->
 @endsection