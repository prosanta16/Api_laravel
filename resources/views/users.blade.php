<h1>Users List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAme</td>
        <td>Email</td>
        <td>Profile</td>
    </tr>
    
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item['avatar']}} /></td>
    </tr>
    @endforeach
</table>