<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <h1>Final Output Result
            Customers List</h1>
        <form method="post" action="{{ url('serchresult') }}">
        @csrf
        <input type="text" name="search" id="search">
        <input type="submit" type="submit">
        <a type="button" href="{{ url('/') }}">Reset</a>
        </form>
        <table border="1">
            <tr>
                <th>Sl.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City Name</th>
                <th>Country Name</th>
                <th>Mobile number</th>
                <th>Date & Time</th>
            </tr>
            @if(count($customers)!=0)
            @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->country}}</td>
                <td>{{$customer->mobile_number}}</td>
                <td>{{$customer->date_n_time}}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7">
                No data found
                </td>
            </tr>
            @endif
        </table>
    </body>
</html>
