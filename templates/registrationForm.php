<section class="h-100 h-custom gradient-custom-2">
    <form action="index.php/registercheck" method="POST">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #198754;">General Infomation</h3>

                                        <div class="mb-4 pb-2">
                                            <select class="form-select" aria-label="Title" name="title">
                                                <option selected>Title</option>
                                                <option value="1">Mr.</option>
                                                <option value="2">Ms.</option>
                                                <option value="3">Mrs.</option>
                                                <option value="4">Dr.</option>
                                                <option value="4">Prof.</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="fname" />
                                                    <label class="form-label" for="form3Examplev2">First name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="text" id="form3Examplev3" class="form-control form-control-lg" name="lname" />
                                                    <label class="form-label" for="form3Examplev3">Last name</label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                <div class="form-outline">
                                                    <input type="password" id="form3Examplev5" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev5">Password</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                <div class="form-outline">
                                                    <input type="password" id="form3Examplev5" class="form-control form-control-lg" name="password" />
                                                    <label class="form-label" for="form3Examplev5">Repeat password</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Contact Details</h3>

                                        <div class="row">
                                            <div class="col-md-10 mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="street" />
                                                    <label class="form-label" for="form3Examplea2">Street</label>
                                                </div>
                                            </div>

                                            <div class="col-md-2 mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="hnr" />
                                                    <label class="form-label" for="form3Examplea2">No.</label>
                                                </div>
                                            </div>





                                        </div>
                                        <div class="mb-4 pb-2">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea3" class="form-control form-control-lg" name="addinfo" />
                                                <label class="form-label" for="form3Examplea3">Additional Information</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea4" class="form-control form-control-lg" name="zip" />
                                                    <label class="form-label" for="form3Examplea4">Zip Code</label>
                                                </div>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <div class="form-outline form-white">
                                                    <input type="text" id="form3Examplea5" class="form-control form-control-lg" name="city" />
                                                    <label class="form-label" for="form3Examplea5">City</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="mb-4 pb-2">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea6" class="form-control form-control-lg" name="country" />
                                                <label class="form-label" for="form3Examplea6">Country</label>
                                            </div>
                                        </div>



                                        <div class="mb-4 pb-2">

                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea8" class="form-control form-control-lg" name="phone" />
                                                <label class="form-label" for="form3Examplea8">Phone Number</label>
                                            </div>

                                        </div>


                                        <div class="mb-4">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea9" class="form-control form-control-lg" name="emailadress" />
                                                <label class="form-label" for="form3Examplea9">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>