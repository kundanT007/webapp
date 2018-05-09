
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">User Response</h4>

          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>

              </thead>
              <tbody>
                <?php $user->display(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Admin</h4>
            <a href="main.php?id=adminadd"> <button type="button" rel="tooltip" title="Add" class="btn btn-danger btn-simple btn-xs">
                 <i class="pe-7s-add-user"> Add New Admin</i>
             </button></a>

          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Added By</th>
              </thead>
              <tbody>
                <?php $user->displayadmin(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
