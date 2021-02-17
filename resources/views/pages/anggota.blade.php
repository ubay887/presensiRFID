@extends('template.master')
@section('title', 'E - Presensi | Data Anggota')
@section('judul', 'Data Anggota')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Data Anggota
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4>Basic DataTables</h4>
        </div>
        <div class="card-body">
            <div class="table">
                <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="table-1_length"><label>Show <select name="table-1_length" aria-controls="table-1" class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="text-center sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" style="width: 31.7333px;" aria-sort="ascending" aria-label="
                              #
                            : activate to sort column descending">
                                            #
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" style="width: 170.05px;" aria-label="Task Name: activate to sort column ascending">Task Name</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 89.9833px;" aria-label="Progress">Progress</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 233.667px;" aria-label="Members">Members</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" style="width: 103.483px;" aria-label="Due Date: activate to sort column ascending">Due Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" style="width: 124.75px;" aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" style="width: 85.1333px;" aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            1
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                                <div class="progress-bar bg-success" data-width="100%" style="width: 100%;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            2
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="0%" style="height: 4px;">
                                                <div class="progress-bar" data-width="0" style="width: 0px;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Nur Alpiana" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Hariono Yusup" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Bagus Dwi Cahya" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            3
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="70%" style="height: 4px;">
                                                <div class="progress-bar bg-warning" data-width="70%" style="width: 70%;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Hasan Basri" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            4
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                                <div class="progress-bar bg-success" data-width="100%" style="width: 100%;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Isnap Kiswandi" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Yudi Nawawi" width="35">
                                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Khaerul Anwar" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="card">
        <div class="row mt-3">
            <div class="col mx-4">
                <div class="d-flex justify-content-start">
                    <a href="#" class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</a>
                    <a href="#" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
                </div>
            </div>
            <div class="col mx-4">
                <div class="d-flex justify-content-end">
                    <form class="card-header-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" aria-expanded="false">Export Data</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



<!-- <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Card</th>
                        <th scope="col">ID Chat</th>
                        <th scope="col">No. Induk</th>
                        <th scope="col">L/P</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Terdaftar</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->

@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endpush