@extends('template.master')
@section('title', 'dashboard')
@section('judul', 'Dashboard')
@section('breadcrumb')
    <div class="breadcrumb-item active">
        Dashboard
    </div>
@endsection
@section('main')
    <div class="row">
        <div class="col mt-3">
            <h3 style="color:#34395e">{{ $jam_masuk }}</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-5 p-0 mt-0 card profile-widget">
            <div class="profile-widget-header mb-0">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Hadir</div>
                        <div class="profile-widget-item-value pp-font">187</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Sakit</div>
                        <div class="profile-widget-item-value pp-font">6,8K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Izin</div>
                        <div class="profile-widget-item-value pp-font">2,1K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Telat</div>
                        <div class="profile-widget-item-value pp-font">2,1K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Alpha</div>
                        <div class="profile-widget-item-value pp-font">2,1K</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 px-1">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 style="color: #34395e">Qoutes</h4>
                        </div>
                        <div class="card-body">
                            <q class="text-bold font-italic">Barang siapa yang tidak mau merasakan
                                pahitnya belajar, ia akan merasakan hinanya kebodohan sepanjang hidupnya</q>
                        </div>
                        <div class="card-footer text-capitalize font-weight-bold text-right"
                            style="background-color: #F7F9F9">
                            - imam syafi'i
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 px-1">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 style="color: #34395e">Presensi Hari Ini</h4>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-between">
                                <button class="col mr-1 btn btn-success" disabled>Masuk</button>
                                <button class="col ml-1 btn btn-primary" disabled>Selesai</button>
                            </div>
                            <div class="row">
                                <div class="col mr-1 text-center font-weight-bold py-4 pp-font">07:05</div>
                                <div class="col ml-1 text-center font-weight-bold py-4 pp-font">12:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 style="color: #34395e">Pemberitahuan</h4>
                        </div>
                        <div class="card-body">
                            <div>sPaCe iKlAn nGaB, sEkOlAh kItA AdAiN ExPoSe dAy bUlAn aPrIl nGaB</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 px-1">
            <div class="card card-warning">
                <div class="card-header">
                    <h4 style="color: #34395e">Top Peringkat Presensi</h4>
                    <div class="card-header-form">
                        <div class="input-group">
                            <input type="text" id="searchDataTables" name="search" class="form-control"
                                placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="table-responsive">
                        <table id="dataTables" class="table table-striped dataTable no-footer cell-border text-capitalize"
                            style="width:100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th scope="col-1">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Hadir</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr role="row">
                                    <td>1</td>
                                    <td>Adio's Amigos</td>
                                    <td>XI Rekayasa Perangkat Lunak 1</td>
                                    <td>2003</td>
                                </tr>
                                <tr role="row">
                                    <td>2</td>
                                    <td>Adio's Amigos</td>
                                    <td>XI Rekayasa Perangkat Lunak 1</td>
                                    <td>2003</td>
                                </tr>
                                <tr role="row">
                                    <td>3</td>
                                    <td>Adio's Amigos</td>
                                    <td>XI Rekayasa Perangkat Lunak 1</td>
                                    <td>2003</td>
                                </tr>
                                <tr role="row">
                                    <td>4</td>
                                    <td>Adio's Amigos</td>
                                    <td>XI Rekayasa Perangkat Lunak 1</td>
                                    <td>2003</td>
                                </tr>
                                <tr role="row">
                                    <td>5</td>
                                    <td>Adio's Amigos</td>
                                    <td>XI Rekayasa Perangkat Lunak 1</td>
                                    <td>2003</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
@endpush
@push('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables-custom.js') }}"></script>
@endpush
