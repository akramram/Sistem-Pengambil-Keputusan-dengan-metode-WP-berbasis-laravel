@extends('layouts.master')

@section('navbar')

@section('content')

		 <!-- Main component for a primary marketing message or call to action -->
         <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Data Alternatif</div>
						<?php
							//include 'config.php';
							// 				$kriteria = $mysqli->query("select * from kriteria");
							// 				if(!$kriteria){
							// 					echo $mysqli->connect_errno." - ".$mysqli->connect_error;
							// 					exit();
							// 				}
							// 				$i=0;
							// 				while ($row = $kriteria->fetch_assoc()) {
							// 					@$k[$i] = $row["kriteria"];
							// 					$i++;
							// 				}
							// $alternatif = $mysqli->query("select * from alternatif");
							// if(!$alternatif){
							// 	echo $mysqli->connect_errno." - ".$mysqli->connect_error;
							// 	exit();
							// }
							// $i=0;
						?>
		  <div class="panel-body table-responsive">
			<a class='btn btn-primary' href='addalternatif'> Tambah Data Alternatif</a><br /><br />
			<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th>Alternatif</th>
                    @foreach($kriteria as $key=>$d)
                    <th>{{$d->kriteria}}</th>
                    @endforeach

					<th>Pilihan</th>
				</tr>

                @foreach($alternatif as $key=>$data)
                    <tr>
                    <th>{{$data->id_alternatif}}</th>
                    <th>{{$data->alternatif}}</th>
                    <th>{{$data->k1}}</th>
                    <th>{{$data->k2}}</th>
                    <th>{{$data->k3}}</th>
                    <th>{{$data->k4}}</th>
                    <th>{{$data->k5}}</th>
					<th>
                    <a class="btn btn-info" href="{{route('editAlternatif',$data->id_alternatif)}}">Edit</a>
                    <form action="{{ route('destroy', $data->id_alternatif)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </th>
                    </tr>
                @endforeach
			</thead>

			<tfoot>
				<tr>
                    <th>No.</th>
					<th>Alternatif</th>
                    @foreach($kriteria as $key=>$d)
                    <th>{{$d->kriteria}}</th>
                    @endforeach
					<th>Pilihan</th>
				</tr>
			</tfoot>

			<tbody>
										<?php

										?>
			</tbody>
			</table>
		  </div>

@stop
