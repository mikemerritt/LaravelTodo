<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TodoApp</title>
  {{ stylesheet_link_tag() }}
</head>
<body>
  <div class="row">
    <div class="small-12 column">
      @yield('content')
    </div>
  </div>
  {{ javascript_include_tag() }}
</body>
</html>