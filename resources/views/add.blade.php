<h1>Add member</h1>
@if(session('user'))
<h3 style="color:blue">{{session('user')}} has been added</h3>
@endif

<form action="addho" method="POST">
@csrf
    <input type="text" name="user" placeholder="Enter user name" /><br><br>
    <input type="password" name="pass" placeholder="Enter user password" /><br><br>
    <input type="text" name="email" placeholder="Enter user email" /><br><br>
    <button type="submit">Add memeber</button>
</form>
