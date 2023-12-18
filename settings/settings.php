
<?php 
        include_once "../super_path.php";
        include_once "../path.php";

        if (!include_once SESSION_MANAGER){
          die ("NOT INCLUDED");
        }
        else{
          $sessionobj = new SessionManager;
        $sessionobj->startSession();

          $sessionLogged=$sessionobj->isLoggedIn();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Krishibazar Settings</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Krishibazar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#help">Help</a>
                </li>
                <li class="nav-item">
             
        <?php 
    if ($sessionLogged) {
        // If user is logged in, display logout link
        echo '<a class="nav-link" href="../database/logout_process.php">logout</a>';
    } else {
        // If user is not logged in, display signup link
        echo '<a class="nav-link" id = "signInLink">New signin</a>';
    }
    ?>
          
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <!-- Sign In Section -->
   <?php if(!$sessionLogged ){include_once LOGIN ;}
   
   echo "welcome ".$sessionobj->isLoggedIN();
   ?>

    <!-- Settings Section -->
    <section id="settings" class="mb-4">
      <h2>Settings</h2>
      <!-- Settings form -->
      <form>
        <div class="form-group">
          <label for="notification">Notification Preferences</label>
          <select class="form-control" id="notification">
            <option>Email</option>
            <option>Push notifications</option>
            <option>SMS</option>
          </select>
        </div>
        <!-- Other settings options -->
        <!-- ... -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
    </section>

    <!-- Help Section -->
    <section id="help">
      <h2>Help</h2>
      <!-- FAQ -->
      <div class="accordion" id="faqAccordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How do I update my profile information?
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
            <div class="card-body">
              You can update your profile information by navigating to the 'Profile' section and selecting the 'Edit' option.
            </div>
          </div>
        </div>
        <!-- Other FAQ items -->
        <!-- ... -->
      </div>

      <!-- Contact support -->
      <h5>Contact Support</h5>
      <p>If you need further assistance, please contact us at support@krishibazar.com</p>
    </section>
  </div>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
        <script>
              function goBack() {

                  window.history.back();
              }
          </script>

  <!-- <script>
     $(document).ready(function() {
            // Redirect to element with class "show" when the sign-in link or button is clicked
            $('#signInLink').click(function(e) {
                e.preventDefault(); // Prevent the default behavior of the link or button

                // Redirect to the element with class "show"
              // $('#loginlink').style.display= "none";
            });
        });
  </script> -->
</body>
</html>
