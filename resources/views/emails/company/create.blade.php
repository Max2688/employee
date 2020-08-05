@component('mail::message')
<table >
    <tr>
        <th>Name</th>
        <td >{{$company->name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td >{{$company->email}}</td>
    </tr>

    <tr>
        <th>Website</th>
        <td >{{$company->website}}</td>
    </tr>
</table>
@endcomponent