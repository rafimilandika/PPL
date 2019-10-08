
@extends('layouts.nav')

@section('contentuser')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 --><!-- <div class="card-header">Dashboard</div>
             -->
              <!--   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Halo {{ Auth::user()->name }} -->
                    <!--  </div> -->
      <!--   </div>
    </div>
</div> -->
<div style="color: white; margin-left: 25%; margin-top: 15%; margin-right: 25%; text-align: center; font-family: nunito, sans-serif">
<h1><b>{{ Auth::user()->name }}, Jawablah pertanyaan berikut dengan benar</b></h1>
<a href="{{ route('pertanyaan.index') }}" class="btn btn-block btn-warning" style="width: 50%;margin-left: 25%">Mulai</a>
</div>
@endsection
