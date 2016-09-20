<div class="auth-link center">
  <a class="logged-out" id="login-link" data-toggle="modal" data-target="#auth-modal">Sign In</a>
  <div class="logged-in">
    <a id="logout-link">Sign Out</a>
    <span>|</span>
    <a href="/reviews">Reviews</a>
  </div>
</div>

<div id="auth-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Enter an email and password below and either sign in to an existing account or sign up</p>

        <input class="" style="display:inline;width:auto;" type="text" id="email" name="email" placeholder="Email"/>
        &nbsp;&nbsp;&nbsp;
        <input class="" style="display:inline;width:auto;" type="password" id="password" name="password" placeholder="Password"/>
        <br/><br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="sign-in-btn" class="btn btn-primary" data-dismiss="modal">Sign In</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "{{ env('FIREBASE_API_KEY') }}",
    authDomain: "{{ env('FIREBASE_AUTH_DOMAIN') }}",
    databaseURL: "{{ env('FIREBASE_DATABASE') }}",
    storageBucket: "{{ env('FIREBASE_BUCKET') }}",
  };
  firebase.initializeApp(config);
</script>

<script type="text/javascript">
  /**
   * Handles the sign in button press.
   */
  function signOut() {
    if (firebase.auth().currentUser) {
      // [START signout]
      firebase.auth().signOut();
      // [END signout]

      $('.logged-in').hide();
      $('.logged-out').show();
    }
  }

  function signIn() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (email.length < 4) {
      alert('Please enter an email address.');
      return;
    }
    if (password.length < 4) {
      alert('Please enter a password.');
      return;
    }
    // Sign in with email and pass.
    // [START authwithemail]
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // [START_EXCLUDE]
      if (errorCode === 'auth/wrong-password') {
        alert('Wrong password.');
      } else {
        alert(errorMessage);
      }
      console.log(error);
      document.getElementById('quickstart-sign-in').disabled = false;
      // [END_EXCLUDE]
    });
    // [END authwithemail]

  }
  /**
   * initApp handles setting up UI event listeners and registering Firebase auth listeners:
   *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
   *    out, and that is where we update the UI.
   */
  function initApp() {
    // Listening for auth state changes.
    // [START authstatelistener]
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in.
        var displayName = user.displayName;
        var email = user.email;
        var emailVerified = user.emailVerified;
        var photoURL = user.photoURL;
        var isAnonymous = user.isAnonymous;
        var uid = user.uid;
        var providerData = user.providerData;
        // [START_EXCLUDE silent]
        document.getElementById('login-link').textContent = 'Sign out';
        $('.logged-in').show();
        $('.logged-out').hide();
        // [END_EXCLUDE]
      } else {
        // User is signed out.
        // [START_EXCLUDE silent]
        document.getElementById('login-link').textContent = 'Sign in';
        // [END_EXCLUDE]
      }
    });
    // [END authstatelistener]

    document.getElementById('logout-link').addEventListener('click', signOut, false);
    document.getElementById('sign-in-btn').addEventListener('click', signIn, false);
  }

  window.onload = function() {
    initApp();
  };
</script>
