<div class="modal fade" id="<?php echo $row['case_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Case</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="courteditcase.php" method="post">
     
    <?php

  $case_id=$row['case_id'];
  
  $query2=mysqli_query($dbcon,"select * from court where case_id='$case_id'");
  $row1 = mysqli_fetch_array($query2);

  $next_hearing_date =$row1['next_hearing_date'];
  $hearing_info =$row1['hearing_info'];
  

  ?>

        
              
              <div class="row">
               <div class="col-md-6">
                <div class="form-group">

                  <label for="">Case Id:</label>

                  
                   <input type="hidden" name="case_id" value="<?php echo $case_id?>">
                    <input type="text" readonly="" class="form-control" name="case_id" value="<?php echo $case_id?>">
                  
                </div>
              </div>
              </div>

               <div class="row">
                <div class="col-md-6">
                <div class="form-group">

                  <label for="">Next Hearing Date</label>
                  <br>

                      <input type="hidden" name="next_hearing_date" value="<?php echo $caseid?>">
                    <input type="date" class="form-control" name="next_hearing_date" value="<?php echo $next_hearing_date?>">
                  


                </div>
                </div>
               </div>

              <div class="row">
                <div class="col-md-6">
                <div class="form-group">

                  <label for="">Hearing Info</label>
                  <br>
                  <!-- <input type="hidden" name="hearing_info" value="<?php echo $caseid?>">
                    <input type="text" readonly="" class="form-control" name="hearing_info" value="<?php echo $hearing_info?>"> -->
                    <select class="form-control" name="hearing_info" id ="hearing_info">
                      <option selected="selected" value="<?php echo $row1['hearing_info'];?>"><?php echo $row1['hearing_info'];?></option>

                      <option value="Completed"> Completed</option>
                      <option value="pending"> pending </option>
                      
                      
                    

                     </select>
                  
                </div>
                  </div>
               </div>

					</div>
        
       
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="icon-remove icon-large"></i>Close</button>
        <button type="submit" name="editcase" class="btn btn-success"> <i class="icon-check icon-large"></i>Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
