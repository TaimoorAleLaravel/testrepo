
<!DOCTYPE html>

<html lang="en">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">




    <title>Clients - CC Counseling</title>

</head>
<style>
    
.navbar-nav.ml-auto.text-uppercase .dropdown-menu.dropdown-menu-left {
    right: auto !important;
    left: 0;
}

html,
body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
}

body .navbar-nav .nav-item .nav-link {
    font-size: 90%;
    color: #fff;
}

body #mainNav .navbar-nav .nav-item .nav-link {
    font-family: -apple-system, BlinkMacSystemFont, 'Nunito', sans-serif, Montserrat, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

.head {
    font-family: 'Nunito', sans-serif !important;
    position: relative !important;
    padding: 35px 0 !important;
    color: #FFFFFF !important;
    font-size: 28px;
    font-weight: 600 !important;
    outline: none !important;
    transition: .5s !important;
}

.end1 {
    padding-top: 20px !important;
    padding-bottom: 10px !important;
    padding-left: 30px !important;
    padding-right: 30px !important;
    color: white !important;
}

.firstlogo {
    font-size: 28px;
}

@media (max-width: 318px) {

    /* CSS declarations for extra small devices */
    .firstlogo {
        font-size: 17px;
    }
}

@media (max-width: 411px) {

    /* CSS declarations for extra small devices */
    .firstlogo {
        font-size: 20px;
    }
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
    color: #0d6efd;
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.flex {
    display: flex !important;
    flex-flow: nowrap;
}

li {
    display: list-item;
    text-align: -webkit-match-parent;
}

.row>* {
    flex-shrink: 0;
    width: 100%;
    /* max-width: 100%; */
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

body p {
    line-height: 1.75;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

.font {
    font-size: 1.25rem;
    font-weight: 300;
}

.alert {
    position: relative;
    padding: 1rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-info {
    color: #055160;
    background-color: #cff4fc;
    border-color: #b6effb;
}

.d-grid {
    display: grid !important;
}

.gap-2 {
    gap: 0.5rem !important;
}

/* body .btn {
font-family: Montserrat, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
font-weight: 400;
}
h3, .h3 {
font-size: calc(1.3rem + 0.6vw);
}
.btn-lg, .btn-group-lg>.btn {
padding: 0.5rem 1rem;
font-size: 1.25rem;
border-radius: 0.3rem;
}
.btn {
display: inline-block;
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
user-select: none;
background-color: transparent;
border: 1px solid transparent;
padding: 0.375rem 0.75rem;
font-size: 1rem;
border-radius: 0.25rem;
transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
} */

a:hover {
    text-decoration: none;
}

.footer_color {
    background: black;
}

body>footer {
    background-color: #d3d3d3;
    font-size: 0.8rem;
    margin-top: 3rem;
    padding: 1rem;
}

footer {
    display: block;
}

.min_height_50 {
    min-height: 50vh;
}

.row {
    width: 100%;
}

</style>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000b57">
    <div class="container-fluid">

        <a class="navbar-brand" href="../index.php">
            <img src="{{ asset('assets/logo.png') }}" width="35" height="35" class="d-inline-block align-top"
                alt="">
            <strong> <span class="text-light lead p-2 font-weight-normal"> Complete Credit
                    Counseling</span></strong>
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
                        <a class="dropdown-item" href="/admin/clients_online">Online</a>
                        <a class="dropdown-item" href="/admin/clients_chat">Chat</a>
                        <a class="dropdown-item" href="/admin/clients_eligible_to_chat">Eligible to chat</a>
                        <a class="dropdown-item" href="/admin/clients_mine">Mine</a>
                        <a class="dropdown-item" href="/admin/clients_paid">Paid</a>
                        <a class="dropdown-item" href="/admin/clients_unpaid">UnPaid</a>
                        <a class="dropdown-item" href="/admin/clients_learning">Learning</a>
                        <a class="dropdown-item" href="/admin/clients_awaiting">Awaiting</a>
                        <a class="dropdown-item" href="/admin/clients_all">All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown" href="/admin/upload_certificate.php" id="navbarDropdown"
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.logout', ['locale' => 'en'])}}">Logout</a>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</nav>

<div>
    <h5 class="text-center bg-dark text-white">Customer Service: &nbsp;(833) 367-7130</h5>
</div>