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
                            <div class="col-md-12 d-flex flex-row align-items-center justify-content-between">
                          <h4 class="card-title m-0">Bienvenue dans le systéme de vote</h4>
                                <div class="d-flex flex-row">
                                    <form action="{{ route('logout') }}" method="GET">
                                        @csrf
                                    <button type="submit" class="btn mx-1 btn-primary">Déconnexion</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <a href="{{ route('condidates-list') }}">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/session.jpg') }}" class="rounded-circle" width="200px" height="200px" alt="Sessions">
                                  </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('voting-list') }}">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/vote.jpg') }}" class="rounded-circle" width="200px" height="200px" alt="Vote">
                                  </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('result-list') }}">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/result.jpg') }}" class="rounded-circle" width="200px" height="200px" alt="Resultats">
                                  </div>
                                </a>
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
</style>
@endsection