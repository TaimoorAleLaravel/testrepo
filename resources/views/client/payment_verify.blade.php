@extends('layout.app')
@section('main')
    @php

        // $total = $pkg_price + $opt_pdf + $opt_mailed + $opt_phone + $opt_attorny_fax + $opt_email;
    @endphp
    {{-- {{dd("pkg: $pkg_price\npdf: $opt_pdf \nmailed: $opt_mailed \nphone: $opt_phone \nfax: $opt_attorny_fax \nmail: $opt_email\n total: $total" );}} --}}
    <div class="container mt-4">
        <h2 style="color: #000b57">Client Account Registration</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Client Profile</a></li>
                <li class="breadcrumb-item"><a href="">Purchases</a></li>
            </ol>
        </nav>

        <h2 style="color: #000b57">Purchases</h2>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 mb-3 pl-3">
                <h6>Grace Munoz</h6>
                <h6>tumavato@mailinator.com</h6>
            </div>
            <div class="col-xl-8 col-lg-8 mb-2 pl-3">
                <div class="invoice container border mb-2 p-3 bg-white">
                    <div class="from mb-5 text-center">
                        <h1>Complete Credit Counseling, Inc.</h1>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-2">Package:</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($pkg == 1)
                                            Basic Package
                                        @elseif ($pkg == 2)
                                            Audio Package
                                        @elseif ($pkg == 3)
                                            Video Package
                                        @endif
                                        @if ($account_type == '2')
                                            (2)
                                        @endif
                                    </td>
                                    <td class="text-end">${{ $pkg_price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="my-3">
                        <h4 class="mb-3">Optional Services:</h4>
                        <table class="table table-sm">
                            <tbody>
                                @if ($opt_pdf !== 0)
                                    <tr>
                                        <td>Follow Along Document
                                            @if ($lang == 1)
                                                (English)
                                            @elseif ($lang == 2)
                                                (English, Spanish)
                                            @endif
                                        </td>
                                        <td class="text-end">${{ $opt_pdf }}</td>
                                    </tr>
                                @endif

                                @if ($opt_mailed !== 0)
                                    <tr>
                                        <td>Certificate delivery by mail</td>
                                        <td class="text-end">${{ $opt_mailed }}</td>
                                    </tr>
                                @endif

                                @if ($opt_phone !== 0)
                                    <tr>
                                        <td>Phone Interview</td>
                                        <td class="text-end">${{ $opt_phone }}</td>
                                    </tr>
                                @endif

                                @if ($opt_attorny_fax !== 0)
                                    <tr>
                                        <td>Certificate faxed to attorney
                                            @if ($account_type == '2')
                                                (2)
                                            @endif
                                        </td>
                                        <td class="text-end">${{ $opt_attorny_fax }}</td>
                                    </tr>
                                @endif

                                @if ($opt_email !== 0)
                                    <tr>
                                        <td>Certificate delivery by email</td>
                                        <td class="text-end">${{ $opt_email }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="my-3 mb-5">
                        <h4 class="mb-3">Total:</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">TOTAL:</th>
                                    <td class="text-end">
                                        ${{ $pkg_price + $opt_pdf + $opt_mailed + $opt_phone + $opt_attorny_fax + $opt_email }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        
                        
                        <div class="col d-flex justify-content-end gap-3">
                            <a class="btn btn-outline-primary px-3" href="{{ route('client.price_package', ['locale' => app()->getLocale()]) }}">Edit Purchase</a>
                            <form action="" method="post">
                                <button class="btn btn-primary px-3" type="submit">Continue</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
