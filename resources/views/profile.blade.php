@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="container-fluid">
        <h4 class="mb-3">Profil</h4>
        <div class="card p-3" style="max-width:520px;">
            <div class="mb-2"><strong>Username</strong></div>
            <div class="mb-3">{{ $username ?? '-' }}</div>

            <div class="mb-2"><strong>Password</strong></div>
            <div class="mb-3"><code>{{ $password ?? '-' }}</code></div>
        </div>
    </div>
@endsection
