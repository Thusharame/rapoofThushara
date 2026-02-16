<h2> Input your information below: </h2>
<form name= "form1" method="post" action="process.php">
<div class="row">
<div class="col">
<input type="text" class="form-control" placeholder="First name" name="fname"
required>
</div>
<div class="col">
<input type="text" class="form-control" placeholder="Last name" name="lname"
required>
</div>
</div>
<br>
<div class="row">
<div class="col">
<input type="text" class="form-control" placeholder="City" name="city" required>
</div>
<div class="col">
<select class="form-control" name="groupid">
<option value="BBCAP19"> BBCAP19 </option>
<option value="BBCAP20"> BBCAP20 </option>
<option value="BBCAP21"> BBCAP21 </option>
<option value="BBCAP22"> BBCAP22 </option>
<option value="Others"> Others </option>
</select>
</div>
</div>
<br><button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>