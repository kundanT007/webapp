<div class="content">
           <div class="container-fluid">
               <div class="row">
                 <div class="col-md-3" >
                     <div class="card">
                         <div class="header">
                           <h4 class="title">About(Photo)</h4>

                         </div>
                         <div class="content">
                             <form method="post" action="main.php?id=aboutphoto" enctype="multipart/form-data">
                             <?php $aac->displayPhoto(); ?>
                                 <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-left">Upload </button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12">
                     <div class="card">
                         <div class="header">
                           <h4 class="title">About</h4>

                         </div>
                         <div class="content">
                             <form method="post" action="main.php?id=about">
                             <?php $aac->displayAbout(); ?>
                                 <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>
                 </div>




                 <div class="col-md-12">
                     <div class="card">
                         <div class="header">
                           <h4 class="title">Contact</h4>

                         </div>
                         <div class="content">
                             <form method="post" action="main.php?id=contact">
                             <?php $aac->displayContact();  ?>
                                 <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>
                 </div>



                   <div class="col-md-12">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Office Details</h4>
                           </div>
                           <div class="content">
                               <form method="post" action="main.php?id=office">
                               <?php $aac->displayOffice(); ?>
                                   <button type="submit" class="btn btn-info btn-fill pull-left">Update </button>
                                   <div class="clearfix"></div>
                               </form>
                           </div>
                       </div>
                   </div>



               </div>
           </div>
       </div>
