<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>{{ $post->title }}</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->published_at->format('M jS Y g:ia') }}</h5>
    <hr />
    {!! nl2br(e($post->content)) !!}
    <hr />
    <button class="btn btn-primary" onclick="history.go(-1)"><span class="glypicon-arrow-back"></span>
      « Back
    </button>
  </div>
</body>
</html>