<h1>User Login</h1>

<!-- From validation -->

<!-- Alternative 1 -->
<!-- {{$errors}} -->

<!-- Alternative 2 -->
<ul>
@if ($errors->any())
    @foreach ($errors->all() as $anError)
        <li>{{$anError}}</li>
    @endforeach
@endif
</ul>

<!-- Post route -->
<form action="users" method="POST">
    @csrf
    <label for="usernameinput">Username:</label><br>
    <!-- <input type="text" id="idusername" name="usernameinput" required><br> -->
    <input type="text" id="idusername" name="usernameinput"><br>
    <span>@error('usernameinput'){{$message}}@enderror</span><br>
    <label for="passwordinput">Password:</label><br>
    <!-- <input type="password" name="passwordinput" required><br> -->
    <input type="password" name="passwordinput"><br> 
    <span>@error('passwordinput'){{$message}}@enderror</span><br>
    <button type="submit">Login</button>
</form> 