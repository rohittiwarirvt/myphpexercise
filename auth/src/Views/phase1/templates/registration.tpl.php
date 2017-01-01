<div class="row">
  <div class="col-md-12">
    <h1>Registration Form</h1>
    <form class="form-horizontal"  action="/user/register" method='post'>
      <div class="col-sm-9">
        <div class="form-group">
          <label class="control-label col-sm-2"><b>Username</b></label>
          <div class=" col-sm-8">
          <input  class="form-control" type="text" placeholder="Enter Username" name="username" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"><b>Email</b></label>
          <div class="col-sm-8">
          <input class="form-control" type="email" name="email" placeholder="Enter Email"  required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"><b>Password</b></label>
          <div class="col-sm-8">
          <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8  ">
            <button type="submit" class="btn btn-success">Register</button>
          </div>
        </div>
          <div class="form-group" >
          <div class="col-sm-offset-2 col-sm-8">
            <button type="button" class="btn btn-danger">Cancel</button>
            <a class="btn btn-primary" href="/user/login">Login</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
