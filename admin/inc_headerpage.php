<div class="content">
           <div class="container-fluid">
               <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="header">
                           <h4 class="title">Menu</h4>

                         </div>
                         <div class="content">
                             <form method="post" action="main.php?id=headerpage&q=menuedit">
                             <?php $header->displayMenu(); ?>
                                 <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-8">
                   <div class="card">
                     <div class="header">
                       <h4 class="title">Slider</h4>
                      <a href="main.php?id=headerpage&q=newslider"> <button type="button" rel="tooltip" title="Add" class="btn btn-danger btn-simple btn-xs">
                           <i class="pe-7s-add-user"> Add New Slider</i>
                       </button></a>
                     </div>
                     <div class="content table-responsive table-full-width">
                       <table class="table table-hover table-striped">
                         <thead>
                        

                           <th>Position</th>
                            <th>Image</th>
                             <th>Action</th>

                         </thead>
                         <tbody>
                           <?php $header->displaySlider(); ?>
                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>

                   <div class="col-md-6">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Edit Header</h4>
                           </div>
                           <div class="content">
                               <form method="post" action="main.php?id=headerpage&q=header">
                               <?php $header->heading(); ?>
                                   <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                   <div class="clearfix"></div>
                               </form>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-4">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Page View</h4>
                           </div>
                           <div class="content">
                               <form method="post" action="main.php?id=headerpage&q=page">
                               <?php $header->pageview(); ?>
                                   <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                   <div class="clearfix"></div>
                               </form>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
