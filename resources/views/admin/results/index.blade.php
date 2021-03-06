@extends('admin.master')
@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title w-100">
                        <div class="row">
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                          <h4 class="card-title m-0">Listes de Resultat des votes</h4>
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
                                <label for="sessionslist" class="form-label">Sessions</label>
                                <select class="form-control" aria-label="sessions" id="sessionslist" name="sessionslist" required>
                                    <option></option>
                                    @foreach ($sessionslist as $session)
                                    <option value="{{ $session->id }}" >{{ $session->l_ar_sess }} {{ $session->l_fr_sess }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="commissions" class="form-label">Commissions</label>
                                <select class="form-control" aria-label="commissions" id="commissions" name="commissions" required>
                                    <option></option>
                                    @foreach ($commissionslist as $commissions)
                                    <option value="{{ $commissions->id }}" >{{ $commissions->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="disciplines" class="form-label">Disciplines</label>
                                <select class="form-control" aria-label="disciplines" id="disciplines" name="disciplines" required>
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
                                          <th>Pr??nom</th>
                                          <th>Etablissement</th>
                                          <th>CIN</th>
                                          <th>CNRPS</th>
                                          <th>Nombre de votes</th>
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
    $('#sessionslist').on('change',function(){
        let sesssion = $(this).val();
        let commission = $('#commissions').val();
        let discipline = $('#disciplines').val();
        getCondidate(sesssion,commission,discipline);
    });
    $('#commissions').on('change',function(){
        let commission = $(this).val();
        let sesssion = $('#sessionslist').val();
        let discipline = $('#disciplines').val();
        getCondidate(sesssion,commission,discipline)
    });
    $('#disciplines').on('change',function(){
        let discipline = $(this).val();
        let commission = $('#commissions').val();
        let sesssion = $('#sessionslist').val();
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
        "url": "{{route('votes-results')}}",
        "type": "post",
        "responseType": 'json',
        "data":{
            sesssion:sesssion,
            commission:commission,
            discipline:discipline
        },
        success: function (data) {
            $("#vote-table").find('tbody').empty();
            if(data.results.length != 0)
            {
                data.results.forEach((result, index) => {
                    console.log(result.status);
                    if(result.status == null)
                    {
                    $("#vote-table").find('tbody')
                    .append(
                        $('<tr>').append(
                        $('<td>').addClass('text-center').text(index+1),
                        $('<td>').addClass('text-center').text(result.firstname),
                        $('<td>').addClass('text-center').text(result.lastname),
                        $('<td>').addClass('text-center').text(result.ar_establishment),
                        $('<td>').addClass('text-center').text(result.cin),
                        $('<td>').addClass('text-center').text(result.cnrps),
                        $('<td>').addClass('text-center').text(result.votesNumber),
                        $('<td>').addClass('text-center').html(
                            '<div class="flex align-items-center list-user-action">'+
                                '<span data-toggle="modal" data-target="#accept'+ result.id +'">'+
                                '<a data-toggle="tooltip" data-placement="top" title="Accepter" href="#"><i class="ri-checkbox-circle-fill ri-2x" style="color:green"></i></a>'+
                                '</span>'+
                                '<div class="modal fade" id="accept'+ result.id +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
                                '<div class="modal-dialog" role="document">'+
                                    '<div class="modal-content">'+
                                    '<div class="modal-header">'+
                                        '<h5 class="modal-title" id="exampleModalLabel">Accepter candidat</h5>'+
                                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                        '<span aria-hidden="true">&times;</span>'+
                                        '</button>'+
                                    '</div>'+
                                    '<form action="{{ route('results-list.store') }}" method="POST">'+
                                        '@csrf'+
                                    '<div class="modal-body">'+
                                        'Voulez vous vraiment accepter ce candidat ?'+
                                        '<input type="hidden" class="form-control" name="candidate" value="'+ result.id +'" required>'+
                                        '<input type="hidden" class="form-control" name="vote_number" value="'+ result.votesNumber +'" required>'+
                                        '<input type="hidden" class="form-control" name="vote_result" value="1" required>'+
                                    '</div>'+
                                    '<div class="modal-footer">'+
                                        '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>'+
                                        '<button type="submit" class="btn btn-success">Confirmer</button>'+
                                    '</div>'+
                                    '</form>'+
                                    '</div>'+
                                '</div>'+
                                '</div>'+
                                '<span data-toggle="modal" data-target="#deny'+ result.id +'">'+
                                    '<a data-toggle="tooltip" data-placement="top" title="Refus??" href="#"><i class="ri-close-circle-fill ri-2x" style="color:red"></i></a>'+
                                '</span>'+
                                '<div class="modal fade" id="deny'+ result.id +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
                                '<div class="modal-dialog" role="document">'+
                                    '<div class="modal-content">'+
                                    '<div class="modal-header">'+
                                        '<h5 class="modal-title" id="exampleModalLabel">Rejeter candidat</h5>'+
                                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                        '<span aria-hidden="true">&times;</span>'+
                                        '</button>'+
                                    '</div>'+
                                    '<form action="{{ route('results-list.store') }}" method="POST">'+
                                        '@csrf'+
                                    '<div class="modal-body">'+
                                        'Voulez vous vraiment Rejeter ce candidat ?'+
                                        '<input type="hidden" class="form-control" name="candidate" value="'+ result.id +'" required>'+
                                        '<input type="hidden" class="form-control" name="vote_number" value="'+ result.votesNumber +'" required>'+
                                        '<input type="hidden" class="form-control" name="vote_result" value="0" required>'+
                                    '</div>'+
                                    '<div class="modal-footer">'+
                                        '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>'+
                                        '<button type="submit" class="btn btn-danger">Rejeter</button>'+
                                    '</div>'+
                                    '</form>'+
                                    '</div>'+
                                '</div>'+
                                '</div>'+
                            '</div>'
                            ),
                        )
                    )
                    }else if(result.status == 1)
                    {
                        $("#vote-table").find('tbody')
                    .append(
                        $('<tr>').append(
                        $('<td>').addClass('text-center').text(index+1),
                        $('<td>').addClass('text-center').text(result.firstname),
                        $('<td>').addClass('text-center').text(result.lastname),
                        $('<td>').addClass('text-center').text(result.ar_establishment),
                        $('<td>').addClass('text-center').text(result.cin),
                        $('<td>').addClass('text-center').text(result.cnrps),
                        $('<td>').addClass('text-center').text(result.votesNumber),
                        $('<td>').addClass('text-center').html(
                            '<span class="badge badge-success">Accepter</span>'
                            )
                        )
                    )
                    }else
                    {
                        $("#vote-table").find('tbody')
                    .append(
                        $('<tr>').append(
                        $('<td>').addClass('text-center').text(index+1),
                        $('<td>').addClass('text-center').text(result.firstname),
                        $('<td>').addClass('text-center').text(result.lastname),
                        $('<td>').addClass('text-center').text(result.ar_establishment),
                        $('<td>').addClass('text-center').text(result.cin),
                        $('<td>').addClass('text-center').text(result.cnrps),
                        $('<td>').addClass('text-center').text(result.votesNumber),
                        $('<td>').addClass('text-center').html(
                            '<span class="badge badge-danger">Rejet??</span>'
                            )
                        )
                    )
                    }
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