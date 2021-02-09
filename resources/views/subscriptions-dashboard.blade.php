@extends('layouts/master')
@section('content')

<!-- Page Content -->

<div class="container page__container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Subscribed Packages</div>
    </div>

    <div class="row card-group-row mb-16pt mb-lg-40pt">
        
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Professionals</h4>
                        <p class="text-70 mb-0">For Garments Product Development.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">Taka</span>
                        <span class="h1 m-0 font-weight-normal">5000</span>
                        <span class="h4 m-0 font-weight-normal">/ 3 orders</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html"
                        class="btn btn-outline-secondary">Upgrade</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Professionals</h4>
                            <p class="text-70 mb-0">For Garments Product Development.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <span class="h4 m-0 font-weight-normal">Taka</span>
                            <span class="h1 m-0 font-weight-normal">5000</span>
                            <span class="h4 m-0 font-weight-normal">/ 3 orders</span>
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                </div>
                <div class="card-footer">
                    <a href="{{route('signup-payment')}}"
                        class="btn btn-outline-secondary">Upgrade</a>
                </div>
            </div>

        </div>
        
    </div>

    <div class="page-separator">
        <div class="page-separator__text">Packages</div>
    </div>
    <div class="row card-group-row mb-16pt mb-lg-40pt">
        
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Starter</h4>
                            <p class="text-70 mb-0">For Garments Product Development.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <span class="h4 m-0 font-weight-normal">Taka</span>
                            <span class="h1 m-0 font-weight-normal">2000</span>
                            <span class="h4 m-0 font-weight-normal">/ single order</span>
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                </div>
                <div class="card-footer">
                    <a href="{{route('signup-payment')}}"
                        class="btn btn-outline-secondary">BUY</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Professionals</h4>
                        <p class="text-70 mb-0">For Garments Product Development.</p>
                    </div>
                     <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">Taka</span>
                        <span class="h1 m-0 font-weight-normal">5000</span>
                        <span class="h4 m-0 font-weight-normal">/ 3 orders</span>
                     </p>
                    <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                </div>
                <div class="card-footer">
                    <a href="{{route('signup-payment')}}"
                        class="btn btn-outline-secondary">Buy</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Enterprise</h4>
                            <p class="text-70 mb-0">For Garments Product Development.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <span class="h4 m-0 font-weight-normal">Taka</span>
                            <span class="h1 m-0 font-weight-normal">8000</span>
                            <span class="h4 m-0 font-weight-normal">/ 5 orders</span>
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>No Time Limitation</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html"
                        class="btn btn-outline-secondary">Buy</a>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- // END Page Content -->
    
@endsection