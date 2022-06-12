@extends('layouts.app')
@section('content')
<div class="content-page2">
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
                          <h4 class="card-title m-0">Condidature</h4>
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
                    @if (!$condidate)
                    <form action="{{ route('condidates.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sessions" class="form-label">Sessions</label>
                                <select class="form-select" aria-label="sessions" id="sessions" name="sessions" required>
                                    <option></option>
                                    @foreach ($condidateSessions as $session)
                                    <option value="{{ $session->id }}">{{ $session->l_ar_sess }} {{ $session->l_fr_sess }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="commissions" class="form-label">Commissions</label>
                                <select class="form-select" aria-label="commissions" id="commissions" name="commissions" required>
                                    <option></option>
                                    @foreach ($condidatecommissions as $commissions)
                                    <option value="{{ $commissions->id }}">{{ $commissions->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="disciplines" class="form-label">Disciplines</label>
                                <select class="form-select" aria-label="disciplines" id="disciplines" name="disciplines" required>
                                    <option></option>
                                    @foreach ($condidatedisplines as $disp)
                                    <option value="{{ $disp->id }}">{{ $disp->ar_name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="users_id" value="{{ $contacts->users_id }}" required>
                        @foreach ($grades as $grade)
                        @if($grade->id == $contacts->grades_id)
                        <input type="hidden" class="form-control" name="grade" value="{{ $grade->id }}" required> 
                         @endif
                        @endforeach
                        @foreach ($establishsment as $estab)
                        @if($estab->id == $contacts->establishments_id)
                        <input type="hidden" class="form-control" name="etablishment_id" value="{{ $estab->id }}" required> 
                         @endif
                        @endforeach
                        <input type="hidden" class="form-control" name="contacts_id" value="{{ $contacts->id }}" required>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="firstName">Nom</label>
                                                <input type="text" class="form-control" id="firstName"  aria-describedby="firstName" value="{{ $contacts->first_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastName">Prénom</label>
                                                <input type="text" class="form-control" id="lastName"  aria-describedby="lastName" value="{{ $contacts->last_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" aria-describedby="email" value="{{ $contacts->email }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cin">CIN</label>
                                                <input type="number" class="form-control" id="cin" aria-describedby="cin" value="{{ $contacts->cin }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cnrps">CNRPS</label>
                                                <input type="text" class="form-control" id="cnrps" aria-describedby="cnrps" value="{{ $contacts->cnrps }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="type">Position</label>
                                                <select class="form-select" id="type" disabled>
                                                    @foreach ($type as $types)
                                                    <option value="{{ $types->id }}" @if($types->id == $contacts->users_type_id) selected @endif>{{ $types->name }}</option>
                                                    @endforeach
                                                </select>                                                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="establishment">Etablissement</label>
                                                <select class="form-select" id="establishment" disabled>
                                                    @foreach ($establishsment as $estab)
                                                    <option value="{{ $estab->id }}" @if($estab->id == $contacts->establishments_id) selected @endif>{{ $estab->fr_name }} {{ $estab->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="grade">Grade</label>
                                                <select class="form-select" id="grade"  disabled>
                                                    @foreach ($grades as $grade)
                                                    <option value="{{ $grade->id }}" @if($grade->id == $contacts->grades_id) selected @endif>{{ $grade->fr_name }} {{ $grade->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="date_grade">date grade</label>
                                                <input type="date" class="form-control" id="date_grade" aria-describedby="date_grade" value="{{ Date('Y-m-d',strtotime($contacts->date_grade)) }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="date_recrutement">Date recrutement</label>
                                                <input type="date" class="form-control" id="date_recrutement"  aria-describedby="date_recrutement" value="{{ Date('Y-m-d',strtotime($contacts->date_recrutement)) }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                                <label for="phone">téléphone</label>
                                                <input type="text" class="form-control" id="phone" aria-describedby="phone" value="{{ $contacts->phone }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gender">Genre</label>
                                                <select class="form-control" id="gender" disabled>
                                                    <option value="Male">Homme</option>
                                                    <option value="Female">Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="birthday">Date de naissance</label>
                                                <input type="date" class="form-control" id="birthday" aria-describedby="birthday" value="{{ $contacts->birthday }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="address">Adresse</label>
                                                <input type="text" class="form-control" id="address" aria-describedby="address" value="{{ $contacts->address_line }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="region">Region</label>
                                                <select class="form-select" id="region" disabled>
                                                    @foreach($regions as $region)
                                                    <option value="{{ $region->id }}" @if($region->id == $contacts->regions_id) selected @endif>{{ $region->fr_name }} {{ $region->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="zipcode">Code postal</label>
                                                <input type="text" class="form-control" id="zipcode" aria-describedby="zipcode" value="{{ $contacts->zip_code }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <form action="{{ route('logout') }}" method="GET">
                                    @csrf
                                <a type="button" href="#" class="btn btn-secondary">Retour</a>
                                </form>
                                <button type="submit" class="btn btn-success">Valider Condidature</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    @else
                    <form action="{{ route('condidates.update',$condidate->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sessions" class="form-label">Sessions</label>
                                <select class="form-select" aria-label="sessions" id="sessions" name="sessions" required>
                                    <option></option>
                                    @foreach ($condidateSessions as $session)
                                    <option value="{{ $session->id }}" @if($session->id == $condidate->sessions_id) selected @endif>{{ $session->l_ar_sess }} {{ $session->l_fr_sess }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="commissions" class="form-label">Commissions</label>
                                <select class="form-select" aria-label="commissions" id="commissions" name="commissions" required>
                                    <option></option>
                                    @foreach ($condidatecommissions as $commissions)
                                    <option value="{{ $commissions->id }}" @if($commissions->id == $condidate->commissions_id) selected @endif>{{ $commissions->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-4">
                                <label for="disciplines" class="form-label">Disciplines</label>
                                <select class="form-select" aria-label="disciplines" id="disciplines" name="disciplines" required>
                                    <option></option>
                                    @foreach ($condidatedisplines as $disp)
                                    <option value="{{ $disp->id }}" @if($disp->id == $condidate->disciplines_id) selected @endif>{{ $disp->ar_name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="users_id" value="{{ $contacts->users_id }}" required>
                        @foreach ($grades as $grade)
                        @if($grade->id == $contacts->grades_id)
                        <input type="hidden" class="form-control" name="grade" value="{{ $grade->id }}" required> 
                         @endif
                        @endforeach
                        <input type="hidden" class="form-control" name="contacts_id" value="{{ $contacts->id }}" required>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="firstName">Nom</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName" value="{{ $condidate->first_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lastName">Prénom</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName"  aria-describedby="lastName" value="{{ $condidate->last_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ $condidate->email }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                                <label for="phone">téléphone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{ $condidate->phone }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gender">Genre</label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="Male" @if($condidate->gender == 'Male') selected @endif>Homme</option>
                                                    <option value="Female" @if($condidate->gender == 'Female') selected @endif>Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="birthday">Date de naissance</label>
                                                <input type="date" class="form-control" id="birthday" name="birthday" aria-describedby="birthday" value="{{ $condidate->birthday }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="address">Adresse</label>
                                                <input type="text" class="form-control" id="address" name="address" aria-describedby="address" value="{{ $condidate->address_line }}" required>
                                            </div>
                                        </div>
{{--                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="region">Region</label>
                                                <select class="form-select" id="region" name="region" required>
                                                    @foreach($regions as $region)
                                                    <option value="{{ $region->id }}" @if($region->id == $contacts->regions_id) selected @endif>{{ $region->fr_name }} {{ $region->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="zipcode">Code postal</label>
                                                <input type="text" class="form-control" id="zipcode" name="zipcode" aria-describedby="zipcode" value="{{ $condidate->zip_code }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <form action="{{ route('logout') }}" method="GET">
                                    @csrf
                                <a type="button" href="#" class="btn btn-secondary">Retour</a>
                                </form>
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    @endif
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