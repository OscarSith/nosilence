<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prueba</title>
  <style type="text/css">
    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <button id="login" class="hidden">Login</button>
  <a href="{{ $loginUrl }}">Login con SDK PHP</a>
  <hr>
  <button id="getPosts" disabled>Obtener publicaciones</button>
  <pre></pre>
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
  <script>
  var access_token = '';
  var page_id = '';
  var posts = [];

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '318988888458771',
      xfbml      : false,
      version    : 'v2.8'
    });

    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        console.log('ain.');
        $('#login').addClass('hidden');
        $('#getPosts').prop('disabled', false);
        FB.api('me/accounts', {}, function(rpta) {
          $('pre').html(rpta);
          access_token = rpta.data[3].access_token;
          page_id = rpta.data[3].id;
        });
      }
      console.log(response);
    });

    $('#login').on('click', function(e) {
      FB.login(function(response) {
        console.info(response);
      }, {scope: 'manage_pages'});
    });

    $('#getPosts').on('click', function() {
      FB.api(page_id + '/feed', 'GET', {'limit': 20}, function(response) {
        posts = response;
      });
    });
  };

  // (function(d, s, id){
  //    var js, fjs = d.getElementsByTagName(s)[0];
  //    if (d.getElementById(id)) {return;}
  //    js = d.createElement(s); js.id = id;
  //    js.src = "//connect.facebook.net/en_US/sdk.js";
  //    fjs.parentNode.insertBefore(js, fjs);
  //  }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>