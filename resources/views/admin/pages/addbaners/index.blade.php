@extends('admin.layouts.admin',['breadcrumb' => 'titles'])
@section('content')

{{-- @box(['title' => __('addbaners'), 'create' => route('admin.addbaners.create')]) --}}
@component('admin.components.box', ['title'=>'addbaners', 'create' => route('admin.addbaners.create'),'Side_address'=> 'create baners '])
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('title') }}</th>
            <th>{{ __('description') }}</th>
            <th>{{ __('date_from') }}</th>
            <th>{{ __('date_to') }}</th>
            <th>{{ __('frequency') }}</th>
            <th>{{ __('duration') }}</th>
            <th>{{ __('image') }}</th>
            <th>{{ __('Created at') }}</th>
            

        </tr>
    </thead>
    <tbody >
        @forelse ($addbaners as $addbaner)
            <tr>
                <td>{{ $addbaner->id }}</td>
                <td>{{ $addbaner->title }}</td>
                <td>{{ $addbaner->description }}</td>
                <td>{{ $addbaner->date_from }}</td>
                <td>{{ $addbaner->date_to }}</td>
                <td>{{ $addbaner->frequency }}</td>
                <td>{{ $addbaner->duration }}</td>
                <td>
                <img src="{{ $addbaner->image ? 'http://127.0.0.1:8000/images/addbaners/'.$addbaner->image : 'http://127.0.0.1:8000/storage/images/defaultimage.jpg'}}" alt="" width="100px">
            </td>
                <td>{{$addbaner->created_at ?  $addbaner->created_at->diffForHumans() : null}}</td>
               
            </tr>
        @empty
            <tr>
                <td colspan="10">
                    <div class="alert alert-warning text-center" role="alert">
                        <strong>{{ __('no data') }}</strong>
                    </div>
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
{{-- @endtable --}}

{{ $addbaners->links() }}
@endcomponent


@endsection
