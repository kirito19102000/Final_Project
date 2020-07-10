@extends('master')

@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('Home')}}">Home</a> / <span>Admin Panel</span> / <span>Admin Panel</span>
				</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>

<script>
$(document).ready(function(){
	$('delete_form').on('submit', function(){
		if(confirm("Are you sure you want to delete it?")){
			return true;
		} else {
			return false;
		}
	});
});
</script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th {
  border-top: 1px solid #00ae4d;
  border-bottom: 1px solid #00ae4d;
  text-align: left;
  padding: 8px;
}

td{
  border-bottom: 1px solid #00ae4d;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}
</style>
	<div class="container">
		<div id="content">
				<div class="row">    
					<h3>Products Management</h3>
				</div>
				<br>
				@if($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{$message}}</p>
				</div>
				@endif
				<div align="right">
                    <a href="{{route('product.create')}}"><button type="button" class="btn btn-warning">Add</button></a>
                </div>
                @foreach($bill_detail as $bill_detail)
                <div>
                @foreach($bill as $bill)
                cc
                @endforeach
            	</div>
                @endforeach
            </div>
			<table>
				<tr>
					<th scope="col">username</th>
					<th scope="col">Total</th>
					<th scope="col">Product_ID</th>
					<th scope="col">Price</th>
					<th scope="col">Actions</th>
				</tr>
				@foreach($bill_detail as $bill_detail)
				<tr>
					<th scope="col">Product_ID</th>
					<th scope="col">Price</th>
					<th scope="col">Actions</th>
				</tr>
					<td>{{$bill_detail->Product_ID}}</td>
					<td>{{$bill_detail->Price}}</td>	
				@endforeach
				@foreach($bill as $bill)
				<tr>
					<th scope="col">username</th>
					<th scope="col">Total</th>

				</tr>
				  <tr>
				  	<td>{{$bill->username}}</td>
					<td>{{$bill->Total}}</td>		
				 </tr>

				@endforeach
		</table>


		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection