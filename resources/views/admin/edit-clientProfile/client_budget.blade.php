@extends('layout.app')

@section('main')
    <main class="bg-white min-vh-100">
        <div class="container">
            <article class="course budget">


                <div class="mt-3">
                    <span class=" h2 text-success font-weight-normal">Edit Budget Information</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Edit Budget Information</a></li>
                        </ol>
                    </nav>
                </div>





                <form action="{{ route('admin.editbudgetInfo', ['locale' => app()->getLocale()]) }}" accept-charset="UTF-8" method="post">
                    @csrf
                    <div class="row income">
                        <input type="hidden" name="client_id" value="{{ $id }}">

                        <p class="lead">Net income / take home pay after deducting all taxes (federal, state, local) and
                            social security.</p>

                        <div class="col-md-5 col-lg-4 mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_i_1">Client annual net income</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_i_1" min="0" name="net_income" value="{{$budget->net_income}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 mb-3 ml-2">
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_i_2">Client spouse's net income, if
                                    available</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_i_2" min="0" name="spouse_net_income" value="{{$budget->spouse_net_income}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row expenses">


                        <div class="col-md-3 col-lg-4 mb-3">
                            <h5>Housing</h5>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_11">Mortgage or rent</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_11" min="0" name="rent" value="{{$budget->rent}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_12">Condo</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_12" min="0" name="condo" value="{{$budget->condo}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_13">Maintenance</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_13" min="0" name="maintenance" value="{{$budget->maintenance}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_14">Property taxes</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_14" min="0" name="pro_tax" value="{{$budget->pro_tax}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_15">Insurance</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_15" min="0" name="housing_insurance"
                                    value="{{$budget->housing_insurance}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                        type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_1_16">Furniture and appliances</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_1_16" min="0" name="fur_app" value="{{$budget->fur_app}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
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
                                    <input id="client_budget_c_5_32" min="0" name="doctor" value="{{$budget->doctor}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_5_33">Dentist(s)</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_5_33" min="0" name="dentist" value="{{$budget->dentist}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_5_34">Medications</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_5_34" min="0" name="medications" value="{{$budget->medications}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_5_35">Insurance</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_5_35" min="0" name="health_insurance"
                                    value="{{$budget->health_insurance}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                        type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 mb-3 ml-4">
                            <h5>Education</h5>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_6_36">Tuition/school fees</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_6_36" min="0" name="school_fee" value="{{$budget->school_fee}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_6_37">Books and supplies</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_6_37" min="0" name="books" value="{{$budget->books}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_6_38">School activities</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_6_38" min="0" name="school_activities"
                                    value="{{$budget->school_activities}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
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
                                    <input id="client_budget_c_2_17" min="0" name="gas"  value="{{$budget->gas}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_18">Electricity</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_18" min="0" name="electricity" value="{{$budget->electricity}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_19">Water</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_19" min="0" name="water" value="{{$budget->water}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_20">Garbage</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_20" min="0" name="garbage" value="{{$budget->garbage}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_21">Sewer</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_21" min="0" name="sewer" value="{{$budget->sewer}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_22">Telephone</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_22" min="0" name="telephone" value="{{$budget->telephone}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_23">Cell phone</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_23" min="0" name="cell_phone" value="{{$budget->cell_phone}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_68">Cable television</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_68" min="0" name="cable" value="{{$budget->cable}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_2_69">Internet</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_2_69" min="0" name="internet" value="{{$budget->internet}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3 ml-3">
                            <h5>Transportation</h5>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_25">Automobile payment</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_25" min="0" name="automobile" value="{{$budget->automobile}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_26">Licensing</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_26" min="0" name="license" value="{{$budget->license}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_27">Insurance</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_27" min="0" name="transport_insurance"
                                    value="{{$budget->transport_insurance}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                        type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_28">Maintenance</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_28" min="0" name="transport_maintenance"
                                    value="{{$budget->transport_maintenance}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                        type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_29">Gasoline</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_29" min="0" name="gasoline" value="{{$budget->gasoline}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_30">Public transportation</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_30" min="0" name="public_trans" value="{{$budget->public_trans}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_4_31">Parking / tolls</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_4_31" min="0" name="parking_tolls" value="{{$budget->parking_tolls}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 ml-3">
                            <h5>Entertainment</h5>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_39">Restaurant meals</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_39" min="0" name="restaurent" value="{{$budget->restaurent}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_40">Gifts</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_40" min="0" name="gifts" value="{{$budget->gifts}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_41">Newspapers and magazines</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_41" min="0" name="newspaper" value="{{$budget->newspaper}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_42">Movies and concerts</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_42" min="0" name="movies_concerts"
                                    value="{{$budget->movies_concerts}}" inputmode="numeric" pattern="[0-9]*" class="form-control"
                                        type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_43">Vacations</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_43" min="0" name="vacations" value="{{$budget->vacations}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="client_budget_c_7_44">Hobbies</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input id="client_budget_c_7_44" min="0" name="hobbies" value="{{$budget->hobbies}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
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
                                    <input id="client_budget_c_8_45" min="0" name="clothing" value="{{$budget->clothing}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_54">Laundry/dry
                                    cleaning</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_54" min="0" name="laundery" value="{{$budget->laundery}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_53">Membership
                                    dues</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_53" min="0" name="membership"  value="{{$budget->membership}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_52">Donations</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_52" min="0" name="donations"  value="{{$budget->donations}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_51">Allowances</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_51" min="0" name="allowance"  value="{{$budget->allowance}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_50">Child
                                    support</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_50" min="0" name="child_support"  value="{{$budget->child_support}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_49">Childcare</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_49" min="0" name="child_care" value="{{$budget->child_care}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_48">Pets</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_48" min="0" name="pets" value="{{$budget->pets}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_47">Cosmetics</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_47" min="0" name="cosmetics" value="{{$budget->cosmetics}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_46">Haircuts</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_46" min="0" name="haircuts" value="{{$budget->haircuts}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_8_55">Other</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_8_55" min="0" name="personal_other" value="{{$budget->personal_other}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3 ml-3">
                            <h5>Loans and Credit Cards</h5>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_66">Student
                                    loan</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_66" min="0" name="std_loan" value="{{$budget->std_loan}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_65">Gas card</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_65" min="0" name="gas_card" value="{{$budget->gas_card}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_64">Department store
                                    card</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_64" min="0" name="ds_card" value="{{$budget->ds_card}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_63">Credit card
                                    1</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_63" min="0" name="cc_1" value="{{$budget->cc_1}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_70">Credit card
                                    2</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_70" min="0" name="cc_2" value="{{$budget->cc_2}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_71">Credit card
                                    3</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_71" min="0" name="cc_3" value="{{$budget->cc_3}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_72">Credit card
                                    4</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_72" min="0" name="cc_4" value="{{$budget->cc_4}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_73">Credit card
                                    5</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_73" min="0" name="cc_5" value="{{$budget->cc_5}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_74">Credit card
                                    6</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_74" min="0" name="cc_6" value="{{$budget->cc_6}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_75">Credit card
                                    7</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_75" min="0" name="cc_7" value="{{$budget->cc_7}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_10_67">Other</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_10_67" min="0" name="l_cc_other" value="{{$budget->l_cc_other}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 ml-3">
                            <h5>Savings / Investment</h5>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_56">Savings
                                    accounts</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_56" min="0" name="savings" value="{{$budget->savings}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_57">401(k)</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_57" min="0" name="s_i_401" value="{{$budget->s_i_401}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_58">Stocks</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_58" min="0" name="stocks" value="{{$budget->stocks}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_59">Mutual funds</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_59" min="0" name="mutual_funds" value="{{$budget->mutual_funds}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_60">Bonds</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_60" min="0" name="bonds" value="{{$budget->bonds}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_61">Ira(s)</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_61" min="0" name="ira" value="{{$budget->ira}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_9_62">Other</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_9_62" min="0" name="s_i_other" value="{{$budget->s_i_other}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <h5>Food</h5>
                            <div class="mb-3"><label class="form-label" for="client_budget_c_3_24">Groceries</label>
                                <div class="input-group"><span class="input-group-text">$</span><input
                                        id="client_budget_c_3_24" min="0" name="groceries" value="{{$budget->groceries}}"
                                        inputmode="numeric" pattern="[0-9]*" class="form-control" type="number"><span
                                        class="input-group-text">.00</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="card bg-light text-center">
                                <h5 class="card-header">Total monthly net income</h5>
                                <h3 class="card-body">
                                    <span id="total_income">$76.17</span>
                                    <input type="hidden" id="total_income_input" value="{{$budget->total_income}}" name="total_income">
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card bg-light text-center">
                                <h5 class="card-header">Total monthly expenses</h5>
                                <h3 class="card-body">
                                    <span id="total_expenses">$3065.00</span>
                                    <input type="hidden" id="total_expenses_input" value="{{$budget->total_expenses}}"
                                        name="total_expenses">
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card bg-light text-center">
                                <h5 class="card-header">Amount can save monthly</h5>
                                <h3 class="card-body">
                                    <span id="total_savings">$-2988.83</span>
                                    <input type="hidden" id="total_savings_input" value=""
                                        name="total_savings">
                                    <span id="total_savings_percent" style="color: red;">(-3924%)</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="calculate" class="btn btn-secondary" style="display: none;">
                        Re-Calculate Budget <i class="fas fa-calculator" title="Calculate"></i>
                    </button>


                    <input type="submit" name="commit_budget_cal" value="SAVE" class="btn btn-primary"
                        data-disable-with="EDIT">
                </form>
                <br><br>
            </article>



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
                            .forEach(el => totalme = totalme + parseInt(el.value) || 0);

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
                    document.querySelectorAll('input[id^="client_budget_i"], input[id^="client_budget_c"]').forEach(el => {
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
