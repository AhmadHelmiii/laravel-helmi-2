<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Movies</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Movie Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Movies name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Synopsis</label>
                <textarea class="form-control" name="synopsis" id="moviesynopsis" style="resize: none"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Year Published</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Year">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Movie Poster</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Enter Movie Poster</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.general -->

        <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@yield('content_genre')</h1>
      </div>
      <!-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol> -->
      </div> 
    </div>
  </div>

        <!-- left column2 -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Genres</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Movie Genre</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Movie Genre">
              </div>
              <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
      <!--/.col (left)2 -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div>
  
<!-- /.container-fluid -->
</section>