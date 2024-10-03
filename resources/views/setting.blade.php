<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Settings</title>
  <link rel="stylesheet" href={{asset('asset/bootstrap/css/bootstrap.min.css')}}>
  <style>
    body {
      display: flex;
      height: 100vh;
    }

    .main-content {
      flex-grow: 1;
      background-color: #f8f9fa;
      padding: 20px;
    }

    .card {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .save-btn {
      background-color: #00a7e1;
      color: white;
      border: none;
    }

    .save-btn:hover {
      background-color: #008fb3;
    }
  </style>
</head>
<body>

  
  <!-- Main content -->
  <div class="main-content">
    <h2>Account Settings</h2>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Personal Information</h5>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter new password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                  </div>
                </div>
              </div>

              <button type="submit" class="btn save-btn w-100">Save Changes</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Notification Settings</h5>
            <form>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="emailNotifications">
                  <label class="form-check-label" for="emailNotifications">
                    Enable Email Notifications
                  </label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="smsNotifications">
                  <label class="form-check-label" for="smsNotifications">
                    Enable SMS Notifications
                  </label>
                </div>
              </div>

              <button type="submit" class="btn save-btn w-100 mt-3">Update Notifications</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Account Preferences</h5>
            <form>
              <div class="form-group">
                <label for="language">Preferred Language</label>
                <select class="form-control" id="language">
                  <option value="en">English</option>
                  <option value="id">Bahasa Indonesia</option>
                  <option value="fr">French</option>
                  <option value="de">German</option>
                </select>
              </div>

              <div class="form-group">
                <label for="timezone">Timezone</label>
                <select class="form-control" id="timezone">
                  <option value="utc-7">UTC -7</option>
                  <option value="utc+1">UTC +1</option>
                  <option value="utc+8">UTC +8</option>
                </select>
              </div>

              <button type="submit" class="btn save-btn w-100 mt-3">Update Preferences</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>
</body>
</html>
