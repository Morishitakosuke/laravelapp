@extends('layouts.helloapp')

@section('title', 'Index')

@section('mububar')
    @parent
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
    copyright 2020 morishita
@endsection
