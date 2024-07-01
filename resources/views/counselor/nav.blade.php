<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000b57">
        <div class="container-fluid">

            <a class="navbar-brand" href="../index.php">
            <img src="logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
            <strong> <span class="text-light lead p-2 font-weight-normal"> Complete Credit Counseling</span></strong>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClients" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                        <a class="nav-link dropdown" href="/admin/upload_certificate.php" id="navbarDropdown" role="button" target="_blank">
                        CERTIFICATES
                    </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLawfirms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../client/client_login.php">Logout</a>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</body>
</html>