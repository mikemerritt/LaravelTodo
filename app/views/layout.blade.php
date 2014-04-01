<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="<?= csrf_token() ?>">
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