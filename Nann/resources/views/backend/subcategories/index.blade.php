@extends('backtemplate')

@section('content')

	<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategories</h1>
		<a href="{{route('subcategories.create')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Subcategory</a>
	</div>

	<!-- Color list table-->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Subcategory List</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Category_id</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Category_id</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@php $i=1;	@endphp
						@foreach($subcategories as $subcategory)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$subcategory->name}}</td>
							<td>{{$subcategory->category->name}}</td>
							<td>
								<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
								<form method="POST" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you Sure?')" class="d-inline-block">
									@csrf
									@method('DELETE')
									<div class="form-group">
										<span class="del"><i class="fas fa-trash" aria-hidden="true"></i></span>
									<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger del">
									</div>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection