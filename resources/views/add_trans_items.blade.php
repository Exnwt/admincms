<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <style><?php include 'C:\laravel\gudangapps\vendor\fontawesome-free\css\all.min.css'; ?></style>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <style><?php include 'C:\laravel\gudangapps\resources\css\sb-admin-2.min.css'; ?></style>
    <link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this page -->
    <style><?php include 'C:\laravel\gudangapps\vendor\datatables\dataTables.bootstrap4.min.css'; ?></style>
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script text="text/javascript" src="{{asset('/js/jquery-3.6.1.min.js')}}"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="category">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produk Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="produk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>produk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            
            <li class="nav-item">
                <a class="nav-link" href="tables">
                    <i class="fas fa-fw fa-table"></i>
                    <span>transaksi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="vourcher">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Vourcher</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>   

                                <form action="" >
                                @csrf

                                <script>
                                    $(document).ready(function (){
                                        $('.selectedOption').on('click',function(){
                                            var price = $(this).find(':selected').data('price');
                                            $('#priceLable').text(price);
                                        })
                                    });
                                </script>
                            <!--    <button type="submit" name="add_button" class="btn btn-primary" style="display:flex; margin-top:15px;align-content:center;align-items:center;"> <i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAX0lEQVRIS2NkoDFgpLH5DKMWEAzh4RlE/wn6G6GAYAhgU0BzC0jwAGGlBL1I2Aj8KgYkiMiJA5geDAdTK4gGlwWEggjma6LUkRPJFFtATsocXHEwKH2A01HUygfD2AIAC3AOGYmnO2wAAAAASUVORK5CYII=" style="padding-right:7px; display:flex;"></i> Add Items</button>                -->
                                            <div class="card-body">
                                       
                                        <div class="form-group col-md-12" style="display:flex;" >
                                            <label style="margin-right:10px;">Items<span class="text-danger">*</span></label>
                                            <select style="margin-right:10px;" name="dropdown_produk" id="dropdown_produk"class="btn btn-primary" type="text" onchange="getPrice()">
                                                @foreach ($listitem as $ll)
                                                    <option id="itemname" value="{{$ll->id}}">{{$ll->name}} --  {{number_format($ll->price)}}</option>
                                                @endforeach                                   
             
                                                <input type="number" class="form-control" required name="qty" id="qtynumber" >
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Price  : </label>
                                            <label for="" id="pricelabel">0</label>

                                            <button style="margin-left:20px;"class="btn btn-primary" onclick="addtrans()">Add Items</button>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>qty  : </label>
                                            <label for="" id="qtylabel">0</label>
                                        </div>
                                        <div class="table-responsive"> 
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <td>Items</td>
                                                        <td>Qty</td>
                                                        <td>Total price</td>
                                                        <td>Sub Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="tablebodytrans">
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Vourcher</label>
                                            <select name="" id="" class="btn btn-primary" style="margin-left:10px;">
                                            <option value="">-- choose voucher --</option>
                                                @foreach($listvou as $lsvou) 
                                                <option value="{{$lsvou->id}}">{{$lsvou->code}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Description<span class="text-danger"></span></label>
                                            <input type="text" class="form-control"  name="description" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Short_Description<span class="text-danger"></span></label>
                                            <input type="text" class="form-control"  name="short_description" >
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                            <option value="0">--- Select Status ---</option>
                                            <option value="1" {{ (isset($voucher) && $voucher->type == '1') ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ (isset($voucher) && $voucher->type == '2') ? 'selected' : '' }}>Unactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>New Product <span class="text-danger">*</span></label>
                                            <select name="new_product" class="form-control">
                                            <option value="0">--- Select Status ---</option>
                                            <option value="1" {{ (isset($voucher) && $voucher->type == '1') ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ (isset($voucher) && $voucher->type == '2') ? 'selected' : '' }}>Unactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Best Seller <span class="text-danger">*</span></label>
                                            <select name="best_seller" class="form-control">
                                            <option value="0">--- Select Status ---</option>
                                            <option value="1" {{ (isset($voucher) && $voucher->type == '1') ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ (isset($voucher) && $voucher->type == '2') ? 'selected' : '' }}>Unactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Featured <span class="text-danger">*</span></label>
                                            <select name="featured" class="form-control">
                                            <option value="0">--- Select Status ---</option>
                                            <option value="1" {{ (isset($voucher) && $voucher->type == '1') ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ (isset($voucher) && $voucher->type == '2') ? 'selected' : '' }}>Unactive</option>
                                            </select>
                                        </div>

                                        </form>
         
                                </table>
                            </div>
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

    </div>
    <!-- End of Page Wrapper -->

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

    <!-- Bootstrap core JavaScript-->
    <script <?php include 'C:\laravel\gudangapps\vendor\jquery\jquery.min.js'?>></script>
    <script <?php include 'C:\laravel\gudangapps\vendor\bootstrap\js\bootstrap.bundle.min.js'?>></script>

    <!-- Core plugin JavaScript-->
    <script <?php include 'C:\laravel\gudangapps\vendor\jquery-easing\jquery.easing.min.js'?>></script>

    <!-- Custom scripts for all pages-->
    <script <?php include 'C:\laravel\gudangapps\resources\js\sb-admin-2.min.js'?>></script>

    <!-- Page level plugins -->
    <script <?php include 'C:\laravel\gudangapps\vendor\datatables\jquery.dataTables.min.js'?>></script>
    <script <?php include 'C:\laravel\gudangapps\vendor\datatables\dataTables.bootstrap4.min.js'?>></script>

    <!-- Page level custom scripts -->
    <script <?php include 'C:\laravel\gudangapps\resources\js\demo\datatables-demo.js'?>></script>

</body>
<script type="text/javascript">
    const isiTableBody = document.querySelector("#tablebodytrans");

    let produkss = []


    const getProduks = async()=>{
        const response = await fetch('/api/produk/get/all');
        const data = await response.json();
        produkss = data;
    };
    getProduks()

    const getPrice = ()=>{
        const selectProduk = document.querySelector("#dropdown_produk")

        const pricedata = document.querySelector("#pricelabel")
        const newProduk = produkss.find((e)=>e.id == ([...selectProduk.selectedOptions][0].value))
        pricedata.innerText =  parseInt(newProduk.price);
    };

    const addtrans = ()=>{
        const selectProduk = document.querySelector("#dropdown_produk")
        const qtys = document.querySelector("#qtynumber").value;
        console.log("ini qty: ",qtys);

        let newItems = produkss.find((e)=>e.id == ([...selectProduk.selectedOptions][0].value))
        console.log(newItems);

        isiTableBody.innerHTML += `
            <tr>
                <td>
                    <input type="hidden" id="product_id" name="product_id[]" value="${newItems.id}">
                    <input type="text" id="product_name" name="product_name[]" value="${newItems.name}" readonly>
                </td>
                <td>
                    <input type="number" id="qty" name="qty[]" min="1" onchange="getPrice(this)" onekeydown="updatePrice(this)" value="${qtys}">
                </td>
                <td>
                    <input type="hidden" id="price_satuan" name="price_satuan[]" value="${newItems.price}">
                    <input type="number" id="price_total" name="price_total[]" value="${newItems.price*qtys}" readonly>
                    <input type="hidden" id="price_purchase_satuan" name="price_purhase_satuan[]" value="${newItems.purchase_price}">
                    <input type="hidden" id="price_purchase_total" name="price_purhase_total[]" value="${newItems.purchase_price * qtys}" readonly>
                </td>
                <td>
                    <button type="button" style="margin-left:20px;"class="btn btn-primary" onclick="removeProduk(this)">Remove</button>
                </td>
            </tr>

        `






        





    };


</script>
</html>