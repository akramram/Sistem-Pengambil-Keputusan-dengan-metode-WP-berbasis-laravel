@extends('layouts.master')

@section('navbar')

@section('content')
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Perhitungan</div>
  <div class="panel-body">
    <center>
      <b>Matrix Alternatif - Kriteria</b>
      <table class="table table-striped table-bordered table-hover">
        <thead><tr><th>Alternatif / Kriteria</th><th>K1</th><th>K2</th><th>K3</th><th>K4</th><th>K5</th></tr></thead>
        @foreach($alternatif as $key => $v)
        <tr>
          <td>{{$v->alternatif}}</td>
          <td>{{$v->k1}}</td>
          <td>{{$v->k2}}</td>
          <td>{{$v->k3}}</td>
          <td>{{$v->k4}}</td>
          <td>{{$v->k5}}</td>

        </tr>
        @endforeach
      </table><hr>

      <b>Perhitungan Bobot Kepentingan</b>
      <table class="table table-striped table-bordered table-hover">
        <thead><tr><th></th><th>K1</th><th>K2</th><th>K3</th><th>K4</th><th>K5</th><th>Jumlah</th></tr></thead>
        <tr>
          <td><b>Kepentingan</b></td>
          @foreach($kriteria as $key => $v)
          <td>{{$v->kepentingan}}</td>
          @endforeach
          <td>{{$tkep}}</td>
        </tr>
          <tr>
            <td>
              <b>Bobot Kepentingan</b>
            </td>
            @foreach($bkep as $key => $v)
            <td>{{$v}}</td>
            @endforeach
            <td>{{$jumlah}}</td>
          </tr>
          </table><hr>

          <b>Perhitungan Pangkat</b>
          <table class="table table-striped table-bordered table-hover">
            <thead><tr><th></th><th>K1</th><th>K2</th><th>K3</th><th>K4</th><th>K5</th></tr></thead>

            <tr>
              <td><b>Cost/Benefit</b></td>
              @foreach($kriteria as $key => $v)
              <td>{{$v->cost_benefit}}</td>
              @endforeach
            </tr>
              <tr>
                <td><b>Pangkat</b></td>
                @foreach($pangkat as $key => $v)
                <td>{{$v}}</td>
                @endforeach
              </tr>
          </table><hr>

              <b>Perhitungan Nilai S</b>
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Alternatif</th>
                    <th>S</th>
                  </tr>
                </thead>
                @foreach($ss as $key => $v)
                <tr>
                  <td>A{{$key}}</td>
                  <td>{{ $v }}</td>
                </tr>
                @endforeach
                <!-- <tr>
                  <td>tada</td>
                  <td>tada</td>
                </tr>
                <tr>
                  <td>tada</td>
                  <td>tada</td>
                </tr> -->
              </table><hr>

              <b>Hasil Akhir</b>
              <table class="table table-striped table-bordered table-hover">
                <th>
                  Nama
                </th>
                <th> V</th>
                @for($i=0;$i<$altcount;$i++)
              <tr>
                <td>{{ $alt_name[$i]  }}</td>
                <td>{{ $vs[$i] }}</td>
              </tr>
              @endfor
              </table><hr>
            <div class="alert alert-dismissible alert-info">

              @foreach($sorted as $key => $value)

                @if($key==0) <b>Dari tabel tersebut dapat disimpulkan bahwa <i>{{$value->alternatif}}</i> mempunyai hasil paling tinggi, yaitu {{$value->hasil}}</b>

                @else <p>diikuti <i>{{$value->alternatif}}</i> dengan hasil {{$value->hasil}}</p>
                @endif
              @endforeach
            </div>
          </center>
          </div>
        </div>
        @stop
