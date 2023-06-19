
@extends('layouts.layout')
@section('mainPage')

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tenants</h1>
                    <p class="mb-4"> Add a New Tenant</p>

                    <!-- DataTales Example -->
                   <div class="card">
                        <div class="card-header">
                            Enter Tenant Details
                        </div>

                    <form action="{{url('registerTenants')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col form-group">
                                    <label for="Name">Enter Tenant Name</label>
                                    <input type="text" name="Fullname" id="fullname" class="form-control">
                                </div>


                                 <div class="col form-group">
                                    <label for="Nationality">Enter Tenant Nationality</label>
                                    <input type="text" name="Nationality" id="Nationality" class="form-control">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col form-group">
                                    <label for="nationalID">Upload Any National ID</label>
                                    <input type="file" name="NationalID" id="NationalID" class="form-control">
                                </div>


                                 <div class="col form-group">
                                    <label for="TAgreement">Upload Tenancy Agreement</label>
                                    <input type="file" name="TenancyAgreement" id="tenancyAgreement" class="form-control">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col form-group">
                                    <label for="Name">Enter Tenant Phonenumber</label>
                                    <input type="text" name="TenantPhonenumber" id="TenantPhonenumber" class="form-control">
                                </div>


                                 <div class="col form-group">
                                    <label for="DOB">Date of Birth</label>
                                    <input type="date" name="TenantDOB" id="tenantDOB" class="form-control">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="Name">Enter Tenant Email</label>
                                    <input type="email" name="TenantEmail" id="TenantEmail" class="form-control">
                                </div>

                            
                                 <div class="col form-group">
                                    <label for="DOE">Tenant Date of Entry</label>
                                    <input type="date" name="TenantEntryDate" id="TenantEntryDate" class="form-control">
                                </div>

                                <div class="col form-group">
                                    <label for="DOE">Tenant Date of Depature</label>
                                    <input type="date" name="TenantDepatureDate" id="TenantDepatureDate" class="form-control">
                                </div>

                                
                            </div>


                            <div class="form-group text text-center mt-3">
                                <input type="submit" value="SUBMIT" name="saveTenant" class="btn btn-primary">
                            </div>

                    </form>
                        </div>
                   </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

@endsection