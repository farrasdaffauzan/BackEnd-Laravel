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
                  <a class="nav-link active" aria-current="page" href="#">Bookstore</a>
                </li>
                <li class="d-flex flex-box align-items-center nav-item dropdown">
                
                  <form class="" role="">
                    <a href="<?php echo e(route('create.books')); ?>" class="btn btn-outline-success" type="submit">Add</a>
                  </form>
                </li>
              </ul>  
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image URL</th>
                <th scope="col">Release</th>
                <th scope="col">Price</th>
                <th scope="col">Total Page</th>
                <th scope="col">Thickness</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <tr>
                  <th scope="row"><?php echo e($item->id); ?></th>
                  <td><?php echo e($item->title); ?></td>
                  <td><?php echo e($item->description); ?></td>
                  <td><?php echo e($item->image_url); ?></td>
                  <td><?php echo e($item->release_year); ?></td>
                  <td><?php echo e($item->price); ?></td>
                  <td><?php echo e($item->total_page); ?></td>
                  <td><?php echo e($item->thickness); ?></td>
                  <div class="d-flex flex-box">
                    <td class="d-flex flex-box">
                      <a href="/books/<?php echo e($item->id); ?>/edit" class="btn btn-outline-success m-1">Edit</a>
                  
                      <form action="/books/<?php echo e($item->id); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('delete'); ?>
                          <input class="btn btn-outline-success m-1" type="submit" value="Delete">
                      </form>
                    </td>
                </div>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

          <ul style="text-decoration: none; list-style: none;" class="p-0 d-flex flex-box align-items-center justify-content-between me-auto my-2 my-lg-0 " >
        
            <li class="d-flex flex-box align-items-center nav-item dropdown">
            
              <form class="" role="">
                <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-outline-success" type="submit">Back to Category</a>
              </form>
            </li>
          </ul> 
      </section>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelsanber2\resources\views/books/index.blade.php ENDPATH**/ ?>