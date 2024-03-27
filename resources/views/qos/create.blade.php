@extends('layout.template')
        <!-- START FORM -->
        @section('konten')
        
        @if ($errors->any())
            <div class="pt-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        
        <form action='{{url('qos/index')}}' method='post'>
        @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="display-6 fw-bold mb-4">Input Parameter QOS</div>
                <div class="mb-3 row">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='longitude' value={{Session::get('longitude')}} id="longitude" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='latitude' value={{Session::get('latitude')}} id="latitude" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pathloss" class="col-sm-2 col-form-label">Pathloss</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='pathloss' value={{Session::get('pathloss')}} id="pathloss" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="link_budget" class="col-sm-2 col-form-label">Link Budget</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='link_budget' value={{Session::get('link_budget')}} id="link_budget" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="field_strength" class="col-sm-2 col-form-label">Field Stength</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='field_strength' value={{Session::get('field_strength')}} id="field_strength" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cnr" class="col-sm-2 col-form-label">CNR</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='cnr' value={{Session::get('cnr')}}  id="cnr" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="snr" class="col-sm-2 col-form-label">SNR</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='snr' value={{Session::get('snr')}}  id="snr" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ber" class="col-sm-2 col-form-label">BER</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='ber' value={{Session::get('ber')}}  id="ber" step="0.0001">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ber" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                </div>
            </div>
        </form>
            <!-- AKHIR FORM -->
        @endsection
        