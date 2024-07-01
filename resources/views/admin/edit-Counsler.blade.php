<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>New Registrations - CC Counseling</title>

</head>

<body>

    <style>
body {
    display: flex;
    flex-direction: column;
}

.container {
    flex-grow: 1;
}

.end1 {
    flex-shrink: 0;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000b57">
    <div class="container-fluid">

        <a class="navbar-brand" href="../index.php">
            <img src="../img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
            <strong> <span class="text-light lead p-2 font-weight-normal"> Complete Credit Counseling</span></strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClients" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clients
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownClients">
                        <a class="dropdown-item" href="/counselor/clients_online">Online</a>
                        <a class="dropdown-item" href="/counselor/clients_chat">Chat</a>
                        <a class="dropdown-item" href="/counselor/clients_eligible_to_chat">Eligible to chat</a>
                        <a class="dropdown-item" href="/counselor/clients_mine">Mine</a>
                        <a class="dropdown-item" href="/counselor/clients_paid">Paid</a>
                        <a class="dropdown-item" href="/counselor/clients_unpaid">UnPaid</a>
                        <a class="dropdown-item" href="/counselor/clients_learning">Learning</a>
                        <a class="dropdown-item" href="/counselor/clients_awaiting">Awaiting</a>
                        <a class="dropdown-item" href="/counselor/clients_all">All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown" href="/counselor/upload_certificate.php" id="navbarDropdown"
                        role="button" target="_blank">
                        CERTIFICATES
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLawfirms" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lawfirms
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownLawfirms">
                        <a class="dropdown-item" href=""></a>
                        <a class="dropdown-item" href=""></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=""></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Attorneys</a>
                </li>

                <li class="nav-item">
                    <a href="payments.php" class="nav-link" target="_blank">PAYMENTS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccount" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAccount">

                        <a class="dropdown-item" href="../counselor/login.php">Logout</a>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</nav>

<div>
    <h5 class="text-center bg-dark text-white">Customer Service: &nbsp;(833) 367-7130</h5>
</div>
    <div class="container mt-4">

        


        <header class="mt-3">



            <span class="lead h2 text-success font-weight-normal" style="font-size:3vw">Counselor Registration</span>



            <nav aria-label="breadcrumb">



                <ol class="breadcrumb mt-3">



                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>



                    <li class="breadcrumb-item"><a href="">Counselor Registration</a></li>



                </ol>



            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <style>
        .search-container {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            max-height: 200px;
            /* Adjust the height as needed */
            overflow-y: auto;
        }

        dropdown-item .dropdown-menu {
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #f9f9f9;
            list-style-type: none;
            padding: 0;
            margin: 0;
            border: 1px solid #ddd;
        }

        .dropdown-item {
            padding: 8px 12px;
            cursor: pointer;
            border-bottom: 10x solid #f1f1f1;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
    <div class="collapse navbar-collapse" id="navbarColor02">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">

                <a class="nav-link" href="clients_online">Online<span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_chat">Chat</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_eligible_to_chat">Eligible to chat</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_mine">Mine</a>

            </li>
            <li class="nav-item">

                <a class="nav-link" href="clients_paid">Paid</a>

            </li>
            <li class="nav-item">

                <a class="nav-link" href="clients_unpaid">Unpaid</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_learning">Learning</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_awaiting">Awaiting</a>

            </li>

            <!-- <li class="nav-item">

                <a class="nav-link" href="clients_undelieverd">Undelieverd</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_locked">Locked</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="clients_hidden">Hidden</a>

            </li> -->

            <li class="nav-item">

                <a class="nav-link" href="clients_all">All</a>

            </li>

        </ul>

        <form class="form-inline">
            <div id="btn-group" class="btn-group">
                <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" style="display: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu mt-4" id="searchResults">

                </div>
            </div>
            <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-outline-light my-2 my-sm-0" id="searchButton">Search</button>

            <div id="btn-group" class="btn-group">

            </div>
            <!-- <button class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle dropdown-toggle-split" id="searchButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search</button> -->

        </form>

    </div>


</nav>
<script>
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const searchResults = document.getElementById('searchResults');
    const btn_group = document.getElementById('btn-group');
    searchButton.addEventListener('click', performSearch);


    searchInput.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            performSearch(); // console.log('submit by enter press');
        }
    });

    function performSearch() {
        const searchTerm = searchInput.value;
        if (searchTerm.trim() !== '') {
            const xhr = new XMLHttpRequest();

            xhr.open('GET', '../common/search.php?q=' + searchTerm, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    displaySearchResults(response);
                } else {
                    console.error('Search request failed. Status: ' + xhr.status);
                }
            };

            xhr.send();
        } else {
            SearchTable.style.display = "none";
            if (defaultTable.style.display === "none") {
                defaultTable.style.display = "table";
            }
        }
    }

    const button = document.getElementById('filter_apply');
    button.addEventListener('click', performFilter);

    function performFilter() {
        const name = document.getElementById('lname').value;
        const date = document.getElementById('fdate').value;
        const payment = document.getElementById('payment').value;


        console.log(name);
        console.log(date);
        console.log(payment);
        if (name == null) {
            name = ' ';
        }
        if (date == null) {
            date = ' ';
        }
        if (payment == null) {
            payment = ' ';
        }
        const xhr = new XMLHttpRequest();

        xhr.open('GET', '../common/filterPaid.php?name=' + name + '&date=' + date + '&payment=' + payment, true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response === null) {
                    console.log('result is null');
                } else {
                    console.log(response);
                    displaySearchResults(response);
                }
            } else {
                console.error('Search request failed. Status: ' + xhr.status);
            }
        };
        xhr.send();
    }

    function displaySearchResults(results) {
        defaultTable = document.getElementById('defaultTable');
        SearchTable = document.getElementById('SearchTable');
        Default_counts = document.getElementById('Default_counts');
        search_counts = document.getElementById('search_counts');
        showData = document.getElementById('showData');
        showData.innerHTML = '';
        search_counts.innerHTML = '';

        if (Array.isArray(results) && results.length !== 0) {
            defaultTable.style.display = "none";
            Default_counts.style.display = "none";

            if (SearchTable.style.display === "none") {
                SearchTable.style.display = "table";
            }
            if (search_counts.style.display === "none") {
                search_counts.style.display = "block";
            }
               search_counts.innerHTML += '1 - '+ results.length;
               console.log(results.length);

            results.forEach(function(result, index) {
                result.fname + ' ' + result.mname + ' ' + result.lname
                var name;
                if (result.fname == null && result.mname == null && result.lname == null) {
                    name = 'n/a';
                }
                if (result.fname != null) {
                    name = result.fname + ' ';
                }
                if (result.mname != null) {
                    name += result.mname + ' ';
                }
                if (result.lname != null) {
                    name += result.lname + ' ';
                }
                if(result.fname2 != null || result.mname2 != null || result.lname2 != null){
                   name += ' and '+result.fname2+' '+result.mname2+' '+result.lname2;
                }

                if (result.attorny_id != null) {
                    att_fname = result.att_fname;
                } else {
                    att_fname = 'n/a';
                }
                if (result.state != null) {
                    state = result.state;

                } else {
                    state = 'n/a';

                }
                if (result.progress === null) {
                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 360deg,dodgerblue 0 235deg);"></div>';
                } else if (result.progress == '10.00') {
                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 336deg,dodgerblue 0 235deg);"></div>';
                } else if (result.progress == '15.00') {
                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 312deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "20.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 288deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "22.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 264deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "25.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 240deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "27.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 216deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "30.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 192deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "40.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 168deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "50.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 144deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "60.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 120deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "70.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 96deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "75.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 80deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "80.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 72deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "88.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 48deg,dodgerblue 0 235deg);"></div>';
                } else if ((result.progress) == "100.00") {

                    progress = '<div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 0deg,green 0 235deg);"></div>';
                }
                if (result.pkg === null) {
                    invoive = 'n/a';

                } else {
                    if (result.pkg == 1) {
                        invoive = '<div><img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/basic1.png"></div>' +
                            '<div style="padding-top:4px"><img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/credit_card.png"></div>' +
                            '<div style="padding-top:4px">$' + result.total_bill + '</div>';
                    } else if (result.pkg == 2) {

                        invoive = '<img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/regular.png">' +
                            '<div style="padding-top:4px"><img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/credit_card.png"></div>' +
                            '<div style="padding-top:4px">$ ' + result.total_bill + '</div>';

                    } else if (result.pkg == 3) {

                        invoive = '<div><img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/premium.png"></div>' +
                            '<div style="padding-top:3px"><img alt="Image: Basic Package" width="30" height="30" class="d-block" src="../img/credit_card.png"></div>' +
                            '<div style="padding-top:4px">$ ' + result.total_bill + '</div>';
                    }
                }
                resultItem = '<tr>' +
                    '<td>' + (index + 1) + '</td>' +
                    '<td>' + name + '<br><a href="../counselor/counselor_chat_with_client?client=' + result.client_id + '" target="_blank">' + result.client_email + '</a></td>' +
                    '<td>' + att_fname + '</td>' +
                    '<td></td>' +
                    '<td>' + state + '</td>' +
                    '<td><div style="display:flex; gap:5px">' + invoive + '</div></td>' +
                    '<td><center>' + progress + '</center></td>' +
                    '<td><div><a href="../counselor/counselor_chat_with_client?client=' + result.client_id + '"> <img alt="Image: Chat" width="30" height="30" class="d-block" src="../img/chat.png"></a></div></td>';
                showData.innerHTML += resultItem;
                // searchResults.classList.add('show');
                // btn_group.classList.add('show');
            });
        } else {
            SearchTable.style.display = "none";
            search_counts.style.display = "none";
            if (defaultTable.style.display === "none") {
                defaultTable.style.display = "table";
            }
            if (Default_counts.style.display === "none") {
                Default_counts.style.display = "block";
            }
            console.log("result not show")
        }
    }
</script>


            
        </header>

        <span class="lead h2 text-success" style="font-size:3vw">Counselor Registration</span>

        
        <form action="{{ route('admin.updatecounsler', ['id'=> $counselor->counselor_id , 'locale' => app()->getlocale()]) }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="{{$counselor->counselor_id}}">

                        <label class="form-label required" for="counselor_name">Counselor Name*</label>
                        <input minlength="4" autocomplete="username" required="required" class="form-control" value="{{ $counselor->counselor_name }}" type="text" name="counselor_name" id="counselor_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="counselor_email">Email address*</label>
                        <input minlength="5" autocomplete="username" required="required" class="form-control" value="{{ $counselor->counselor_email }}" type="email" name="counselor_email" id="counselor_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="counselor_password">Password*</label>
                        <input minlength="6" autocomplete="new-password" required="required" class="form-control" value="{{ $counselor->counselor_password }}" type="password" name="counselor_password" id="counselor_password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="counselor_password_confirmation">Password (confirm)*</label>
                        <input minlength="6" autocomplete="new-password" required="required" class="form-control" value="{{ $counselor->counselor_password }}" type="password" name="counselor_password_confirmation" id="counselor_password_confirmation">
                    </div>
                    <a class="btn btn-primary" href="#">Back</a>
                    <input type="submit" name="commit_res" value="Edit Counselor" class="btn btn-primary" data-disable-with="Create account">
                </div>
            </div>
        </form>
        
    </div>

    <br><br><br><br><br>

    <div class="end1" style="background-color: #000b57">
    <div class="f1" style="padding-bottom: 0px!important;">
        <div class="f2">
            <div class="holder">
                <section class="feature-block footerSection">
                    <div class="container">
                        <input type="hidden" id="EduHomeUrl" value="https://www.debtoredu.com/">
                        <div class="row rowbottom">
                            <footer class="responsive ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-3 text-white">
                                            <p class="mt-0">
                                                COMPLETE CREDIT COUNSELING INC. 
                                                Approval does not endorse or assure the quality of an Agency's services.
                                                <!--Our Credit Counseling Program is-->

                                                <!--<a href="#"><//?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 's') ? 'aprobado en TODOS los estados y territorios de EE. UU.' : 'approved in ALL U.S. States and Territories' ?></a>-->
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 text-white">
                                            Copyright ©2022 COMPLETE CREDIT COUNSELING INC. All rights reserved.
                                            <br>
                                            Complete Credit Counseling is a Trademark of COMPLETE CREDIT COUNSELING INC.
                                            701 Rte 70 W. Marlton, NJ 08053
                                            <br>
                                            (833) 367-7130
                                            <br>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e5e5e5e9f3e8f5e3eaefe8e1c6e5e9ebf6eae3f2e3e5f4e3e2eff2e5a8e5e9eb">[email&#160;protected]</a>
                                        </div>
                                                                                    <ul class="list-inline">
                                                <li class="list-inline-item"><a href="../client/client_login">Client</a></li>
                                                <li class="list-inline-item"><a href="../counselor/login">Counselor</a></li>
                                                <li class="list-inline-item"><a href="../attorney/attorney_login.php">Attorney</a></li>
                                                <li class="list-inline-item"><a href="../admin/admin_login">Admin</a></li>
                                            </ul>
                                                                            </div>
                                </div>
                            </footer>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>