<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Blog form</h2>
    <!-- validation error -->
    @if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
  <form action="{{url('admin/category/store')}}" , method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:-</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
