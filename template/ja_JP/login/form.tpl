<h2>Login form</h2>
<p>
	<form action="{$script}" method="post">
		<input type="hidden" name="action_login_do" value="true">
		<input type="text" name="user_name" value="{$form.user_name}" />
		<br />
		<input type="password" name="password" value="{$form.password}" />
		<br />
		<input type="submit" value="submit" />
	</form>
</p>

