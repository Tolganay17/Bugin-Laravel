<!DOCTYPE html>
<html lang="en">

<head> 
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Add News</h1>
                <p>Fill and submit </p>

                <hr>

                <form method="POST" action="{{ route('admin.blogs.store')}}" enctype="multipart/form-data">
        
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                            <label for="">Cid</label>
                            <input type="text" name="cid" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-info" value="save">
                    </div>
                   
                   
                   </form>
               
            </div>

        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>