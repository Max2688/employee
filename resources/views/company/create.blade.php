@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="justify-content-end margin-bottom20">
            <button type="submit" form="company"  class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save" ><i class="fa fa-save"></i></button>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">@lang('home.create')</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal" id="company" action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p>
                        <label for="logo">Logo</label>
                        <input type="file" id="logo" name="logo" class="form-control"   />
                    </p>
                    @include('company.partials.form')
                </form>
            </div>
        </div>
    </div>

@endsection