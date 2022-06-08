@extends('layouts.app')
@section('content')
<div class="content-page2">
    <div class="container-fluid">
        <div class="row">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title w-100">
                        <div class="row">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                          <h4 class="card-title m-0">Sessions</h4>
{{--                                 <div class="d-flex flex-row">
                                    <a href="#" class="btn mx-1 btn-success">PDF</a>
                                    <a href="#" class="btn btn-success">Excel</a>
                                    <a href="#" class="btn ml-1 btn-success">Imprimer</a> 
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="form-label">--</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">--</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">--</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-sm">
                                    <table id="sessions-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                      <thead>
                                        <tr class="text-center">
                                          <th>ID</th>
                                          <th>Nom</th>
                                          <th>Prénom</th>
                                          <th>Agence</th>
                                          <th>Cour</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .content-page2
    { 
    overflow: hidden;
    padding: 100px 15px 0;
    min-height: 100vh;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    }
    .custom-select {
    width: auto;
    display: inline-block;
    padding: 0 5px;
    height: 20px;
    line-height: 20px;
  }
  .dropdown-menu .inner ul li {
    position: relative;
    font-size: 14px;
    height: 30px;
    display: flex;
    align-items: center;
    padding: 0 10px;
  }
</style>
<script>
    $(document).ready(function() {
      $('#sessions-table').DataTable({
          "columnDefs": [{
              "targets": [0, 4],
              "orderable": false,
          }],
          language: {
              url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
          }
      });
    });
  </script>
@endsection