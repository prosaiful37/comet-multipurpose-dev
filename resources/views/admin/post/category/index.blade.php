@extends('admin.layouts.app')


@section('main-content')
		<!-- Main Wrapper -->
        <div class="main-wrapper">

            @include('admin.layouts.header')
            @include('admin.layouts.menu')


			<!-- Page Wrapper -->
            <div class="page-wrapper">

                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Category page</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Category</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <div class="row">
                        <div class="col-lg-12">
                                @include('validate')
                             <a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_category_modal">Add New Category</a>

                             <br>
                             <br>

							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Categories</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Category title</th>
													<th>Category slug</th>
													<th>Create</th>
													<th>status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($all_data as $data)
                                                    
                                                
												<tr>
													<td>1</td>
													<td>{{$data -> name}}</td>
													<td>{{ $data -> slug }}</td>
													<td>{{$data -> created_at -> diffForHumans() }}</td>
													<td>
                                                        @if($data -> status == true)
                                                        <span class="badge badge-success">Published</span>
                                                        @else()
                                                        <span class="badge badge-danger">Unpublished</span>
                                                        @endif
                                                    </td>
													<td>
                                                        <a class="btn btn-sm btn-info" href="#">View</a>
                                                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                        <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                    </td>
												</tr>

                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
                    </div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

    {{-- student modal data sent --}}
	<div id="add_category_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">

            </div>
            <div style="background-color:#1B5A90;" class="modal-body text-white">
                <h4>Add New Category</h4>
                <div class="mess"></div>
                <hr>
             <form action="{{ route('Category.store') }}" method="POST">
                @csrf
              <div class="form-group">
                  <label for="">Name</label>
                  <input name="name" type="text" class="form-control">
              </div>
                <div class="form-group">
                    <input class="btn btn-dark btn-sm" type="submit" value="Add New">
                </div>
             </form>
            </div>
          </div>
        </div>
      </div>
@endsection
