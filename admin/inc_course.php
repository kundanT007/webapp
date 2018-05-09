<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Course</h4>
           <a href="main.php?c=cadd&id=courses"> <button type="button" rel="tooltip" title="Add" class="btn btn-danger btn-simple btn-xs">
                <i class="pe-7s-add-user"> Add New Course</i>
            </button></a>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>

                <th>Name</th>
                <th>Header</th>
                <th>Description</th>
                  <th>Created</th>
                    <th>Edited</th>

                <th>Status</th>
                <th>Counter</th>
                <th>Image</th>
                <th>Action</th>

              </thead>
              <tbody>
                <?php $cs->displayCourse(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
