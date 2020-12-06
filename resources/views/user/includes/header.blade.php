<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.home') }}">
            <img class="brand-logo" alt="modern admin logo" style="width: 45px;height: 45px; display: inline-block;"
                 src="{{asset('assets/images/logo/consult_brand.jpg')}}">
            <h3 class="brand-text" style="display: inline-block;"><span style="color: red;font-size: 25px;">{{__('admin_Translate.consulting')}}</span><span style="color: blue ;font-size: 25px;">{{__('admin_Translate.center')}}</span></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">


                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }} </a>
                    </li>
                @endforeach

                <li class="nav-item ">
                    <a class="nav-link" href=""><i class="fa fa-fw fa-home  "></i>Home Page</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href=""><i class="fa fa-fw fa-industry "></i>Who Are We</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href=""><i class="fa fa-fw fa-phone  "></i>Contact Us</a>
                </li>




            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="login"><i class="fa fa-fw fa-sign-out  "></i>SignIn</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="register"><i class="fa fa-fw fa-pencil  "></i>SignUp</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
