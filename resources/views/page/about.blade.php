

@include('layouts._head')

    <div class="page-wrapper">

        @include('layouts._header')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $getPage->title }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('{{ $getPage->getImage() }}')">
            <h1 class="page-title text-white">{{ $getPage->title }}</h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 mb-lg-0">

                   {!! $getPage->description !!}
                

                  
                </div><!-- End .col-lg-6 -->
                
         
            </div><!-- End .row -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container -->

    

    </div><!-- End .page-content -->
</main><!-- End .main -->

@include('layouts._footer')

<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

            <div class="mobile-menu-overlay"></div>

@include('layouts._mobilemenu')

        @include('layouts._signregister')

                        @include('layouts._newletter')

                                     @include('layouts._scripts')