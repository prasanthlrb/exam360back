@extends('include.layout')

@section('body')


			<div class="wraper container-fluid">
				<div class="page-title">
					<h3 class="title">Editors</h3>
				</div>

				<div class="row">

					<div class="col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Question 1</h3>
							</div>
							<div class="panel-body">
								<div class="summernote">
									Hello Summernote
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- End row -->
				<div class="row">

					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1 option <button type="button" class="btn btn-success btn-custom m-b-5">
                                    Correct Answer
                                    </button></h3>
							</div>
							<div class="panel-body">
								<div class="summernote">
									Hello Summernote
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">2 option <button type="button" class="btn btn-success btn-custom m-b-5">
                                    Correct Answer
                                    </button></h3>
							</div>
							<div class="panel-body">
								<div class="summernote">
									Hello Summernote
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">3 option <button type="button" class="btn btn-success btn-custom m-b-5">
                                    Correct Answer
                                    </button></h3>
							</div>
							<div class="panel-body">
								<div class="summernote">
									Hello Summernote
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">4 option <button type="button" class="btn btn-success btn-custom m-b-5">
								Correct Answer
                                </button>
                                <i class="fa fa-close fa-2x text-danger pull-right"></i>
                            </h3>
							</div>
							<div class="panel-body">
								<div class="summernote">
									Hello Summernote
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <button type="button" class="btn btn-block btn-lg btn-info">
                            <i class="fa fa-plus fa-1x"></i> Add More options
                        </button>
                            </div>

				</div>
				<!-- End row -->
                <div class="row">

					<div class="col-sm-3">
				<button type="button" class="btn btn-block btn-lg btn-default">
                    <i class="fa fa-plus fa-1x"></i> Add More Questions
                </button>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <button type="button" class="btn btn-block btn-lg btn-success">
                            Save Questions
                        </button>
                            </div>
                </div>
                

			</div>
			<!-- Page Content Ends -->

@endsection