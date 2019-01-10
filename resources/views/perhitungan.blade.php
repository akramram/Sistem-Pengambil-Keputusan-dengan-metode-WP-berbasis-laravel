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
              </tr>
          </table><hr>

              <b>Perhitungan Nilai S</b>
              <table class="table table-striped table-bordered table-hover">
                <thead><tr><th>Alternatif</th><th>S</th></tr></thead>
              </table><hr>

              <b>Hasil Akhir</b>
              <table class="table table-striped table-bordered table-hover">
                <thead><tr><th>Alternatif</th><th>V</th></tr></thead>
              </table><hr>
            </center>
          </div>
        </div>
        @stop
