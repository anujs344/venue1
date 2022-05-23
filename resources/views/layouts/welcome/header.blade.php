<div class="header">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to WedEazzy</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You Vendor?<a href="{{route('showauthvendor')}}" class="text-white">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->
    <!-- navigation start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-classic">
                    <a class="navbar-brand" href="/"> <img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-classic">
                   <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Vendors
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="menu-2">
                                    
                                    <li><a class="dropdown-item" href="{{route('showvendorcategory')}}">
                                            Vendor By Categories</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('showvendorlocation')}}">
                                            Vendor By Locations</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        <a href="{{route('showauthcouple')}}" class="btn btn-default btn-sm">Get Started Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- navigation close -->
</div>
<!-- /.header -->