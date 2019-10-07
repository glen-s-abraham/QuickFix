<?php include'header.php' ?>

<div style="margin-top:40px;" class="container jumbotron">
  <h4>Worker registration</h4><br>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUsername">Username</label>
      <input type="text" class="form-control" id="inputUsername" placeholder="Username" pattern="[A-Za-z0-9]+" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email address" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTel">Phone</label>
      <input type="tel" class="form-control" id="inputTel" placeholder="Phone"  pattern="[789][0-9]{9}" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" pattern="[A-Za-z]+" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" required>
        <option>Kochi</option>
        <option>coimbatore</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" pattern="[0-9]{6}" required>
    </div>
  </div>
  <div class="form-group ">
    <label for="inputJob">What kind of job can you do?</label>
    <select id="inputState" class="form-control" required placeholder="Choose">
      <option>Plumbing</option>
      <option>Wiring</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</div>
<?php include'footer.php' ?>
