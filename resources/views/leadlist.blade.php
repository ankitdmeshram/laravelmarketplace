<style>
    table, tr, td, th {
        padding: 4px;
    }
</style>
<table border="1">

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Company</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>

    @foreach ($leads as $lead)
        <tr>
            <td>{{$lead['id']}}</td>
            <td>{{$lead['name']}}</td>
            <td>{{$lead['email']}}</td>
            <td>{{$lead['phone']}}</td>
            <td>{{$lead['city']}}</td>
            <td>{{$lead['company']}}</td>
            <td>{{$lead['updated_at']}}</td>
            <td>{{$lead['created_at']}}</td>
        </tr>
    @endforeach
    </table>