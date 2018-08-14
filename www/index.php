<?php
session_start();
if (!isset($_SESSION['oauth_user'])) {
	header('Location: /oauth.php');
	exit;
}
?><!DOCTYPE html>
<html lang="en">
<title>Create profile</title>

<form method="post" action="generate.php">
	<dl>
		<dt>Username</dt>
		<dd><input type="text" name="user"></dd>
	</dl>
	<dl>
		<dt>Profile</dt>
		<dd><select name="format">
			<option>mobileconfig</option>
			<option>eap-metadata</option>
			<option>pkcs12</option>
		</select></dd>
	</dl>
	<p><input type="submit" value="Generate certificate and profile"></p>
</form>
