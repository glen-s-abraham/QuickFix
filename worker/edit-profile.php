<?php include'header.php';?>
<div style="margin-top:40px;"class="container jumbotron">
  <h4>User registration</h4><br>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUsername">Username</label>
      <input type="text" class="form-control" id="inputUsername" placeholder="Username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email address" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTel">Phone</label>
      <input type="tel" class="form-control" id="inputTel" placeholder="Phone" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
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
      <input type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" required>
        <option selected>Choose...</option>
        <option>Kochi</option>
        <option>coimbatore</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required>
    </div>
  </div>
  <div class="form-group ">
    <label for="inputJob">What kind of job can you do?</label>
    <select id="inputState" class="form-control" required placeholder="Choose">
      <option selected>Choose...</option>
      <option>Plumbing</option>
      <option>Wiring</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
<?php include'footer.php';?>
