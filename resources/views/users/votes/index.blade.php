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
                          <h4 class="card-title m-0">Listes des votes</h4>
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
                                <label for="sessions" class="form-label">Sessions</label>
                                <select class="form-select" aria-label="sessions" id="sessions" name="sessions" required>
                                    <option></option>
                                    @foreach ($sessionslist as $session)
                                    <option value="{{ $session->id }}" >{{ $session->l_ar_sess }} {{ $session->l_fr_sess }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="commissions" class="form-label">Commissions</label>
                                <select class="form-select" aria-label="commissions" id="commissions" name="commissions" required>
                                    <option></option>
                                    @foreach ($commissionslist as $commissions)
                                    <option value="{{ $commissions->id }}" >{{ $commissions->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="disciplines" class="form-label">Disciplines</label>
                                <select class="form-select" aria-label="disciplines" id="disciplines" name="disciplines" required>
                                    <option></option>
                                    @foreach ($displineslist as $disp)
                                    <option value="{{ $disp->id }}">{{ $disp->ar_name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-sm">
                                    <table id="vote-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                      <thead>
                                        <tr class="text-center">
                                          <th>ID</th>
                                          <th>Nom</th>
                                          <th>Prénom</th>
                                          <th>Etablissement</th>
                                          <th>CIN</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
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
      $('#vote-table').DataTable({
        paging: false,
          "columnDefs": [{
              "targets": [0, 4],
              "orderable": false,
          }],
          language: {
              url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
          }
      });
    });
    let sesssion = null;
    let commission = null;
    let discipline = null;
    $('#sessions').on('change',function(){
        let sesssion = $(this).val();
        let commission = $('#commissions').val();
        let discipline = $('#disciplines').val();
        getCondidate(sesssion,commission,discipline);
    });
    $('#commissions').on('change',function(){
        let commission = $(this).val();
        let sesssion = $('#sessions').val();
        let discipline = $('#disciplines').val();
        getCondidate(sesssion,commission,discipline)
    });
    $('#disciplines').on('change',function(){
        let discipline = $(this).val();
        let commission = $('#commissions').val();
        let sesssion = $('#sessions').val();
        getCondidate(sesssion,commission,discipline)
    });
    function getCondidate(sesssion,commission,discipline)
    {
        if(sesssion != "" && commission != "" && discipline != "")
        {
            $.ajax({
        "headers": {
          'X-CSRF-TOKEN': '{{csrf_token()}}',
        },
        "url": "{{route('condidates-voting-list')}}",
        "type": "post",
        "responseType": 'json',
        "data":{
            sesssion:sesssion,
            commission:commission,
            discipline:discipline
        },
        success: function (data) {
            console.log(data);
            $("#vote-table").find('tbody').empty();
            if(data.condidates.length != 0)
            {
                data.condidates.forEach((condidate, index) => {
              $("#vote-table").find('tbody')
              .append(
                $('<tr>').append(
                  $('<td>').addClass('text-center').text(index+1),
                  $('<td>').addClass('text-center').text(condidate.firstname),
                  $('<td>').addClass('text-center').text(condidate.lastname),
                  $('<td>').addClass('text-center').text(condidate.ar_establishment+' '+condidate.fr_establishment),
                  $('<td>').addClass('text-center').text(condidate.cin),
                  $('<td>').addClass('text-center').html(
                    '<div class="flex align-items-center list-user-action">'+
                      '<button type="button" class="btn btn-success" name="vote" data-toggle="modal" data-target="#condidate'+ condidate.id +'">Vote</button>'+
                      '<div class="modal fade" id="condidate'+ condidate.id +'" tabindex="-1" role="dialog" aria-labelledby="condidate'+ condidate.id +'" aria-hidden="true">'+
                        '<div class="modal-dialog" role="document">'+
                        '<div class="modal-content">'+
                            '<div class="modal-header">'+
                            '<h5 class="modal-title" id="exampleModalLabel">Confirmer vote</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>'+
                            '<form action="{{ route('voting-list.store') }}" method="POST" enctype="multipart/form-data">'+
                                '@csrf'+
                            '<div class="modal-body">'+
                                'Voulez-vous vraiment voter a '+ condidate.firstname +' '+ condidate.lastname +' ?'+
                                '<input type="hidden" name="vote" value="'+ condidate.id +'" required>'+
                            '</div>'+
                            '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>'+
                            '<button type="submit" class="btn btn-success">Vote</button>'+
                            '</form>'+
                            '</div>'+
                        '</div>'+
                        '</div>'+
                    '</div>'+
                    '</div>'
                  )
                )
              )
            });
            }else
            {
                $("#vote-table").find('tbody').empty();
            }
        }
      })
        }
    }
  </script>
@endsection