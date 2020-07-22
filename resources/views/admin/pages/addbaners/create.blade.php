@extends('admin.layouts.admin')

@section('content')

@component('admin.components.box', ['title'=>__('create addbaner')])

{!! Form::open(['route' => 'admin.addbaners.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@include('admin.pages.addbaners.form')
{!!Form::close()!!}
@endcomponent



@endsection

