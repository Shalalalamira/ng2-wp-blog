<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><%= APP_TITLE %></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- inject:css -->
  <!-- endinject -->
</head>
<body>

  <app>Loading...</app>

  <script>
  // function.name (all IE)
  // Remove once https://github.com/angular/angular/issues/6501 is fixed.
  /*! @source http://stackoverflow.com/questions/6903762/function-name-not-supported-in-ie*/
  if (!Object.hasOwnProperty('name')) {
    Object.defineProperty(Function.prototype, 'name', {
      get: function() {
        var matches = this.toString().match(/^\s*function\s*(\S*)\s*\(/);
        var name = matches && matches.length > 1 ? matches[1] : "";
        // For better performance only parse once, and then cache the
        // result through a new accessor for repeated access.
        Object.defineProperty(this, 'name', {value: name});
        return name;
      }
    });
  }
  </script>

  <script>
  // Fixes undefined module function in SystemJS bundle
  function module() {}
  </script>

  <!-- shims:js -->
  <!-- endinject -->

  <% if (ENV === 'dev') { %>
  <script>System.config(<%= JSON.stringify(SYSTEM_CONFIG) %>)</script>
  <% } %>

  <script src="<%= APP_CONFIG.DISQUS_SRC %>"></script>
  <script src="https://www.google-analytics.com/analytics.js"></script>

  <!-- libs:js -->
  <!-- endinject -->

  <!-- inject:js -->
  <!-- endinject -->

  <% if (ENV === 'dev') { %>
  <script>
  System.import('<%= BOOTSTRAP_MODULE %>')
    .catch(function (e) {
      console.error(e,
        'Report this error at https://github.com/mgechev/angular2-seed/issues');
    });
  </script>
  <% } %>

</body>
</html>