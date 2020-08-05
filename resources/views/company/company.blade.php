@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="d-flex justify-content-between margin-bottom20">
            <span class="box-title align-self-center" ><h3>@lang('home.companies')</h3></span>
            <a class="btn btn-primary" href="{{ route('company.create') }}"><i class="fa fa-plus"></i></a>
        </div>

        <div class="card border-0">

            <table  class="table company-table">
                <thead>
                <tr role="row">
                    <th>Изображение</th>
                    <th>@lang('home.title')</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>@lang('home.action')</th>
                </tr>
                </thead>
                <tbody>
                @forelse( $companies as $key => $company)

                    <tr>
                        <td><img src="{{ asset(  !empty($company->logo) ? 'storage/'. $company->logo : 'https://via.placeholder.com/100') }}" /></td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->website }}</td>
                        <td>
                            <form method="post" onsubmit="if( confirm('Delete?') ) { return true;} else {return false}" action="{{route('company.destroy' , $company)}}">
                                <input type="hidden" name="_method"  value="delete"/>
                                {{ csrf_field() }}

                                <a class="btn btn-app" href="{{ route('company.edit', $company) }}"><i class="fa fa-edit icon-black"></i></a>
                                <button type="submit" class="btn btn-app button-style" ><i class="fa fa-trash-o icon-black"></i></button>

                            </form>
                        </td>
                    </tr>
                @empty
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            <p>No Company created!</p>
                        </td>
                    </tr>
                    </tfoot>

                    @endforelse
                    </tbody>
            </table>

        </div>
    </div>


@endsection