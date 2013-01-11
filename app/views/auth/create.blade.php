@if(isset($errors))
    @foreach($errors->all() as $var)
        {{ $var }}
    @endforeach
@endif

<form action="{{ Request::root() }}/auth" method="post">
	<fieldset>
		<legend>Register New User</legend>
		<input type="text" name="username" placeholder="Username" required value="{{ Session::get('username') }}"/>
		<input type="password" name="password" placeholder="Password" required/>
		<input type="password" name="password_confirmation" placeholder="Confirm Password" required/>
		<input type="email" name="email" placeholder="Email Address" required/>
		<input type="text" name="dob" placeholder="Birthdate YYYY-MM-DD" required/>
		<select name="gender" required>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
		<input type="text" name="location" placeholder="Your Location"/>
		<input type="text" name="wug_api" placeholder="Weather Underground API Key"/>
		<input type="submit" name="create" value="Register" />
	</fieldset>
</form>
