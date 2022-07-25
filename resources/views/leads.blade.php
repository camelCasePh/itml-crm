@extends('layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leads</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">

            <a href="#" class=" btn btn-dark ml-2 p-3 mb-3 " style="border-bottom:3px solid red;"><strong>Add New Lead</strong></a>


          <div class="col-12" >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Leads Information</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Company Name</th>
                      <th>Company Email</th>
                      <th>Company Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>0001</td>
                      <td>XYZ Company</td>
                      <td>xyz@company.com</td>
                      <td>(228)247-5960</td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                        <div class="container">
                            <div class="d-flex flex-column">
                              <div >
                                <strong>Company Name:</strong> xyz
                              </div>
                              <div >
                                <strong>Company Email:</strong> xyz@mail.com
                              </div>
                              <div >
                                <strong>Column Number:</strong> (228)247-5960
                              </div>
                              <div>
                                <strong>Additional Info:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt saepe nesciunt modi fugit perspiciatis, accusamus maxime dicta fugiat, at ullam totam est ex blanditiis nostrum, rerum quo harum error natus?

                              </div>
                            </div>
                          </div>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>0002</td>
                        <td>EE Company</td>
                        <td>ee@company.com</td>
                        <td>(204)247-9060</td>
                      </tr>
                      <tr class="expandable-body">
                        <td colspan="5">
                          <div class="container">
                              <div class="d-flex flex-column">
                                <div >
                                  <strong>Company Name:</strong> ee
                                </div>
                                <div >
                                  <strong>Company Email:</strong> ee@mail.com
                                </div>
                                <div >
                                  <strong>Column Number:</strong> (228)247-5960
                                </div>
                                <div>
                                  <strong>Additional Info:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt saepe nesciunt modi fugit perspiciatis, accusamus maxime dicta fugiat, at ullam totam est ex blanditiis nostrum, rerum quo harum error natus?

                                </div>
                              </div>
                            </div>
                      </tr>
                  </tbody>
                </table>

               </div>
             </div>
          </div>
        <!-- /.row -->
       </div>
    </div><!-- /.container-fluid -->
 </div>
</section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection()

