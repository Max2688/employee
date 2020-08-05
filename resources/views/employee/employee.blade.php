@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="d-flex justify-content-between margin-bottom20">
            <span class="box-title align-self-center" ><h3></h3></span>
            <a class="btn btn-primary" href="{{ route('employee.create') }}"><i class="fa fa-plus"></i></a>
        </div>

        <div class="card border-0">

            <table  class="table employee-table">
                <thead>
                <tr role="row">
                    <th>@lang('home.title')</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>@lang('home.action')</th>
                </tr>
                </thead>
                <tbody>
                @forelse( $employees as $key => $employee)

                    <tr>
                        <td>{{ $employee->firstname }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            <form method="post" onsubmit="if( confirm('Delete?') ) { return true;} else {return false}" action="{{route('employee.destroy' , $employee)}}">
                                <input type="hidden" name="_method"  value="delete"/>
                                {{ csrf_field() }}

                                <a class="btn btn-app" href="{{ route('employee.edit', $employee) }}"><i class="fa fa-edit icon-black"></i></a>
                                <button type="submit" class="btn btn-app button-style" ><i class="fa fa-trash-o icon-black"></i></button>

                            </form>
                        </td>
                    </tr>
                @empty
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            <p>No Employee created!</p>
                        </td>
                    </tr>
                    </tfoot>

                    @endforelse
                    </tbody>
            </table>

        </div>

    </div>


@endsection