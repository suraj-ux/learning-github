<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta name="google-signin-client_id" content="94534592743-ti7gn1049o47ltnkh86tqk1vfpfudi67.apps.googleusercontent.com">    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
    </head>
    
    <body class="form-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-4 col-sm-8 m-auto form">
                    <h3 class="text-center mb-4 mt-3"><i class="fa fa-user"></i></h3>
                    
                    <form method="post" action="">
                       <div class="form-group">
                           <input type="email" class="form-control" id="email" Placeholder="Enter your email...." >
                        </div>
                        
                        <div class="form-group">
                           <input type="password" class="form-control" id="pwd" placeholder="Enter your password....">
                            <div class="g-signin2" data-onsuccess="onSignIn">
                                <a href="#" onclick="signOut();">Sign out</a>
                            </div>
                            
                            <input type="checkbox" class="mt-3">&nbsp;<span>Please follow our <a  style=" color:#666" href="#">T&C</a></span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
           
            </div>
            
            
        </div>
        
        
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script>
            function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
        </script>
        <script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
        
        </body>
</html>