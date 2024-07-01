<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" media="screen"
        href="../client-103a43a6b0fd92fafb7fa52bf0d11e7b17224ed02246e57df4fcd9f9b0ded682.css">
    <title>New Registrations - CC Counseling</title>
    <style>
        #heading {
            padding: 5px;
            box-shadow: 0px 0px 5px 0px #888888;
            color: green;
            background-color: lightblue;
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
</head>

<body>

    <script>
        function analysis() {
            var x = document.getElementById("myAnalysis");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }



        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }


        function selectMe1() {
            let text = document.getElementById("me1").textContent;
            document.getElementById("message_content").value = text;
            saveData();
        }


        function selectMe2() {
            let text = document.getElementById("me2").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe3() {
            let text = document.getElementById("me3").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe4() {
            let text = document.getElementById("me4").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe5() {
            let text = document.getElementById("me5").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe6() {
            let text = document.getElementById("me6").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe7() {
            let text = document.getElementById("me7").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe8() {
            let text = document.getElementById("me8").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe9() {
            let text = document.getElementById("me9").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe10() {
            let text = document.getElementById("me10").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe11() {
            let text = document.getElementById("me11").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe12() {
            let text = document.getElementById("me12").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe13() {
            let text = document.getElementById("me13").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe14() {
            let text = document.getElementById("me14").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe15() {
            let text = document.getElementById("me15").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe16() {
            let text = document.getElementById("me16").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe17() {
            let text = document.getElementById("me17").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe18() {
            let text = document.getElementById("me18").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe19() {
            let text = document.getElementById("me19").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe20() {
            let text = document.getElementById("me20").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMe21() {
            let text = document.getElementById("me21").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }
        // spanish
        function selectMeS1() {
            let text = document.getElementById("meS1").textContent;
            document.getElementById("message_content").value = text;
            saveData();
        }


        function selectMeS2() {
            let text = document.getElementById("meS2").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS3() {
            let text = document.getElementById("meS3").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS4() {
            let text = document.getElementById("meS4").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS5() {
            let text = document.getElementById("meS5").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS6() {
            let text = document.getElementById("meS6").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS7() {
            let text = document.getElementById("meS7").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS8() {
            let text = document.getElementById("meS8").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS9() {
            let text = document.getElementById("meS9").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS10() {
            let text = document.getElementById("meS10").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS11() {
            let text = document.getElementById("meS11").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS12() {
            let text = document.getElementById("meS12").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS13() {
            let text = document.getElementById("meS13").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS14() {
            let text = document.getElementById("meS14").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS15() {
            let text = document.getElementById("meS15").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS16() {
            let text = document.getElementById("meS16").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS17() {
            let text = document.getElementById("meS17").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS18() {
            let text = document.getElementById("meS18").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS19() {
            let text = document.getElementById("meS19").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS20() {
            let text = document.getElementById("meS20").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }

        function selectMeS21() {
            let text = document.getElementById("meS21").textContent;
            document.getElementById("message_content").value = text;
            saveData();

        }
    </script>
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
                <img src="../img/logo.png" width="35" height="35" class="d-inline-block align-top"
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
    <main class="bg-white min-vh-100">
        <div class="container">
            <article class="course chat">

                <header class="mt-3">
                    <span class="lead h2 text-success font-weight-normal">Client Profile</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="">John Doe </a></li>
                        </ol>
                    </nav>
                </header>
                <input type="hidden" id="client" value="" name="">



                <div class="row">
                    <div class="col-lg-5 mt-3 ml-3">
                        <span class="lead h2  font-weight-normal" style="font-size:2vw">{{$clientProfile->fname}} {{$clientProfile->lname}}</span>
                        <br><br><img src="{{$clientProfile->profile_img}}" alt="" width="300px"
                            height="300px">
                        {{-- <br><br><span class="lead  " style="font-size:2vw">{{$clientProfile->fname}} {{$clientProfile->lname}}</span> --}}
                        <br><span class="lead  " style="font-size:2vw">SSN # {{$clientProfile->ss_num}}</span><br>
                    </div>


                    <div class="col-lg-6 mb-3 mr-3">
                        <ul id="chat" class="live mb-3"
                            style="overflow-y: scroll; height:400px;background-color:#F0FFF0">
                            <!-- here -->

                        </ul>
                        <input type="hidden" name="" value="181" id="client_id">

                        <form action="process_budget_review.php?client_id=181" method="POST">

                            <div class="row mb-3">
                                <div class="mb-3">
                                    <input type="button" name="commit_review"
                                        value="Review budget and issue certificate(s)" onclick="analysis()"
                                        class="btn btn-warning"
                                        data-disable-with="Review budget and issue certificate(s)">
                                </div>
                                <div style="background-color:#F6E4D1 ;display:none" id="myAnalysis"
                                    class="pl-3 pr-3 pb-2">
                                    <div class="mt-2">
                                        <label>Counselor's notes</label>
                                        <textarea rows="5" class="form-control" name="review_msg" id="review_msg">&lt;p&gt;Car loan debt
Credit card debt
Medical debt
1st Mortgage debt
2nd Mortgage debt
Student loan debt
Tax debt
Unsecured loan debt
I recommend to create a monthly spending chart to keep track of your monthly expenses and
to help you to identify areas in which to reduce costs. You can start by downloading this app for smartphones called Mint which helps you to create a budget, pay bills,
and track expenses. It even tips on how to improve your credit score. For other money saving tips I recommend visiting these websites, www.frugal-mama.com or www.feedthepig.org. You can reduce the cost of your utilities by checking for bundling services or even by unplugging your electrical devices when not in use. You can also consider investing in energy-efficient appliances to help reduce
your electric bill. You can also get rid of cable and instead just use Netflix for only $6.99/month.&lt;/p&gt;</textarea>
                                    </div>
                                    <div class="mt-2 ml-4">
                                        <input type="hidden" class="form-check-input" name="advised"
                                            value="0">
                                        <input type="checkbox" class="form-check-input" name="advised"
                                            id="advised" value="1">
                                        <label for="advised" class="form-check-label">Counseling is advised</label>
                                    </div>
                                    <div class="mt-2 mb-2">
                                        <input type="submit" name="commit_analysis"
                                            value="Save budget analysis and generate PDF" class="btn btn-primary "
                                            id="commit_analysis"
                                            data-disable-with="Save budget analysis and generate PDF">
                                    </div>
                                </div>
                                <div class="d-none">
                                    <div id="pdf_content"></div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function download() {

                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "../process/pdf_generater.php?client=" + client_id + "", true);
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        var data = JSON.parse(xhr.responseText);
                                        console.log(data);
                                    }
                                };
                                xhr.send();
                            }
                        </script>
                        <input type="hidden" id="client_idd" name="client_id" value="181">
                        <form id="new-message">


                            <div class="row">
                                <div class="col-sm-9 mb-2">
                                    <div class="mb-3">
                                        <input type="hidden" name="client" value="181">
                                        <textarea rows="3" class="form-control" id="message_content"></textarea><small class="form-text text-muted">Hit enter to
                                            submit message</small>
                                    </div>
                                </div>
                                <div class="col-sm-2 mb-3 ml-3">
                                    <div class="d-sm-grid gap-2 text-sm-end">
                                        <input
                                            style="margin-bottom:10px; margin-top:5px; padding-right:20px; padding-left:20px"
                                            type="submit" value="Send" class="btn btn-primary btn-sm"
                                            id="chatsubmit" data-disable-with="Send">
                                        <a class="btn btn-secondary btn-sm mt-1 text-light"
                                            onclick="myFunction()">Prompter</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function getChatMessages() {
                                client_id = document.getElementById("client_idd").value;
                                // console.log(client_id);

                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "../process/process_get_chat.php?client=" + client_id + "", true);
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        var data = JSON.parse(xhr.responseText);
                                        var list = document.getElementById("chat");
                                        list.innerHTML = '';
                                        data.forEach(msg => {
                                            if (msg.sender == 'client') {
                                                var li = '<li class="mt-2 text-primary  mb-1" >' +
                                                    ' <small>' +
                                                    msg.dated +
                                                    '</small>' +
                                                    '<small><a class="text-danger p-1" href="delete_chat.php?msg_id=' + msg.msg_id +
                                                    '&client_id=' + client_id + '"><i class="fa-solid fa-trash"></i></a></small>' +
                                                    '<div>' +
                                                    msg.msg +
                                                    '</div>' +
                                                    '</li><br><br><br>';
                                            } else {
                                                var li = '<li class="mt-2  mb-1">' +
                                                    ' <small>' +
                                                    msg.dated +
                                                    '</small>' +
                                                    '<small><a class="text-danger p-1" href="delete_chat.php?msg_id=' + msg.msg_id +
                                                    '&client_id=' + client_id + '"><i class="fa-solid fa-trash"></i></a></small>' +
                                                    '<div>' +
                                                    msg.msg +
                                                    '</div>' +
                                                    '</li>';
                                            }
                                            list.innerHTML += li;
                                            var chatContainer = document.getElementById("chat");
                                            chatContainer.scrollTop = chatContainer.scrollHeight;
                                        });

                                    }
                                };
                                xhr.send();
                            }

                            setInterval(getChatMessages, 2000);

                            var form = document.getElementById("new-message");
                            var input = document.getElementById("message_content");
                            var submitButton = document.getElementById("chatsubmit");

                            input.addEventListener("keydown", function(event) {
                                if (event.key === "Enter") {
                                    event.preventDefault();
                                    saveData(); // console.log('submit by enter press');
                                }
                            });

                            form.addEventListener("submit", function(event) {
                                event.preventDefault();
                                saveData();
                            });
                            submitButton.addEventListener("click", function(event) {
                                event.preventDefault();
                                saveData();
                            });

                            function saveData() {
                                client_id = document.getElementById("client_idd").value;
                                var msg = input.value;
                                input.value = "";
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "process_conselor_sendChat.php", true);
                                xhr.setRequestHeader("Content-Type", "application/json");
                                var messageData = {
                                    client_id: client_id,
                                    message: msg
                                };
                                var jsonData = JSON.stringify(messageData);

                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                        if (xhr.status === 200) {
                                            console.log("Message sent successfully!");
                                            getChatMessages();
                                        } else {
                                            console.log("Failed to send message. Status code: " + xhr.status);
                                        }
                                    }
                                };

                                xhr.send(jsonData);
                            }
                        </script>
                    </div>
                </div>








                <div class="row mt-3">
                    <div class="col">
                        <div id="" class="m-2 card h-100" data-name="reasons">
                            <div class="card-header">
                                <h5>Reasons for Counseling</h5>
                            </div>
                            <div class="card-body">
                                @if ($reasons)


                                    <span>
                                        <ul>
                                            @foreach ($reasons as $reason)
                                                <li>{{ $reason }}</li>
                                            @endforeach
                                        </ul>
                                    </span>
                                @else
                                    <span> Not Enogh Data </span>
                                @endif
                                <br><br>
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_reason', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.client_reason', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 " data-name="debt_strcuture">
                            <div class="card-header">
                                <h5>Debt Structure</h5>
                            </div>
                            <div class="card-body">
                                @if ($debtStructure)
                                    <div style="border-bottom: 1px solid gray;">
                                        <span>Car loan debt</span>
                                        <span class="float-right">$ {{ $debtStructure->cc_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Credit card debt</span>
                                        <span class="float-right">${{ $debtStructure->sl_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Medical debt</span>
                                        <span class="float-right">${{ $debtStructure->med_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>1st Mortgage debt</span>
                                        <span class="float-right">${{ $debtStructure->mort1_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>2nd Mortgage debt</span>
                                        <span class="float-right">${{ $debtStructure->mort2_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Student loan debt</span>
                                        <span class="float-right">${{ $debtStructure->sl_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Tax debt</span>
                                        <span class="float-right">${{ $debtStructure->tax_debt }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Unsecured loan debt</span>
                                        <span class="float-right">${{ $debtStructure->ul_debt }}</span>
                                    </div>
                                @else
                                <span>Course Not Start Yet</span>
                                @endif
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_debtStructure', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.client_debtStructure', ['locale' => app()->getLocale()]) }}">edit
                                        information</a> --}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 " data-name="payment">
                            <div class="card-header">
                                <h5>Debt-to-Income Ratio</h5>
                            </div>
                                
                           
                            <div class="card-body">
                                @if ($budget)
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Total Expenses</span>
                                        <span class="float-right">{{ $budget->total_expenses }}</span>
                                    </div>
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Total Income</span>
                                        <span class="float-right">{{ $budget->total_income }}</span>
                                    </div>
                                    @php
                                        $dtiRatio = ($budget->total_expenses / $budget->total_income) * 100;
                                    @endphp
                                    <div style="border-bottom: 1px solid gray;" class="mt-2">
                                        <span>Debt-to-Income ratio</span>
                                        <span class="float-right">{{ number_format($dtiRatio, 2) }}%</span>
                                    </div>
                                @else
                                    <span>Not Enough Data</span>
                                @endif
                            </div>
                            
                            <div class="card-footer">
                                <h5>
                                    <form
                                    action="{{ route('counsler.edit.client_ratio', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                    method="GET" class="email-form">
                                    @csrf
                                    <input type="hidden" name="id"
                                        value="{{ $clientProfile->client_id }}">
                                    <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                        data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                </form>
                                    
                                   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div id="" class="m-2 card h-100" data-name="foreclosure">
                            <div class="card-header">
                                <h5>Foreclosure</h5>
                            </div>
                            <div class="card-body">
                                Not enough data </div>
                            <div class="card-footer">
                                <h5><a href="{{ route('counsler.edit.foreclosure', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 package basic" data-name="garnishment">
                            <div class="card-header">
                                <h5>Garnishment</h5>
                            </div>
                            <div class="card-body">
                                Not enough data
                            </div>
                            <div class="card-footer">
                                <h5><a
                                        href="{{ route('counsler.edit.client_garnishment', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 " data-name="payment">
                            <div class="card-header">
                                <h5>Law Suit</h5>
                            </div>
                            <div class="card-body">
                                Not enough data </div>
                            <div class="card-footer">
                                <h5><a
                                        href="{{ route('counsler.edit.client_lawsuit', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div id="" class="m-2 card h-100" data-name="budget">
                            <div class="card-header">
                                <h5>Budget</h5>
                            </div>
                            <div id="budget_review" class="card-body">
                                <div class="col">
                                    <div class="row mt-3">
                                        @if ($budget)
                                            
                                        <strong> <span>Monthly Expenditures by Category</span></strong>

                                        <div class="col-md-7 mb-3">
                                            <table class="table table-sm table-hover budget top">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Expenses</th>
                                                        <th scope="col">Normal</th>
                                                        <th scope="col">Your</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="c_1">
                                                        <td>Housing</td>
                                                        <td>${{ $budget->housing_insurance }}</td>
                                                        <td class="text-secondary">25%—35%</td>
                                                        <td class="table-success">8.12%</td>
                                                    </tr>
                                                    <tr id="c_5">
                                                        <td>Health</td>
                                                        <td>$116</td>
                                                        <td class="text-secondary">5%—15%</td>
                                                        <td
                                                            class="
                                                                table-success">
                                                            3.78%</td>
                                                    </tr>
                                                    <tr id="c_6">
                                                        <td>Education</td>
                                                        <td>$101</td>
                                                        <td class="text-secondary">2%—5%</td>
                                                        <td
                                                            class="
                                                                table-success">
                                                            3.3%</td>
                                                    </tr>
                                                    <tr id="c_2">
                                                        <td>Utilities</td>
                                                        <td>$541</td>
                                                        <td class="text-secondary">5%—10%</td>
                                                        <td class="table-danger">17.65%</td>
                                                    </tr>
                                                    <tr id="c_4">
                                                        <td>Transportation</td>
                                                        <td>$312 </td>
                                                        <td class="text-secondary">10%—15%</td>
                                                        <td class="table-success">10.18%</td>
                                                    </tr>
                                                    <tr id="c_7">
                                                        <td>Entertainment</td>
                                                        <td>$342</td>
                                                        <td class="text-secondary">5%—10%</td>
                                                        <td class="table-danger">11.16%</td>
                                                    </tr>
                                                    <tr id="c_8">
                                                        <td>Personal</td>
                                                        <td>$497</td>
                                                        <td class="text-secondary">7%—17%</td>
                                                        <td class="table-success">16.22%</td>
                                                    </tr>
                                                    <tr id="c_10">
                                                        <td>Loans and Credit Cards</td>
                                                        <td>$583</td>
                                                        <td class="text-secondary">5%—10%</td>
                                                        <td class="table-danger">19.02%</td>
                                                    </tr>
                                                    <tr id="c_9">
                                                        <td>Savings / Investment</td>
                                                        <td>$308</td>
                                                        <td class="text-secondary">5%—15%</td>
                                                        <td class="table-success">10.05%</td>
                                                    </tr>
                                                    <tr id="c_3">
                                                        <td>Food</td>
                                                        <td>$16</td>
                                                        <td class="text-secondary">5%—15%</td>
                                                        <td class="table-success">0.52%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="small text-secondary">Place mouse pointer over a category row in
                                                the left table in order to get detailed expenditures by subcategory
                                                displayed in the right table.</p>
                                        </div>

                                        <div class="col-5">

                                            <div class="col-md-7 mb-3">
                                                <table class="table table-sm budget details">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Subcategory</th>
                                                            <th scope="col">Expenses</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="c_1 d-none">
                                                            <td>Mortgage or Rent</td>
                                                            <td>${{ $budget->rent }}</td>
                                                        </tr>
                                                        <tr class="c_1 d-none">
                                                            <td>Condo</td>
                                                            <td>${{ $budget->condo }}</td>
                                                        </tr>
                                                        <tr class="c_1 d-none">
                                                            <td>Maintenance</td>
                                                            <td>${{ $budget->maintenance }}</td>
                                                        </tr>
                                                        <tr class="c_1 d-none">
                                                            <td>Property Taxes</td>
                                                            <td>${{ $budget->pro_tax }}</td>
                                                        </tr>
                                                        <tr class="c_1 d-none">
                                                            <td>Insurance</td>
                                                            <td>${{ $budget->housing_insurance }}</td>
                                                        </tr>
                                                        <tr class="c_1 d-none">
                                                            <td>Furniture and appliances</td>
                                                            <td>${{ $budget->fur_app }}</td>
                                                        </tr>
                                                        <tr class="c_5 d-none">
                                                            <td>Doctor(s)</td>
                                                            <td>${{ $budget->doctor }}</td>
                                                        </tr>
                                                        <tr class="c_5 d-none">
                                                            <td>Dentist(s)</td>
                                                            <td>${{ $budget->dentist }}</td>
                                                        </tr>
                                                        <tr class="c_5 d-none">
                                                            <td>Medications</td>
                                                            <td>${{ $budget->medications }}</td>
                                                        </tr>
                                                        <tr class="c_5 d-none">
                                                            <td>Insurance</td>
                                                            <td>${{ $budget->health_insurance }}</td>
                                                        </tr>
                                                        <tr class="c_6 d-none">
                                                            <td>Tuition/School fees</td>
                                                            <td>${{ $budget->school_fee }}</td>
                                                        </tr>
                                                        <tr class="c_6 d-none">
                                                            <td>Books and Supplies</td>
                                                            <td>${{ $budget->books }}</td>
                                                        </tr>
                                                        <tr class="c_6 d-none">
                                                            <td>School activities</td>
                                                            <td>${{ $budget->school_activities }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Gas</td>
                                                            <td>${{ $budget->gas }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Electricity</td>
                                                            <td>${{ $budget->electricity }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Water</td>
                                                            <td>${{ $budget->water }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Garbage</td>
                                                            <td>${{ $budget->garbage }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Sewer</td>
                                                            <td>${{ $budget->sewer }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Telephone</td>
                                                            <td>${{ $budget->telephone }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Cell Phone</td>
                                                            <td>${{ $budget->cell_phone }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Cable Television</td>
                                                            <td>${{ $budget->cable }}</td>
                                                        </tr>
                                                        <tr class="c_2 d-none">
                                                            <td>Internet</td>
                                                            <td>${{ $budget->internet }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Automobile Payment</td>
                                                            <td>${{ $budget->automobile }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Licensing</td>
                                                            <td>${{ $budget->license }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Insurance</td>
                                                            <td>${{ $budget->transport_insurance }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Maintenance</td>
                                                            <td>${{ $budget->transport_maintenance }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Gasoline</td>
                                                            <td>${{ $budget->gasoline }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Public Transportation</td>
                                                            <td>${{ $budget->public_trans }}</td>
                                                        </tr>
                                                        <tr class="c_4 d-none">
                                                            <td>Parking / Tolls</td>
                                                            <td>${{ $budget->parking_tolls }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Restaurant Meals</td>
                                                            <td>${{ $budget->restaurent }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Gifts</td>
                                                            <td>${{ $budget->gifts }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Newspapers and Magazines</td>
                                                            <td>${{ $budget->newspaper }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Movies and Concerts</td>
                                                            <td>${{ $budget->movies_concerts }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Vacations</td>
                                                            <td>${{ $budget->vacations }}</td>
                                                        </tr>
                                                        <tr class="c_7 d-none">
                                                            <td>Hobbies</td>
                                                            <td>${{ $budget->hobbies }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Clothing</td>
                                                            <td>${{ $budget->clothing }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Laundry/Dry Cleaning</td>
                                                            <td>${{ $budget->laundery }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Membership Dues</td>
                                                            <td>${{ $budget->membership }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Donations</td>
                                                            <td>${{ $budget->donations }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Allowances</td>
                                                            <td>${{ $budget->allowance }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Child support</td>
                                                            <td>${{ $budget->child_support }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Childcare</td>
                                                            <td>${{ $budget->child_care }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Pets</td>
                                                            <td>${{ $budget->pets }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Cosmetics</td>
                                                            <td>${{ $budget->cosmetics }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Haircuts</td>
                                                            <td>${{ $budget->haircuts }}</td>
                                                        </tr>
                                                        <tr class="c_8 d-none">
                                                            <td>Other</td>
                                                            <td>${{ $budget->personal_other }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Student Loan</td>
                                                            <td>${{ $budget->std_loan }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Gas Card</td>
                                                            <td>${{ $budget->gas_card }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Department store card</td>
                                                            <td>${{ $budget->ds_card }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 1</td>
                                                            <td>${{ $budget->cc_1 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 2</td>
                                                            <td>${{ $budget->cc_2 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 3</td>
                                                            <td>${{ $budget->cc_3 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 4</td>
                                                            <td>${{ $budget->cc_4 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 5</td>
                                                            <td>${{ $budget->cc_5 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 6</td>
                                                            <td>${{ $budget->cc_6 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Credit Card 7</td>
                                                            <td>${{ $budget->cc_7 }}</td>
                                                        </tr>
                                                        <tr class="c_10 d-none">
                                                            <td>Other</td>
                                                            <td>${{ $budget->l_cc_other }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>Savings accounts</td>
                                                            <td>${{ $budget->savings }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>401(k)</td>
                                                            <td>${{ $budget->s_i_401 }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>Stocks</td>
                                                            <td>${{ $budget->stocks }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>Mutual Funds</td>
                                                            <td>${{ $budget->mutual_funds }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>Bonds</td>
                                                            <td>${{ $budget->bonds }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>IRA(s)</td>
                                                            <td>${{ $budget->ira }}</td>
                                                        </tr>
                                                        <tr class="c_9 d-none">
                                                            <td>Other</td>
                                                            <td>${{ $budget->s_i_other }}</td>
                                                        </tr>
                                                        <tr class="c_3 d-none">
                                                            <td>Groceries</td>
                                                            <td>${{ $budget->groceries }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <h3>Structure of Expenditures</h3>
                                        <p class="lead">Annual expenses $47,448</p>

                                        <div class="col-md-6 col-lg-5 col-xl-4 mb-3">
                                            <table class="table table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Category</th>
                                                        <th scope="col" class="text-end">Expenses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Housing</td>
                                                        <td class="text-end">
                                                            8.12%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Health</td>
                                                        <td class="text-end">
                                                            3.78%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Education</td>
                                                        <td class="text-end">
                                                            3.3%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Utilities</td>
                                                        <td class="text-end">
                                                            17.65%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transportation</td>
                                                        <td class="text-end">
                                                            10.18%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entertainment</td>
                                                        <td class="text-end">
                                                            11.16%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Personal</td>
                                                        <td class="text-end">
                                                            16.22%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loans and Credit Cards</td>
                                                        <td class="text-end">
                                                            19.02%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Savings / Investment</td>
                                                        <td class="text-end">
                                                            10.05%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Food</td>
                                                        <td class="text-end">
                                                            0.52%
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-6 mb-5 budget_chart">
                                            <div id="canvas-holder">
                                                <canvas id="chart-area" width="555" height="555" class="m-auto"
                                                    style="display: block; height: 370px; width: 370px;"></canvas>
                                            </div>
                                        </div>

                                        @else
                                            <span>Not Enough Data</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                    action="{{ route('counsler.edit.client_budget', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                    method="GET" class="email-form">
                                    @csrf
                                    <input type="hidden" name="id"
                                        value="{{ $clientProfile->client_id }}">
                                    <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                        data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.client_budget', ['locale' => app()->getLocale()]) }}">edit
                                        information</a> --}}
                                    </h5>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col">
                        <div id="" class="m-2 card h-100 package basic" data-name="account">
                            <div class="card-header">
                                <h5>Account</h5>
                            </div>
                            <div class="card-body">
                                <strong> <span>Email Address</span></strong><br>
                                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="90e4f5e3e4d0f7fdf1f9fcbef3fffd">{{ $clientProfile->client->client_email }}</a></span><br><br>
                                <strong> <span>Household Size</span></strong><br>
                                <span> {{ $clientProfile->household }} </span><br><br>
                                <strong> <span>Type of Account</span></strong><br>
                                <span> {{ $clientProfile->account_type }} </span><br><br>
                                <strong> <span>Bankruptcy Court</span></strong><br>
                                @if ($clientProfile->court)
                                <span>
                                    {{ $clientProfile->court->name }} </span><br><br>
                                <strong> <span>Court State</span></strong><br>



                                <span>{{ $clientProfile->court->state->name }}</span>

                                @endif
                               


                                <br><br>
                                <strong> <span>Account Created</span></strong><br>
                                <span>{{ $clientProfile->dated }}</span><br><br>
                                {{-- <strong> <span>Account Reset</span></strong><br>
                                <span>NEVER</span><br><br> --}}
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_accountInfo', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.client_accountInfo', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 package basic" data-name="client">
                            <div class="card-header">
                                <h5>Client</h5>
                            </div>
                            <div class="card-body">
                                @if ($clientProfile)
                                    <strong> <span>Full name</span></strong><br>
                                    <span> {{ $clientProfile->Mallory }} {{ $clientProfile->Hale }} </span><br><br>
                                    <strong> <span>Full Address</Address></span></strong><br>
                                    <span> {{ $clientProfile->st_address }} .</span><br><br>
                                    <strong> <span>Date of Birth</span></strong><br>
                                    <span> {{ $clientProfile->dob }} </span><br><br>
                                    <strong> <span>Social Security Number</span></strong><br>
                                    <span> {{ $clientProfile->ss_num }} </span><br><br>
                                    <strong> <span>Phone Number</span></strong><br>
                                    <span> {{ $clientProfile->phone }} </span><br><br>
                                    <strong> <span>Represented By</span></strong><br>
                                    <span> SELF</span><br><br>
                                    <strong> <span>Certified at</span></strong><br>
                                    <span> {{ $clientProfile->Mallory }} </span><br><br>
                                    <strong> <span>Certificate</span></strong><br>
                                    <span><a href="">Upload</a></span><br><br>
                                @else
                                    <strong><span>No Client Information</span></strong><br>
                                @endif

                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_personalInfo', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.client_personalInfo', ['locale' => app()->getLocale()]) }}">edit
                                        information</a></h5> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 package basic" data-name="basic">
                            <div class="card-header">
                                <h5>Attorney</h5>
                            </div>
                            <div class="card-body">
                                @if ($attorney)
                                    <strong>Attorney Name: </strong> <span>{{ $attorney->att_fname }}
                                        {{ $attorney->att_lname }}</span>
                                    <br><br><br>
                                    <strong>Email: </strong> <span>{{ $attorney->att_email }}</span>
                                    <br><br><br>

                                    <strong>Contact: </strong> <span>{{ $attorney->att_phone }}</span>
                                    <br><br><br>
                                @else
                                    <strong><span>No Attorney, filing pro se</span></strong><br>
                                @endif
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_attorney', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                    {{-- <a href="{{ route('counsler.edit.client_attorney', ['locale' => app()->getLocale()]) }}">edit information</a> --}}
                                </h5>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div id="" class="m-2 card h-100" data-name="Course">
                            <div class="card-header">
                                <h5>Course</h5>
                            </div>
                            <div class="card-body">
                                <strong> <span>Language</span></strong><br>
                                <span>English</span><br><br>
                                <strong> <span>Packaged Purchased </span></strong><br>
                                {{-- <span>{{{{ $clientProfile->pkg }}}}Video - $39.99 </span><br><br> --}}
                                <span>
                                    {{ $clientProfile->pkg == 1 ? 'Basic-$9.99' : '' }}
                                    {{ $clientProfile->pkg == 2 ? 'Audio-$29.99' : '' }}
                                    {{ $clientProfile->pkg == 3 ? 'Video-$39.99' : '' }}
                                </span><br><br>
                                <strong> <span>Course Completed</span></strong><br>
                             
                                <span>100% </span><br><br>
                                <strong> <span>Course Status</span></strong><br>
                                <span>17 </span><br><br>
                            </div>
                            <div class="card-footer">
                                <h5>

                                    <form
                                    action="{{ route('counsler.edit.course_info', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                    method="GET" class="email-form">
                                    @csrf
                                    <input type="hidden" name="id"
                                        value="{{ $clientProfile->client_id }}">
                                    <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                        data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                </form>
                                    {{-- <a
                                        href="{{ route('counsler.edit.course_info', ['locale' => app()->getLocale()]) }}">edit
                                        information</a> --}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 package basic" data-name="optional_service">
                            <div class="card-header">
                                <h5>Optional Services</h5>
                            </div>
                            <div class="card-body">
                                <strong><span>Certificate by email</span></strong><br>
                                <span>{{ $clientProfile->opt_email ? 'Yes' : 'No' }}</span><br><br>

                                <strong><span>Certificate by fax</span></strong><br>
                                <span>{{ $clientProfile->opt_attorny_fax ? 'Yes' : 'No' }}</span><br><br>

                                <strong><span>Certificate by mail</span></strong><br>
                                <span>{{ $clientProfile->opt_mailed ? 'Yes' : 'No' }}</span><br><br>

                                <strong><span>Phone Interview</span></strong><br>
                                <span>{{ $clientProfile->opt_phone ? 'Yes' : 'No' }}</span><br><br>

                                <strong><span>Follow Along Document</span></strong><br>
                                <span>{{ $clientProfile->opt_pdf ? 'Yes' : 'No' }}</span><br><br>
                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_optionalServices', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="" class="m-2 card h-100 " data-name="payment">
                            <div class="card-header">
                                <h5>Payment</h5>
                            </div>
                            <div class="card-body">

                                @if ($clientProfile)
                                    <strong>Payment Method: </strong>
                                    <span>{{ $clientProfile->payment_method }}</span>
                                    <br><br><br>
                                    <strong>Total Payment: </strong> <span>{{ $clientProfile->total_payment }}</span>
                                    <br><br><br>

                                    <strong>Payment Status: </strong>
                                    <span>{{ $clientProfile->payment_status }}</span>
                                    <br><br><br>
                                @else
                                    <strong><span>No Payment Yet</span></strong><br>
                                @endif




                            </div>
                            <div class="card-footer">
                                <h5>
                                    <form
                                        action="{{ route('counsler.edit.client_payment', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id"
                                            value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: rgb(90, 90, 220)"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">edit information</span>
                                    </form>

                                    {{-- <a href="edit_client_payment?client=181&amount=39.99">edit information</a> --}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="row col-2 mt-4">
                    <a href="clients_online" class="btn btn-primary">BACK</a>
                </div>
                <!-- <div class="row col-2 mt-4">
                        <a href="client_attorny_code.php" class="btn btn-warning">RESET ACCOUNT</a>
                    </div> -->
        </div>
        </article>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            var xValues = ["Housing", "Health", "Education", "Utilities", "Transportation", "Entertainment", "Personal",
                "Loans and Credit Cards", "Savings / Investment", "Food"
            ];
            var yValues = [249, 116, 101, 541, 312, 342, 497, 583, 308, 16];
            var barColors = [
                "#1395BA", "#117899",
                "#0F5B78", "#0D3C55",
                "#C02E1D", "#007bff",
                "#e8c3b9", "#EF8B2C",
                "#ECAA38", "#EBC844",
            ];
            myChart = new Chart(document.getElementById('chart-area').getContext('2d'), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: yValues,
                        backgroundColor: barColors
                    }],
                    labels: xValues,
                },
                options: {
                    legend: {
                        display: false
                    },
                    responsive: false,
                    cutoutPercentage: 50,
                }
            });
            (function() {
                document.querySelectorAll('table.details tbody tr').forEach(el => el.classList.add('d-none'));
                document.querySelectorAll('table.top tbody tr').forEach(el => {
                    el.addEventListener('mouseover', function() {
                        document.querySelectorAll('table.details tbody tr.' + this.id).forEach(el => el
                            .classList.toggle('d-none'));
                    });
                    el.addEventListener('mouseout', function() {
                        document.querySelectorAll('table.details tbody tr').forEach(el => el.classList.add(
                            'd-none'));
                    });
                });
            })();
        </script>
        </div>

    </main>
    <br><br><br><br><br><br>
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
                                                    COMPLETE CREDIT COUNSELING INC. Approval does not endorse or assure
                                                    the quality of an Agency's services.
                                                    <!--Our Credit Counseling Program is-->

                                                    <!--<a href="#"><//?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 's') ? 'aprobado en TODOS los estados y territorios de EE. UU.' : 'approved in ALL U.S. States and Territories' ?></a>-->
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-white">
                                                Copyright ©2022 COMPLETE CREDIT COUNSELING INC. All rights reserved.
                                                <br> Complete Credit Counseling is a Trademark of COMPLETE CREDIT
                                                COUNSELING INC. 701 Rte 70 W. Marlton, NJ 08053
                                                <br> (833) 367-7130
                                                <br>
                                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="94f7f7f7fbe1fae7f1f8fdfaf3d4f7fbf9e4f8f1e0f1f7e6f1f0fde0f7baf7fbf9">[email&#160;protected]</a>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a
                                                        href="../client/client_login">Client</a></li>
                                                <li class="list-inline-item"><a
                                                        href="../counselor/login">Counselor</a></li>
                                                <li class="list-inline-item"><a
                                                        href="../attorney/attorney_login.php">Attorney</a></li>
                                                <li class="list-inline-item"><a href="../admin/admin_login">Admin</a>
                                                </li>
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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.email-form .__cf_email__').forEach(span => {
            span.addEventListener('click', function() {
                this.closest('form').submit();
            });
        });
    </script>
</body>

</html>
