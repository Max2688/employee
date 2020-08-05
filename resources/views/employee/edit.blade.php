@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="justify-content-end margin-bottom20">
            <button type="submit" form="employee"  class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save" ><i class="fa fa-save"></i></button>
        </div>
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header">
                <h5 class="card-title"><i class="fa fa-pencil"></i> @lang('home.edit')</h5>
            </div>
            <div class="card-body">
                <form class="form-horizontal" id="employee" action="{{ route('employee.update', $employee) }}" method="post">
                    <input type="hidden" name="_method"  value="put"/>
                    {{ csrf_field() }}
                    @include('employee.partials.form')
                </form>
            </div>
        </div>
    </div>

@endsection