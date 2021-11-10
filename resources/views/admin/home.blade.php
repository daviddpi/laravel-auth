@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1>Pagina degli admin</h1>
            @foreach ($users as $user)
                <div class="card p-3 mb-3">
                    <h3>Nome admin: '{{ $user->name }}'</h3>
                    <h5>Email admin: '{{ $user->email }}'</h5>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
