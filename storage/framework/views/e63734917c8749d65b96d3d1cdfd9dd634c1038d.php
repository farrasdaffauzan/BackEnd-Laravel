<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Books  </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <section style="top: 100px" class="position-relative w-75 m-auto">
        <div class="container-fluid">
              <ul style="text-decoration: none; list-style: none;" class="p-0 d-flex flex-box align-items-center justify-content-between me-auto my-2 my-lg-0 " >
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Update Books</a>
                </li>
              </ul>  
          </div>
          <table class="table">
            <form action="/books/<?php echo e($books->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <input class="w-100 mt-3" type="text" name="title" value="<?php echo e($books->title); ?>">
                <input class="w-100 mt-3" type="text" name="description" value="<?php echo e($books->description); ?>">
                <input class="w-100 mt-3" type="text" name="image_url" value="<?php echo e($books->image_url); ?>">
                <input class="w-100 mt-3" type="text" name="release_year" value="<?php echo e($books->release_year); ?>">
                <input class="w-100 mt-3" type="text" name="price" value="<?php echo e($books->price); ?>">
                <input class="w-100 mt-3" type="text" name="total_page" value="<?php echo e($books->total_page); ?>">
                <input class="w-100 mt-3" type="text" name="category_id" value="<?php echo e($books->category_id); ?>">
                
                
                <button class="btn btn-outline-success mt-2" type="submit">Update</button>
                  
                
            </form>
          </table>
      </section>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelsanber2\resources\views/books/update.blade.php ENDPATH**/ ?>