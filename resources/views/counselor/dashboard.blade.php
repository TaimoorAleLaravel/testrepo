@extends('counselor.admin-layout')
@section('main')
    <main class="bg-white min-vh-100">

        <div class="container">

            <article class="course reason">



                <header class="mt-3">

                    <span class="lead h2 text-success font-weight-normal">Counsler Dashboard</span>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb mt-3">

                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>

                            <li class="breadcrumb-item"><a href="">Counsler</a></li>

                        </ol>

                    </nav>

                </header>







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

                        <form id="filterForm" action="{{route('counsler.applyfilter', ['locale' => app()->getLocale()]) }}" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="container"> 
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <span class="nav-link" onclick="document.getElementById('clients_online').click();">Online</span>
                                    <button id="clients_online" class="hidden-button" type="submit" name="clients_online">Online</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_chat').click();">Chat</span>
                                    <button id="clients_chat" class="hidden-button" type="submit" name="clients_chat">Chat</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_eligible_to_chat').click();">Eligible to chat</span>
                                    <button id="clients_eligible_to_chat" class="hidden-button" type="submit" name="clients_eligible_to_chat">Eligible to chat</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_mine').click();">Mine</span>
                                    <button id="clients_mine" class="hidden-button" type="submit" name="clients_mine">Mine</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_paid').click();">Paid</span>
                                    <button id="clients_paid" class="hidden-button" type="submit" name="clients_paid">Paid</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_unpaid').click();">Unpaid</span>
                                    <button id="clients_unpaid" class="hidden-button" type="submit" name="clients_unpaid">Unpaid</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_learning').click();">Learning</span>
                                    <button id="clients_learning" class="hidden-button" type="submit" name="clients_learning">Learning</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_awaiting').click();">Awaiting</span>
                                    <button id="clients_awaiting" class="hidden-button" type="submit" name="clients_awaiting">Awaiting</button>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link" onclick="document.getElementById('clients_all').click();">All</span>
                                    <button id="clients_all" class="hidden-button" type="submit" name="clients_all">All</button>
                                </li>
                            </ul>
                        </div>
                        </form>
                        
                        <style>
                        .hidden-button {
                            display: none;
                        }
                        </style>
                        
                        


                      
                    </div>


                </nav>
                <form id="filterForm" action="{{route('counsler.applyfilter', ['locale' => app()->getLocale()]) }}" method="GET" enctype="multipart/form-data">

                    <div>
                        <div style="width: 100%;" class="float-right">
                            <div class="row justify-content-between mt-3 mb-3 ml-3">
                                <div class="col-3">
                                    <select class="form-control" id="lname" name="lname">
                                        <option value="">Sort By Name</option>
                                        <option value="ASC" {{ old('lname') == 'ASC' ? 'selected' : '' }}>A to Z</option>
                                        <option value="DESC" {{ old('lname') == 'DESC' ? 'selected' : '' }}>Z to A</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="payment" name="payment">
                                        <option value="">Payment Status</option>
                                        <option value="paid" {{ old('payment') == 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="unpaid" {{ old('payment') == 'unpaid' ? 'selected' : '' }}>Not Paid</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="fdate" name="fdate">
                                        <option value="">Sort By Date</option>
                                        <option value="1" {{ old('fdate') == '1' ? 'selected' : '' }}>Today</option>
                                        <option value="7" {{ old('fdate') == '7' ? 'selected' : '' }}>Last 7 days</option>
                                        <option value="30" {{ old('fdate') == '30' ? 'selected' : '' }}>Last 30 days</option>
                                        <option value="180" {{ old('fdate') == '180' ? 'selected' : '' }}>Last 180 days</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="submit" id="filter_apply" class="btn btn-primary">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                </form>
                
              
                
               


                


                <br><br>
                <span class="lead h2  font-weight-normal" style="font-size:2vw">All Clients</span>



                <br>

                <p> <strong id="Default_counts"> 1 -

                        34
                    </strong>
                    <strong id="search_counts" style="display: none;"></strong>

                    <!-- " of ".mysqli_num_rows($res) -->

                    <!-- in total -->

                </p>








                <table id='SearchTable' style="display: none;" class="table table-hover table-striped ">

                    <thead>

                        <tr>

                            <th scope="col">#</th>

                            <th scope="col">Client’s Name / Email address</th>

                            <th scope="col">Attorney</th>

                            <th scope="col">Status</th>

                            <th scope="col">Court</th>

                            <th scope="col">Package</th>

                            <th scope="col">Flow</th>

                            <th scope="col">Chat</th>

                        </tr>

                    </thead>
                    <tbody id="showData">

                    </tbody>
                </table>
                <table id='defaultTable' class="table table-hover table-striped ">

                    <thead>

                        <tr>

                            <th scope="col">#</th>

                            <th scope="col">Client’s Name / Email address</th>

                            <th scope="col">Attorney</th>

                            <th scope="col">Status</th>

                            <th scope="col">Court</th>

                            <th scope="col">Package</th>

                            <th scope="col">Flow</th>

                            <th scope="col">Chat</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($clientProfiles as $clientProfile)
                            {{-- <p>{{ $clientProfile->name }}</p> --}}
                            <tr>

                                <td>{{ $loop->iteration }}</td>


                                <td>
                                    {{ $clientProfile->fname }} {{ $clientProfile->lname }} <br>
                                    <form
                                        action="{{ route('counsler.clientprofile', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}"
                                        method="GET" class="email-form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $clientProfile->client_id }}">
                                        <span class="__cf_email__" style="color: blue"
                                            data-cfemail="1e6a7b6d6a5e79737f7772307d7173">{{ $clientProfile->client->client_email }}</span>
                                    </form>
                                </td>

                                <td>

                                    {{ $clientProfile->client->attorny }}
                                </td>

                                <td>
                                    {{ $clientProfile->client->status }}


                                </td>

                                <td>
                                    @if (!is_null($clientProfile->court))
                                        {{ $clientProfile->court->name }}
                                    @else
                                        n/a
                                    @endif
                                </td>

                                <td>
                                    <div style="display:flex; gap:5px">
                                        <div>
                                            @if ($clientProfile->pkg == 1)
                                                <img alt="Basic Package" width="30" height="30" class="d-block"
                                                    src="{{ asset('assets/basic1.png') }}">
                                            @elseif ($clientProfile->pkg == 2)
                                                <img alt="Regular Package" width="30" height="30" class="d-block"
                                                    src="{{ asset('assets/regular.png') }}">
                                            @elseif ($clientProfile->pkg == 3)
                                                <img alt="Premium Package" width="30" height="30" class="d-block"
                                                    src="{{ asset('assets/premium.png') }}">
                                            @else
                                                <img alt="No Package" width="30" height="30" class="d-block"
                                                    src="{{ asset('assets/credit_card.png') }}">
                                            @endif
                                        </div>
                                        <div style='padding-top:4px'>
                                            @if ($clientProfile->pkg == 1)
                                                $ 19.99
                                            @elseif ($clientProfile->pkg == 2)
                                                $ 29.99
                                            @elseif ($clientProfile->pkg == 3)
                                                $ 39.99
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                </td>

                                <td>

                                    <center>

                                        <div
                                            style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 0deg,green 0 235deg);">
                                        </div>


                                    </center>

                                </td>

                                <td>

                                    <div>

                                        <a href="../counselor/counselor_chat_with_client?client=181">

                                            <img alt="Image: Chat" width="30" height="30" class="d-block"
                                                src="{{ asset('assets/chat.png') }}">

                                        </a>

                                    </div>

                                </td>

                            </tr>
                            <!-- Display other profile details here -->
                        @endforeach


                    </tbody>

                </table>

                <div class="d-flex justify-content-center">
                    {{ $clientProfiles->links() }}
                </div>
            
                <!-- Include Bootstrap JS and dependencies -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>            </article>

            </article>

        </div>

    </main>

    <br><br><br><br>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.nav-link').forEach(function(navLink) {
                navLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    const form = document.getElementById('filterForm');
                    const formData = new FormData(form);
                    formData.set(navLink.querySelector('input[type="submit"]').name, '1');

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': formData.get('_token'),
                            },
                            body: new URLSearchParams(formData),
                        })
                        .then(response => response.json())
                        .then(data => {
                            const tbody = document.getElementById('showData');
                            tbody.innerHTML = '';

                            data.forEach((profile, index) => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                <td>${index + 1}</td>
                                <td>${profile.client.fname} ${profile.client.lname}<br><span style="color: blue">${profile.client.client_email}</span></td>
                                <td>${profile.client.attorny}</td>
                                <td>${profile.client.status}</td>
                                <td>${profile.court ? profile.court.name : 'n/a'}</td>
                                <td>
                                    <div style="display:flex; gap:5px">
                                        <div>
                                            <img alt="${profile.pkg == 1 ? 'Basic Package' : profile.pkg == 2 ? 'Regular Package' : 'Premium Package'}" width="30" height="30" class="d-block" src="${profile.pkg == 1 ? '/assets/basic1.png' : profile.pkg == 2 ? '/assets/regular.png' : '/assets/premium.png'}">
                                        </div>
                                        <div style='padding-top:4px'>
                                            ${profile.pkg == 1 ? '$ 19.99' : profile.pkg == 2 ? '$ 29.99' : '$ 39.99'}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <center>
                                        <div style="width: 30px; height: 30px; border-radius: 50%; background-image: conic-gradient(lightgray 0deg,green 0 235deg);"></div>
                                    </center>
                                </td>
                                <td>
                                    <div>
                                        <a href="../counselor/counselor_chat_with_client?client=${profile.client_id}">
                                            <img alt="Image: Chat" width="30" height="30" class="d-block" src="/assets/chat.png">
                                        </a>
                                    </div>
                                </td>
                            `;
                                tbody.appendChild(row);
                            });

                            document.getElementById('defaultTable').style.display = 'none';
                            document.getElementById('SearchTable').style.display = 'table';
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>

    <script>
        document.querySelectorAll('.email-form .__cf_email__').forEach(span => {
            span.addEventListener('click', function() {
                this.closest('form').submit();
            });
        });
    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
