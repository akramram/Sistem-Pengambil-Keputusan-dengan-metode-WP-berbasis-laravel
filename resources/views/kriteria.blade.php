@extends('layouts.master')

@section('navbar')

@section('content')

<div id="page-wrapper">
      <div class="row">
      <div class="col-lg-12">
	  <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Data Kriteria</div>
		    <?php
							// $kriteria = $mysqli->query("select * from kriteria");
							// if(!$kriteria){
							// 	echo $mysqli->connect_errno." - ".$mysqli->connect_error;
							// 	exit();
							// }
							// $i=0;
		    ?>
		  <div class="panel-body table-responsive">
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th>Kriteria</th>					
					<th>Kepentingan</th>
					<th>Cost / Benefit</th>
					<th>Opsi</th>
				</tr>
        @foreach($kriteria as $key=>$data)
				<tr>
          <th>{{$data->id_kriteria}}</th>
					
					<th>{{$data->kriteria}}</th>
					<th>{{$data->kepentingan}}</th>
					<th>{{$data->cost_benefit}}</th>
					<th><button type="button" class="btn btn-warning">Edit</button></th>
				</tr>
        @endforeach
			</thead>
		 
			<tfoot>
				<tr>
					<th>No.</th>
					<th>Kriteria</th>
					<th>Kepentingan</th>
					<th>Cost / Benefit</th>
					<th>Opsi</th>
				</tr>
			</tfoot>
		 
@stop
