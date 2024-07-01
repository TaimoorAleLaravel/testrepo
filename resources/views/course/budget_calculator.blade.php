@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <!---------------------------------------------------- English --------------------------------------------------->
    <div class="container">
        <article class="course budget">
            <div class="mt-3">
                <h2 style="color: #000b57">Budget Calculator</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="">Budget Calculator</a></li>
                    </ol>
                </nav>
            </div>
            <p><img alt="Image: Video" class="videostill border img-fluid" src="https://completecreditcounseling.org/img/budget_page.jpg"></p>
            <div class="">
                <p>Fill out the form on this page carefully and take your time. Make sure you double-check the
                    information
                    you submit before proceeding. If any of the information is incorrect, you will be required
                    by a
                    counselor
                    to go back and correct it, and this may cause your counseling session to take much longer.
                    <b>Please keep track of the information you provide here as you may be asked to verify it
                        during the Chat Session at the end of the course.</b>
                </p>
                <p>Please enter only whole numbers (do not include cents or decimals).</p>
            </div>
            <form class="button_to" method="POST" action="{{ route('form.budget_calculator', ['locale' => app()->getlocale()]) }}">
                @csrf 
                <input type="hidden" name="_method" value="patch" autocomplete="off">
                <input type="hidden" name="authenticity_token" value="AxoeGUWdv7Kf1VUUGDsgHyakg_1SMRFUyK40KuPEb8YvdRKvLPkuD8KInviKjd9s2jwtM9dGxl_EQ_17yWyOiQ" autocomplete="off">
                <div class="row income ml-3">
                    <h4>Please Enter Annual Net Income</h4>
                    <p class="lead">In order to calculate Annual Net Income please take the amount you take home after deducting all taxes (federal, state, local) and social security.</p>
                    <div class="col-md-5 col-lg-4 mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="client_budget_i_1">Your Annual Net Income</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input id="client_budget_i_1" min="1" name="net_income"
                                    onchange="changeValue(this.value,'net_income')" pattern="\d+,\d+,\d+"
                                    value="100" inputmode="numeric" class="form-control" type="number"
                                    required="">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 mb-3 ml-2">

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_i_2">Your Spouse's Annual Net Income,
                                if
                                available</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_i_2" min="0" name="spouse_net_income"
                                    pattern="\d+,\d+,\d+"
                                    onchange="changeValue(this.value,'spouse_net_income')" value="0"
                                    inputmode="numeric" class="form-control" type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="row expenses ml-3">

                    <h4>Please Enter Average Monthly Expenses</h4>



                    <div class="col-md-3 col-lg-4 mb-3">

                        <h5>Housing</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_11">Mortgage or Rent</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_11" min="0" name="rent"
                                    onchange="changeValue(this.value,'rent')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_12">Condo</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_12" min="0" name="condo"
                                    onchange="changeValue(this.value,'condo')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_13">Maintenance</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_13" min="0" name="maintenance"
                                    onchange="changeValue(this.value,'maintenance')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_14">Property Taxes</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_14" min="0" name="pro_tax"
                                    onchange="changeValue(this.value,'pro_tax')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_15">Insurance</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_15" min="0" name="housing_insurance"
                                    onchange="changeValue(this.value,'housing_insurance')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_1_16">Furniture and
                                Appliances</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_1_16" min="0" name="fur_app"
                                    onchange="changeValue(this.value,'fur_app')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-lg-4 mb-3 ml-4">

                        <h5>Health</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_5_32">Doctor(s)</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_5_32" min="0" name="doctor"
                                    onchange="changeValue(this.value,'doctor')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_5_33">Dentist(s)</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_5_33" min="0" name="dentist"
                                    onchange="changeValue(this.value,'dentist')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_5_34">Medications</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_5_34" min="0" name="medications"
                                    onchange="changeValue(this.value,'medications')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_5_35">Insurance</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_5_35" min="0" name="health_insurance"
                                    onchange="changeValue(this.value,'health_insurance')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">
                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-lg-3 mb-3 ml-4">

                        <h5>Education</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_6_36">Tuition/School Fees</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_6_36" min="0" name="school_fee"
                                    onchange="changeValue(this.value,'school_fee')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_6_37">Books and Supplies</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_6_37" min="0" name="books"
                                    onchange="changeValue(this.value,'school_fee')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_6_38">School Activities</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_6_38" min="0" name="school_activities"
                                    onchange="changeValue(this.value,'school_fee')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">

                        <h5>Utilities</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_17">Gas</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_17" min="0" name="gas"
                                    onchange="changeValue(this.value,'gas')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_18">Electricity</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_18" min="0" name="electricity"
                                    onchange="changeValue(this.value,'gas')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_19">Water</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_19" min="0" name="water"
                                    value="0" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_20">Garbage</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_20" min="0" name="garbage"
                                    onchange="changeValue(this.value,'gas')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_21">Sewer</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_21" min="0" name="sewer"
                                    onchange="changeValue(this.value,'sewer')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_22">Telephone</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_22" min="0" name="telephone"
                                    onchange="changeValue(this.value,'telephone')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_23">Cell Phone</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_23" min="0" name="cell_phone"
                                    onchange="changeValue(this.value,'cell_phone')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_68">Cable Television</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_68" min="0" name="cable"
                                    onchange="changeValue(this.value,'cable')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_2_69">Internet</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_2_69" min="0" name="internet"
                                    onchange="changeValue(this.value,'internet')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mb-3 ml-3">

                        <h5>Transportation</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_25">Automobile Payment</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_25" min="0" name="automobile"
                                    onchange="changeValue(this.value,'automobile')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_26">Licensing</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_26" min="0" name="license"
                                    onchange="changeValue(this.value,'license')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_27">Insurance</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_27" min="0" name="transport_insurance"
                                    onchange="changeValue(this.value,'transport_insurance')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_28">Maintenance</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_28" min="0" name="transport_maintenance"
                                    onchange="changeValue(this.value,'transport_maintenance')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_29">Gasoline</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_29" min="0" name="gasoline"
                                    onchange="changeValue(this.value,'gasoline')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_30">Public Transportation</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_30" min="0" name="public_trans"
                                    onchange="changeValue(this.value,'public_trans')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_4_31">Parking / Tolls</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_4_31" min="0" name="parking_tolls"
                                    onchange="changeValue(this.value,'parking_tolls')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-3 mb-3 ml-3">

                        <h5>Entertainment</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_39">Restaurant Meals</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_39" min="0" name="restaurent"
                                    onchange="changeValue(this.value,'restaurent')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_40">Gifts</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_40" min="0" name="gifts"
                                    onchange="changeValue(this.value,'gifts')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_41">Newspapers and
                                Magazines</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_41" min="0" name="newspaper"
                                    onchange="changeValue(this.value,'newspaper')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_42">Movies and Concerts</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_42" min="0" name="movies_concerts"
                                    onchange="changeValue(this.value,'sewer')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_43">Vacations</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_43" min="0" name="vacations"
                                    onchange="changeValue(this.value,'vacations')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_7_44">Hobbies</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_7_44" min="0" name="hobbies"
                                    onchange="changeValue(this.value,'hobbies')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">

                        <h5>Personal</h5>

                        <div class="mb-3">

                            <label class="form-label" for="client_budget_c_8_45">Clothing</label>

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_budget_c_8_45" min="0" name="clothing"
                                    onchange="changeValue(this.value,'clothing')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number">

                                <span class="input-group-text">.00</span>

                            </div>

                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_8_54">Laundry/Dry
                                Cleaning</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_54" min="0" name="laundery"
                                    onchange="changeValue(this.value,'laundery')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_8_53">Membership
                                Dues</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_53" min="0" name="membership"
                                    onchange="changeValue(this.value,'membership')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_52">Donations</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_52" min="0" name="donations"
                                    onchange="changeValue(this.value,'donations')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_51">Allowances</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_51" min="0" name="allowance" value=" "
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_8_50">Child
                                Support</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_50" min="0" name="child_support"
                                    onchange="changeValue(this.value,'child_support')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_49">Childcare</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_49" min="0" name="child_care"
                                    onchange="changeValue(this.value,'child_care')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_48">Pets</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_48" min="0" name="pets"
                                    onchange="changeValue(this.value,'pets')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_47">Cosmetics</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_47" min="0" name="cosmetics"
                                    onchange="changeValue(this.value,'cosmetics')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_46">Haircuts</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_46" min="0" name="haircuts"
                                    onchange="changeValue(this.value,'haircuts')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_8_55">Other</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_8_55" min="0" name="personal_other"
                                    onchange="changeValue(this.value,'personal_other')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mb-3 ml-3">

                        <h5>Loans and Credit Cards</h5>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_66">Student
                                Loan</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_66" min="0" name="std_loan"
                                    onchange="changeValue(this.value,'std_loan')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_65">Gas
                                Card</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_65" min="0" name="gas_card"
                                    value="0" inputmode="numeric" pattern="[0-9]*"
                                    class="form-control" type="number"><span
                                    class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_10_64">Department
                                Store
                                Card</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_64" min="0" name="ds_card"
                                    onchange="changeValue(this.value,'ds_card')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_63">Credit
                                Card
                                1</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_63" min="0" name="cc_1"
                                    onchange="changeValue(this.value,'cc_1')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_70">Credit
                                Card
                                2</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_70" min="0" name="cc_2"
                                    onchange="changeValue(this.value,'cc_2')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_71">Credit
                                Card
                                3</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_71" min="0" name="cc_3"
                                    onchange="changeValue(this.value,'cc_3')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_72">Credit
                                Card
                                4</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_72" min="0" name="cc_4"
                                    onchange="changeValue(this.value,'cc_4')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_73">Credit
                                Card
                                5</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_73" min="0" name="cc_5"
                                    onchange="changeValue(this.value,'cc_5')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_74">Credit
                                Card
                                6</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_74" min="0" name="cc_6"
                                    onchange="changeValue(this.value,'cc_6')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_10_75">Credit
                                Card
                                7</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_75" min="0" name="cc_7"
                                    onchange="changeValue(this.value,'cc_7')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_10_67">Other</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_10_67" min="0" name="l_cc_other"
                                    onchange="changeValue(this.value,'l_cc_other')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-3 mb-3 ml-3">

                        <h5>Savings / Investment</h5>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_9_56">Savings
                                Accounts</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_56" min="0" name="savings"
                                    onchange="changeValue(this.value,'savings')" value="0.00"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_9_57">401(k)</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_57" min="0" name="s_i_401"
                                    onchange="changeValue(this.value,'s_i_401')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_9_58">Stocks</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_58" min="0" name="stocks"
                                    onchange="changeValue(this.value,'stocks')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label" for="client_budget_c_9_59">Mutual
                                Funds</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_59" min="0" name="mutual_funds"
                                    onchange="changeValue(this.value,'mutual_funds')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_9_60">Bonds</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_60" min="0" name="bonds"
                                    onchange="changeValue(this.value,'bonds')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_9_61">Ira(s)</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_61" min="0" name="ira"
                                    onchange="changeValue(this.value,'ira')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_9_62">Other</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_9_62" min="0" name="s_i_other"
                                    onchange="changeValue(this.value,'s_i_other')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">

                        <h5>Food</h5>

                        <div class="mb-3"><label class="form-label"
                                for="client_budget_c_3_24">Groceries</label>
                            <div class="input-group"><span class="input-group-text">$</span><input
                                    id="client_budget_c_3_24" min="0" name="groceries"
                                    onchange="changeValue(this.value,'groceries')" value="0"
                                    inputmode="numeric" pattern="[0-9]*" class="form-control"
                                    type="number"><span class="input-group-text">.00</span></div>
                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-lg-4 mb-3">

                        <div class="card bg-light text-center">

                            <h5 class="card-header">Total Monthly Net Income</h5>

                            <h3 class="card-body">

                                <span id="total_income">$8.33</span>

                                <input type="hidden" id="total_income_input" value="8.33"
                                    name="total_income">

                            </h3>

                        </div>

                    </div>

                    <div class="col-lg-4 mb-3">

                        <div class="card bg-light text-center">

                            <h5 class="card-header">Total Monthly Expenses</h5>

                            <h3 class="card-body">

                                <span id="total_expenses">$0.00</span>

                                <input type="hidden" id="total_expenses_input" value="0.00"
                                    name="total_expenses">

                            </h3>

                        </div>

                    </div>

                    <div class="col-lg-4 mb-3">

                        <div class="card bg-light text-center">

                            <h5 class="card-header">Amount You Can Save Monthly</h5>

                            <h3 class="card-body">

                                <span id="total_savings">$8.33</span>

                                <input type="hidden" id="total_savings_input" value="8.33"
                                    name="total_savings">

                                <span id="total_savings_percent" style="color: green;">(100%)</span>

                            </h3>

                        </div>

                    </div>

                </div>


                <!--<a href="client_budget_calculator1">-->
                <!--<button type="button" id="calculate" class="btn btn-secondary">-->
                <!--  Re-Calculate Budget <i class="fas fa-calculator" title="Calculate"></i>-->
                <!--</button></a>-->



                <h3 class="alert alert-danger text-center text-dark my-5">

                    You should try to save at least 20% of your Monthly Net Income, if possible.

                </h3>



                <input type="hidden" name="progress" value="40">


                <a href="client_debt_structure" class="btn btn-primary">BACK</a>
                <input type="submit" name="commit_budget_cal" value="CONTINUE" class="btn btn-primary"
                    data-disable-with="CONTINUE">


            </form>

        </article>



        <div class="progress my-5" style="height:1.5rem;">

            <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

            <div class="progress-bar bg-success" role="progressbar" style="width: 40.0%"
                aria-valuemin="0" aria-valuemax="16" aria-valuenow="16"></div>

        </div>
        <script>
            const inputField = document.querySelector('input[name="values"]');
            inputField.addEventListener('input', () => {
                const value = inputField.value;
                const isValid = /^\d+,\d+,\d+$/.test(value);
                if (!isValid) {
                    inputField.setCustomValidity('Please enter three values separated by commas');
                } else {
                    inputField.setCustomValidity('');
                }
            });
        </script>


        <script>
            (function() {

                function colorOf(n) {

                    const treshold = 20;

                    return treshold > n ? 'red' : 'green';

                }

                Number.prototype.ToMoney = function() {

                    var val = this == "" || this == null ? parseFloat(0) : this;

                    val = val.toFixed(2);

                    val = val.replace(".", ".");

                    return val;

                };

                function calcData() {

                    const months = 12;

                    const percent = 100;



                    let totalai = 0;

                    document.querySelectorAll('input[id^="client_budget_i"]')

                        .forEach(el => totalai = totalai + parseInt(el.value) || 0);



                    let totalme = 0;

                    document.querySelectorAll('input[id^="client_budget_c"]')

                        .forEach(el => {
                            if (el.value == '') el.value = 0;
                            totalme = totalme + parseInt(el.value)
                        });



                    const totalmi = totalai / months;

                    const totalms = totalmi - totalme;

                    const totalsp = parseInt(totalms / (totalmi / percent)) || 0;



                    var total_income = document.getElementById('total_income');

                    total_income.innerText = '$' + totalmi.ToMoney();

                    var total_income_input = document.getElementById('total_income_input');

                    total_income_input.value = totalmi.ToMoney();



                    var total_expenses = document.getElementById('total_expenses');

                    total_expenses.innerText = '$' + totalme.ToMoney();

                    var total_expenses_input = document.getElementById('total_expenses_input');

                    total_expenses_input.value = totalme.ToMoney();



                    var total_savings = document.getElementById('total_savings');

                    total_savings.innerText = '$' + totalms.ToMoney();

                    var total_savings_input = document.getElementById('total_savings_input');

                    total_savings_input.value = totalms.ToMoney();



                    var total_savings_percent = document.getElementById('total_savings_percent');

                    total_savings_percent.innerText = '(' + totalsp + '%)';



                    var total_savings_percent = document.getElementById('total_savings_percent');

                    total_savings_percent.style.color = colorOf(totalsp);

                }

                document.querySelectorAll('input[id^="client_budget_i"], input[id^="client_budget_c"]').forEach(
                    el => {

                        el.addEventListener('focus', function(event) {

                            this.select();

                        });

                        el.addEventListener('change', function(event) {

                            event.preventDefault();

                            calcData();


                        });

                        el.addEventListener('keyup', function(event) {

                            event.preventDefault();

                            calcData();

                        });
                        window.addEventListener('load', function(event) {



                            calcData();

                        });

                    });

                document.querySelector('button#calculate')

                    .addEventListener('click', function(event) {

                        event.preventDefault();

                        calcData();

                    });

                calcData();

            })();
        </script>

    </div>


</main>
@endsection