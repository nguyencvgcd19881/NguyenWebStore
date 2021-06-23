<form action="profile.php" method="POST">
<table class="Profiletable" border="1">
<h1>Update</h1>
    <tr>
    <td>Avartar</td>
    <td>  <input type="text" name=avatar>  <img src="<?php echo $row_user['avatar'] ?>" ></td>
    </tr>
    <tr>
    <td>User name</td>
    <td><input type="text" name=username value="<?php echo $row_user['email'] ?>" ></td>
    </tr>
    <tr>
    <td>First name</td>
    <td><input type="text" name="fname" value="<?php echo $row_user['fname'] ?>"></td>
    </tr>
    <td>Last name</td>
    <td><input type="text" name="lname" value="<?php echo $row_user['lname'] ?>"></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><input type="text" name="phone" value="<?php echo $row_user['phone'] ?>"></td>
    </tr>
    <input type="submit" name="updatebut" value="Save">
</table>
</form>