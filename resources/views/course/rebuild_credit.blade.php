@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <!---------------------------------------------------- English --------------------------------------------------->

    <div class="container">
        <article class="course rebuilding">
            <div class="mt-3">
                <h2 style="color: #000b57">Rebuilding Credit After Bankruptcy</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="">Rebuilding Credit After Bankruptcy</a>
                        </li>
                    </ol>
                </nav>
            </div>



            <p><img alt="Image: Video" class="videostill border img-fluid"
                    src="https://completecreditcounseling.org/img/rebuilding_credit.jpg"></p>




            <p>Rebuilding credit after your bankruptcy is far from impossible. In recent years, over one million
                people have been filing bankruptcy every year. There are so many people filing that bankruptcy
                does not have the stigma that it once had. Filing bankruptcy is also something that should not
                leave you feeling ashamed. You may not even know it, but it may surprise you to know that many
                important people such as Henry Ford, Donald Trump, Walt Disney, Abraham Lincoln, and many others
                have filed bankruptcy. Just like they were, you too are entitled to a fresh start.</p>
            <h3>How to Rebuild Your Credit</h3>
            <p>Good credit does not "fall from the sky". You need to earn it. With some effort, most people who
                have filed bankruptcy are able to get a new loan within one year after their bankruptcy, and
                they can expect a somewhat normal credit rating in 3 years or so.</p>
            <p>If you had problems with credit card debt in the past, you will want to first of all set up a
                debit card and use that as your primary method of payment. However, you can set up a little
                credit card after your bankruptcy is over, to help rebuild your credit. Use the credit card just
                for something small, like gas purchases. Fill up the tank of your vehicle, put it on the card,
                and pay the entire balance off on time or early, and that will really help you rebuild credit.
                You can slowly start to put other small purchases on the card, maybe if you go out to dinner you
                could put that on there, but use your debit card for most transactions so you do not have to
                rely so heavily on credit. You do not want to be racking up a high balance on a card after
                bankruptcy, because whatever card you get approved for will likely have much higher interest
                rates and worse terms than one you had before your bankruptcy. So you really want to make sure
                you are paying off the card in full every month, on time or early, to prevent carrying a balance
                and getting sacked with high interest.</p>
            <p>Some bankruptcy attorneys facilitate this process by allowing you to keep a card through your
                bankruptcy. Generally, this is really only an option if the balance on the card is extremely
                low. Doing this avoids the problem of having to apply for a credit card with worse terms after
                bankruptcy. Ask your bankruptcy attorney about this if you have a card you might want to keep
                and the balance of the card is under $500 or some other manageable number.</p>
            <p>If you are turned down for a regular card after bankruptcy (this is common), you may have to get
                a secured credit card. A secured credit card requires you to attach a savings account as
                security for the card. Secured credit card's payment history is not always sent to the credit
                bureaus though, and you want to make sure that it is, otherwise it will not be helping you
                rebuild your credit. So make sure you contact the bank and ask them if the card's history will
                be reported to the credit bureaus. Also make sure you read the offers and pay close attention to
                the fees these cards charge.</p>
            <p>Another great tip is to open a savings account, save $1,000 or so, and then take out a $1,000
                bank loan using the $1,000 in your savings account as collateral. Do not touch the $1,000 in
                your savings account, and pay back the $1,000 loan using new funds. It will give you practice
                paying off a loan, and you will be generating a positive credit history of on time payments.</p>
            <p>Pay all of your utility bills and other bills on time or early. Also try to save at least 25% of
                your paycheck. Do not use any payday loans, or any of those Cash-Now places. Their high-interest
                rates make them a rip-off. The biggest thing to remember is to be showing a good history of
                making payments, and to be making those payments on time or early. You do this, and your credit
                score will go up.</p>



            <div class="row">

                <div class="col-12 my-5">

                    <form class="form-control" method="get" action="{{ route('course.visual_identification', ['locale' => app()->getlocale()]) }}">
                        @csrf                      
                          <input type="hidden" name="progress" value="80">
                        <button class="btn btn-primary">@lang('lang.back')</button>
                        <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
                        <input type="hidden" name="authenticity_token"
                            value="xXtWGsyV0BJ2oyzeByn05bn89lZKzo8w35bFHF1I___pFFqspfFBryv-5zKVnwuWRWRYmM-5WDvTewxNd-AesA"
                            autocomplete="off">
                    </form>
                </div>

            </div>

        </article>



        <div class="progress my-5" style="height:1.5rem;">

            <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

            <div class="progress-bar bg-success" role="progressbar" style="width: 80.00%"
                aria-valuemin="0" aria-valuemax="16" aria-valuenow="13">

            </div>

        </div>





    </div>

</main>
@endsection