<hr>
<div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @include('blog.partials.disqus')
  </div>
</div>
<hr>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <p class="copyright">Copyright © {{ config('blog.author') }}</p>
      </div>
    </div>
  </div>
</footer>