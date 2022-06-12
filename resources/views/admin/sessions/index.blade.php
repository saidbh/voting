@extends('admin.master')
@section('content')
    <div id="content-page" class="content-page">
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
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title w-100">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                                        <h4 class="card-title m-0">Liste des Sessions</h4>
                                        <div class="d-flex flex-row">
                                            <a href="#" class="btn mx-1 btn-success" data-toggle="modal" data-target="#addsessions">Ajouter</a>
                                            <div class="modal fade" id="addsessions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Ajouter Sessions</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('sessions-list.store') }}" method="POST" class="was-validated" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="modal-body">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="fr_name">Nom en Francais</label>
                                                                    <input type="text" class="form-control" id="fr_name" name="fr_name" required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="ar_name">Nom en Arabe</label>
                                                                    <input type="text" class="form-control" id="ar_name" name="ar_name" required>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group">
                                                                      <label for="start_date">Date debut session</label>
                                                                      <input type="date" class="form-control" id="start_date" name="start_date" required>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="end_date">Date fin session</label>
                                                                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                                                                    </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="start_date_vote">Date debut Vote</label>
                                                                        <input type="date" class="form-control" id="start_date_vote" name="start_date_vote" required>
                                                                    </div>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="end_date_vote">Date fin Vote</label>
                                                                    <input type="date" class="form-control" id="end_date_vote" name="end_date_vote" required>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="start_date_result">Date debut Resultat</label>
                                                                    <input type="date" class="form-control" id="start_date_result" name="start_date_result" required>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="end_date_result">Date fin Resultat</label>
                                                                    <input type="date" class="form-control" id="start_date_result" name="end_date_result" required>
                                                                </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                      <button type="submit" class="btn btn-success">ajouter</button>
                                                    </div>
                                                </form>
                                                  </div>
                                                </div>
                                              </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                                <table id="sessions-table" class="table table-sm table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Code Session</th>
                                        <th>Nom</th>
                                        <th>Date debut</th>
                                        <th>Date fin</th>
                                        <th>Date debut vote</th>
                                        <th>Date fin vote</th>
                                        <th>Date debut resultat</th>
                                        <th>Date fin resultat</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sessions as $session)
                                        <tr class="text-center">
                                            <td>{{ $session->cd_session }}</td>
                                            <td>{{ $session->l_ar_sess }} {{ $session->l_fr_sess }}</td>
                                            <td>{{ $session->date_deb_sess }}</td>
                                            <td>{{ $session->date_fin_sess }}</td>
                                            <td>{{ $session->date_vote_start }}</td>
                                            <td>{{ $session->date_vote_end }}</td>
                                            <td>{{ $session->date_result_start }}</td>
                                            <td>{{ $session->date_result_end }}</td>
                                            <td>
                                                @if(Date('Y-m-d',strtotime($session->date_deb_sess)) > Date('Y-m-d'))
                                                <span class="badge badge-primary">Session prochaine</span>
                                                @elseif (Date('Y-m-d',strtotime($session->date_deb_sess)) <= Date('Y-m-d') && Date('Y-m-d') >= Date('Y-m-d',strtotime($session->date_deb_sess)))
                                                    <span class="badge badge-success">Condidature en cour</span>
                                                    @elseif(Date('Y-m-d',strtotime($session->date_vote_start)) <= Date('Y-m-d') && Date('Y-m-d') >=  Date('Y-m-d',strtotime($session->date_vote_end)))
                                                    <span class="badge badge-success">Vote en cour</span>
                                                    @elseif(Date('Y-m-d',strtotime($session->date_result_start)) <= Date('Y-m-d') && Date('Y-m-d') >=  Date('Y-m-d',strtotime($session->date_result_end)))
                                                    <span class="badge badge-success">Resultat en cour</span>
                                                    @elseif(Date('Y-m-d') > Date('Y-m-d',strtotime($session->date_result_end)))
                                                    <span class="badge badge-danger">Session expirer</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <span data-toggle="modal" data-target="#edit{{$session->id}}">
                                                    <a data-toggle="tooltip" data-placement="top" title="Modifier" href="#"><i class="ri-pencil-line"></i></a>
                                                    </span>
                                                    <div class="modal fade" id="edit{{$session->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Modifier Session</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('sessions-list.update',$session->id) }}" method="POST" enctype="multipart/form-data" class="was-validated">
                                                                @csrf
                                                                @method('put')
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                              <label for="fr_name">Nom en Francais</label>
                                                                              <input type="text" class="form-control" id="fr_name" name="fr_name" value="{{ $session->l_fr_sess }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                              <label for="ar_name">Nom en Arabe</label>
                                                                              <input type="text" class="form-control" id="ar_name" name="ar_name" value="{{ $session->l_ar_sess }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="start_date">Date debut session</label>
                                                                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $session->date_deb_sess }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                              <div class="form-group">
                                                                                  <label for="end_date">Date fin session</label>
                                                                                  <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $session->date_fin_sess }}" required>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                              <div class="form-group">
                                                                                  <label for="start_date_vote">Date debut Vote</label>
                                                                                  <input type="date" class="form-control" id="start_date_vote" name="start_date_vote" value="{{ $session->date_vote_start }}" required>
                                                                              </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="end_date_vote">Date fin Vote</label>
                                                                              <input type="date" class="form-control" id="end_date_vote" name="end_date_vote" value="{{ $session->date_vote_end }}" required>
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="start_date_result">Date debut Resultat</label>
                                                                              <input type="date" class="form-control" id="start_date_result" name="start_date_result" value="{{ $session->date_result_start }}" required>
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="end_date_result">Date fin Resultat</label>
                                                                              <input type="date" class="form-control" id="start_date_result" name="end_date_result" value="{{ $session->date_result_end }}" required>
                                                                          </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                              <button type="submit" class="btn btn-success">Modifier</button>
                                                            </div>
                                                        </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    <span data-toggle="modal" data-target="#delete{{$session->id}}">
                                                        <a data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"><i class="ri-delete-bin-line"></i></a>
                                                      </span>
                                                      <div class="modal fade" id="delete{{$session->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('sessions-list.destroy',$session->id) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                            <div class="modal-body">
                                                              Voules vous vraiment supprimer cette session ?
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                              <button type="submit" class="btn btn-danger">Supprimer</button>
                                                            </div>
                                                        </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style rel="stylesheet">

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
                    "targets": 9,
                    "orderable": false
                }],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
                }
            });
            $('#gender').selectpicker({
                liveSearch:true,
                noneResultsText:'Aucun résultat correspondant'
            });
        });
    </script>
@endsection
