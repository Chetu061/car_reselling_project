





<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <div class="p-6 bg-white border-b border-gray-200">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 AJAX CRUD using DataTable js Tutorial From Scratch - Tutsmake.com</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add User</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="card-body">
<table class="table table-bordered" id="ajax-crud-datatable">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
</table>
</div>
</div>
<!-- boostrap company model -->
<div class="modal fade" id="company-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="CompanyModal"></h4>
</div>
<div class="modal-body">
<form action="javascript:void(0)" id="CompanyForm" name="CompanyForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" id="id">
<div class="form-group">
<label for="name" class="col-sm-2 control-label"> Name</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="50" required="">
</div>
</div>
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" maxlength="50" required="">
    </div>
    </div>
<div class="form-group">
<label for="name" class="col-sm-2 control-label"> Email</label>
<div class="col-sm-12">
<input type="email" class="form-control" id="email" name="email" placeholder="Enter  Email" maxlength="50" required="">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Address</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required="">
</div>
</div>
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary" id="btn-save">Save
</button>
</div>
</form>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
<!-- end bootstrap model -->
</body>
</div>
</div>
</div>
</div>

<script type="text/javascript">
$(document).ready( function () {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#ajax-crud-datatable').DataTable({
processing: true,
serverSide: true,
ajax: "{{ url('ajax-crud-datatable') }}",
columns: [
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'last_name', name: 'last_name' },
{ data: 'email', name: 'email' },
{ data: 'address', name: 'address' },

{data: 'action', name: 'action', orderable: false},
],
order: [[0, 'desc']]
});
});

function add(){
$('#CompanyForm').trigger("reset");
$('#CompanyModal').html("Add User");
$('#company-modal').modal('show');
$('#id').val('');
}
function editFunc(id){
$.ajax({
type:"POST",
url: "{{ url('edit-company') }}",
data: { id: id },
dataType: 'json',
success: function(res){
$('#CompanyModal').html("Edit Company");
$('#company-modal').modal('show');
$('#id').val(res.id);
$('#name').val(res.name);
$('#last_name').val(res.last_name);
$('#address').val(res.address);
$('#email').val(res.email);
}
});
}
function deleteFunc(id){
if (confirm("Delete Record?") == true) {
var id = id;
// ajax
$.ajax({
type:"POST",
url: "{{ url('delete-company') }}",
data: { id: id },
dataType: 'json',
success: function(res){
var oTable = $('#ajax-crud-datatable').dataTable();
oTable.fnDraw(false);
}
});
}
}
$('#CompanyForm').submit(function(e) {
e.preventDefault();
var formData = new FormData(this);
$.ajax({
type:'POST',
url: "{{ url('store-company')}}",
data: formData,
cache:false,
contentType: false,
processData: false,
success: (data) => {
$("#company-modal").modal('hide');
var oTable = $('#ajax-crud-datatable').dataTable();
oTable.fnDraw(false);
$("#btn-save").html('Submit');
$("#btn-save"). attr("disabled", false);
},
error: function(data){
console.log(data);
}
});
});
</script>
</html>
</x-app-layout>
