@extends('layouts/master')
@section('content')

<!-- Page Content -->

<div class="page-section container page__container">
    <div class="page-separator">
        <div class="page-separator__text">Change your plan</div>
    </div>

    <div class="row card-group-row">
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden card--raised mb-lg-0">

                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Start</span>

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">person</i>
                        </span>
                        <h4 class="mb-8pt">Student</h4>
                        <p class="text-70 mb-0">Access to over 1.000 high quality courses. For individuals.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">9</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html"
                        class="btn btn-accent">Get started</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden mb-lg-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Team</h4>
                        <p class="text-70 mb-0">Starts with 3 accounts with more seats available.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">19</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html"
                        class="btn btn-outline-secondary">Get started</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden mb-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">business_center</i>
                        </span>
                        <h4 class="mb-8pt">Enterprise</h4>
                        <p class="text-70 mb-0">Build customized learning paths with content that aligns to your internal learning goals.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">49</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html"
                        class="btn btn-outline-secondary">Get started</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- // END Page Content -->
    
@endsection