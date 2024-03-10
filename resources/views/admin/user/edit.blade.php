{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')を埋め込む --}}
@section('title', 'ユーザー情報編集')

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ユーザー情報編集</h2>
                
            </div>
        </div>
    </div>