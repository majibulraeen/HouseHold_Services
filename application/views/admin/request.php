    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pr-4 pt-4 pb-4">
          <div class="row">
            <div class="col-sm-12"><br> 
              <button class="btn btn-info float-right" data-toggle="modal" data-target="#add_new_request">Add New</button>
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped table-bordered datatable" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Quaries</th>
                <th>Provider Name</th>
                <th>Action</th>
            </tr>
        </thead>
          <tbody>
              <tr>
                <td>1</td>
                  <td>Tiger Nixon</td>
                  <td>9807821031</td>
                  <td>lagankhel</td>
                  <td>2011-04-25</td>
                  <td>cash</td>
                  <td>Electricity not working</td>
                  <td>laxman</td>
                  <td>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a>
                  </td>
              </tr>
        </tbody>
        <tfoot>
             <tr>
                <th>#</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Quaries</th>
                <th>Provider Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

              
          </div>
          
        </div>

      </div>
    </section>
    <!-- /.content -->
<!--starting of request page-->
  </div>
  <!-- /.content-wrapper -->

<!-- The Modal -->
<div class="modal" id="add_new_request">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Order</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url().'work/work_order/' ?>" class="database_operations">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>First Name</label>
              <input class="form-control" required="required" type="text" name="fname" placeholder="Enter Your First Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" required="required" type="text" name="lname" placeholder="Enter Your Last Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Mobile Number</label>
              <input class="form-control" required="required" type="text" name="mobile_no" placeholder="Enter Your Mobile Number">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" required="required" type="email" name="email" placeholder="Enter Your Email">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Address</label>
              <input class="form-control" required="required" type="text" name="address" placeholder="Enter Your Address">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Date</label>
              <input class="form-control" required="required" type="text" name="date" placeholder="Enter Date">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
                    <label for="">Payment Mode</label>
                    <select class="form-control" name="payment" id="payment">
                        <option value="cash">Cash</option>
                        <option value="card">Debit Card</option>
                    </select>
                </div> 
            </div>
            <div class="col-sm-12">
            <div class="form-group">
              <label>Problem</label>
              <input class="form-control" required="required" type="text" name="problem" placeholder="Problem Type...?">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <button class="btn btn-primary"><i class="fa fa-plus">&nbsp; Add</i></button>
              
            </div>
          </div>
        </div>
      </form>
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>
  