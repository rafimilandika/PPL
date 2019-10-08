
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
<h1 style="color: white; margin: 25%; text-align: center; font-family: nunito, sans-serif"><b>Selamat Datang {{ Auth::user()->name }}</b></h1>


@endsection
