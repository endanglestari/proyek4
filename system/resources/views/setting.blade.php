<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Setting Profil Admin</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{url('public')}}/smk.png" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{url('public')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="{{url('public')}}/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="{{url('public')}}/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="{{url('public')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="{{url('public')}}/dist/css/theme.min.css">
        <script src="{{url('public')}}/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
           @include('template.section.header')   
            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                @include('template.section.sidebar')        
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Setting Profil Admin</h5>
                                            <span>Selamat Datang admin di halaman setting profil SPK penerimaan Siswa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="{{url('public')}}/img/admin.jpg" class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-10">Endang Lestari</h4>
                                            <p class="card-subtitle">Admin Penerimaan Siswa Baru</p>
                                            <div class="row text-center justify-content-md-center">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Email Admin </small>
                                        <h6>admin123@gmail.com</h6> 
                                        <small class="text-muted d-block pt-10">No Handphone</small>
                                        <h6>08999999999</h6> 
                                        <small class="text-muted d-block pt-10">Alamat</small>
                                        <h6>Jl. Gajah Mada, Sukabangun no 390</h6>
                                        <div class="map-box">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div> 
                                        <small class="text-muted d-block pt-30">Social Profile</small>
                                        <br/>
                                        <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                                        <button class="btn btn-icon btn-instagram"><i class="fab fa-instagram"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                                        </li>
                                    </ul>
                                     <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                            <div class="card-body">
                                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                            <div class="card-body">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="example-name">Full Name</label>
                                                        <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email">Email</label>
                                                        <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-password">Password</label>
                                                        <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-phone">Phone No</label>
                                                        <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-message">Message</label>
                                                        <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-country">Select Country</label>
                                                        <select name="example-message" id="example-message" class="form-control">
                                                            <option>London</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Canada</option>
                                                            <option>Thailand</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>