<!DOCTYPE html>
<html>
@include('admin.includes.head')
<!-- Navigation -->
<div>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="index.html">customer page</a>
     
      </div>
    </div>
  </nav>
</div>
<div style="margin-top:100px"></div>
<div class="container" class="col-md-12">
      <div class="row">
  @foreach ($banners as $banner)

          <div class="col-md-4">
  <div class="card" style="width: 18rem;">
  <img src="{{ $banner->image ? 'http://127.0.0.1:8000/images/addbaners/'.$banner->image : 'http://127.0.0.1:8000/storage/images/defaultimage.jpg'}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$banner->title}}</h5>
    <p class="card-text">{{$banner->description}}</p>
</div>
  </div>
</div>
  @endforeach
  </div>
</div>

</html>

