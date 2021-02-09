@extends('layouts/master')
@section('content')

<!-- Page Content -->

<div class="container page__container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Overview</div>
    </div>

    
        

    <div class="page-separator">
        <div class="page-separator__text"></div>
    </div>

    <div class="posts-cards mb-24pt">

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="images/paths/invision_200x168.png"
                                alt="avatar"
                                class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href="{{route('faq')}}"
                        class="card-title mr-3">FAQ</a>
                    <small class="text-50"></small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    
                    
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                        </div>
                        
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#"
                        data-toggle="dropdown"
                        data-caret="false"
                        class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)"
                            class="dropdown-item">Action</a>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="images/paths/invision_200x168.png"
                                alt="avatar"
                                class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href="{{route('discussion')}}"
                        class="card-title mr-3">Discussion</a>
                    <small class="text-50"></small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    
                    
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                        </div>
                        
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#"
                        data-toggle="dropdown"
                        data-caret="false"
                        class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)"
                            class="dropdown-item">Action</a>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="images/paths/invision_200x168.png"
                                alt="avatar"
                                class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href=""
                        class="card-title mr-3">Support Ticket</a>
                    <small class="text-50"></small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    
                    
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                        </div>
                        
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#"
                        data-toggle="dropdown"
                        data-caret="false"
                        class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)"
                            class="dropdown-item">Action</a>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="images/paths/invision_200x168.png"
                                alt="avatar"
                                class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href=""
                        class="card-title mr-3">Contact Us</a>
                    <small class="text-50"></small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    
                    
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                        </div>
                        
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#"
                        data-toggle="dropdown"
                        data-caret="false"
                        class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)"
                            class="dropdown-item">Action</a>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)"
                            class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>

<!-- // END Page Content -->
    
@endsection