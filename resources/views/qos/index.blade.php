@extends('layout.template')
        <!-- START DATA -->
        @section('konten')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href='{{url('qos/create')}}' class="btn btn-primary">+ Tambah Data</a>
            </div>
      
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-1">Longitude</th>
                        <th class="col-md-1">Latitute</th>
                        <th class="col-md-1">Pathloss</th>
			            <th class="col-md-1">Link Budget</th>
			            <th class="col-md-1">Field Strength</th>
			            <th class="col-md-1">CNR</th>
			            <th class="col-md-1">SNR</th>
			            <th class="col-md-1">BER</th>
                        <th class="col-md-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1001</td>
                        <td>Ani</td>
                        <td>Ilmu Komputer</td>
                        <td>1001</td>
                        <td>1001</td>
                        <td>1001</td>
                        <td>1001</td>
                        <td>1001</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">Edit</a>
                            <a href='' class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                </tbody>
            </table>
           
      </div>
      <!-- AKHIR DATA -->
        @endsection
        
