@extends('layouts/master')
@section('content')
 <!-- Page Content -->

 <div class="py-32pt navbar-submenu">
    <div class="container page__container">
        <div class="progression-bar progression-bar--active-accent">
            <a href="pricing.html"
               class="progression-bar__item progression-bar__item--complete">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon">done</i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Pricing</span>
                </span>
            </a>
            <a href="signup.html"
               class="progression-bar__item progression-bar__item--complete">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon">done</i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Account details</span>
                </span>
            </a>
            <a href="signup-payment.html"
               class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
                <span class="progression-bar__item-content">
                    <i class="material-icons progression-bar__item-icon"></i>
                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">Payment details</span>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container page__container">
        <form action="rubbish.html"
              class="col-md-8 p-0 mx-auto">

            <div class="list-group list-group-form mb-0">
                <div class="list-group-item">
                    <fieldset aria-labelledby="label-type"
                              class="m-0 form-group">
                        <div class="form-row align-items-center">
                            <label for="payment_cc"
                                   id="label-type"
                                   class="col-md-3 col-form-label form-label">Payment type</label>
                            <div role="group"
                                 aria-labelledby="label-type"
                                 class="col-md-9">
                                <div role="group"
                                     class="btn-group btn-group-toggle"
                                     data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio"
                                               id="payment_cc"
                                               name="payment_type"
                                               value="cc"
                                               checked=""
                                               aria-checked="true" /> Debit or credit card
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio"
                                               id="payment_pp"
                                               name="payment_type"
                                               value="pp"
                                               aria-checked="true" /> PayPal
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="list-group-item">
                    <div class="form-group row align-items-center mb-0">
                        <label class="col-form-label form-label col-sm-3">Card number</label>
                        <div class="col-sm-9">
                            <input type="text"
                                   class="form-control"
                                   placeholder="Credit / debit card number" />
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row align-items-center mb-0">
                        <label class="col-form-label form-label col-sm-3">Security code (CVV)</label>
                        <div class="col-sm-9">
                            <input type="text"
                                   class="form-control"
                                   placeholder="CVV"
                                   style="width:80px">
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="form-group row align-items-center mb-0">
                        <label class="col-form-label form-label col-sm-3">Expiration date</label>
                        <div class="col-sm-9">
                            <div class="form-row">
                                <div class="col-md-6 mb-16pt mb-sm-0">
                                    <select class="custom-control custom-select form-control">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">Novemeber</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="custom-control custom-select form-control">
                                        <option value="1"
                                                selected="">2016</option>
                                        <option value="2">2017</option>
                                        <option value="3">2018</option>
                                        <option value="3">2019</option>
                                        <option value="3">2020</option>
                                        <option value="3">2021</option>
                                        <option value="3">2022</option>
                                        <option value="3">2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item text-center">
                    <button type="submit"
                            class="btn btn-primary">Pay Now</button>
                </div>
            </div>

        </form>
    </div>
</div>

<!-- // END Page Content -->

    
@endsection