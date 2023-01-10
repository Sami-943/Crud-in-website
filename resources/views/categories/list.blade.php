<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h1 style="margin: 20px"> Categories Table <a class="btn btn-info" href="/category-create">New Category</a> </h1>
  {{-- <p>The .table-striped class adds zebra-stripes to a table:</p>             --}}
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr:no</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <span>
          
        </span>
        <td>
            <a href="/category-edit/{{category->id}}" type="button" class="btn btn-warning">Edit</a>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
