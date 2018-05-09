<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Our Team</h4>
           <a href="main.php?id=team&t=tadd"> <button type="button" rel="tooltip" title="Add" class="btn btn-danger btn-simple btn-xs">
                <i class="pe-7s-add-user"> Add Teacher</i>
            </button></a>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>

                <th> First Name</th>
                <th> Last Name</th>
                <th>Course</th>
                <th>Created By</th>
                <th>Edited By</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php $team->displayTeam(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
