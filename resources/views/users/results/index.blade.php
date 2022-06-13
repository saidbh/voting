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
                          <h4 class="card-title m-0">Résultat des votes</h4>
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
                            <div class="col">
                                @if ($condidate->sessions->date_result_start == $sessions->date_result_start)
                                @if ($condidate->statusCandidat->vote_result == 1)
                                <div class="alert alert-success">Félicitation vous étes accepter dans la session {{ $sessions->l_ar_sess }} {{ $sessions->l_fr_sess }} !</div>
                                @else
                                <div class="alert alert-danger">Malheureusement  n'étes pas accepter dans la session {{ $sessions->l_ar_sess }} {{ $sessions->l_fr_sess }} !</div>
                                @endif
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Code Session</th>
                                        <th scope="col">Nom Session</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">CIN</th>
                                        <th scope="col">CNRPS</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{ $sessions->cd_session }}</td>
                                        <td>{{ $sessions->l_ar_sess }} {{ $sessions->l_fr_sess }}</td>
                                        <td>{{ $condidate->first_name }}</td>
                                        <td>{{ $condidate->last_name }}</td>
                                        <td>{{ $condidate->cin }}</td>
                                        <td>{{ $condidate->cnrps }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                @endif
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