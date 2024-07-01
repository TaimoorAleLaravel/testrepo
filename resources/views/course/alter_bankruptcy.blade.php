@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <!---------------------------------------------------- English --------------------------------------------------->
    <div class="container">
        <article class="course alternatives">
            <div class="mt-3">
                <h2 style="color: #000b57">Alternatives to Bankruptcy</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="client_alternatives">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="client_alternatives">Alternatives to Bankruptcy</a></li>
                    </ol>
                </nav>
            </div>
            <p><img alt="Image: Video" class="videostill border img-fluid" src="https://completecreditcounseling.org/img/alternative_bank_rupcy.jpg"></p>

            <p>The purpose of learning about alternatives to bankruptcy is just to make you aware of some of the
                options that are out there. Bankruptcy is not a good solution for every individual. Always talk
                to an attorney about any alternatives to bankruptcy. They will be able to best advise you about
                your options.</p>
            <h3>Doing Nothing (Judgment-Proof)</h3>
            <p>There is an old saying, "You can't get blood from a stone". What this means in the context of
                bankruptcy is, creditors cannot come after you if you have no collectible assets. They can sue
                you until the cows come home, but they are never going to be able to collect anything from you.
                The perfect example of someone who is judgment-proof is the elderly lady who lives in the senior
                apartment complex. She rents where she lives so she owns no real estate, she does not have a
                car, her sole source of income is social security, and she has no assets to speak of other than
                a few modest personal belongings.</p>
            <p>The elderly lady in the above scenario is said to be "judgment-proof". If you are judgment-proof,
                you might decide that you do not need to file bankruptcy. Of course, if your situation changes
                and you come into money, say you get a better job, or you receive an inheritance, all of a
                sudden you will not be judgment-proof any longer. Also, just because you are judgment-proof,
                that does not mean the phone calls from creditors will stop. Many judgment-proof individuals
                decide it is in their best interest to file bankruptcy anyway. They appreciate the peace of mind
                and calmness that comes from having a true fresh start.</p>
            <p>You should seek a good bankruptcy attorney to advise you if you believe you might be
                judgment-proof. Most bankruptcy attorneys provide a free initial consultation and only charge
                you if you end up filing. So if you think you may be judgment-proof, do not avoid going to see
                an attorney just because you think it might cost you money. Call ahead and ask, because the
                appointment and the advice will likely be offered for free.</p>
            <h3>Negotiation / Consumer Workout</h3>
            <p>Ideally, you would contact your creditor and tell them in advance if you were ever going to be
                late on a payment. Your creditor has an interest in helping you. It is in their interest to be
                paid, so often they are willing to work around short-term problems with you. Every creditor has
                their own internal procedures, and some may not be willing to work with consumers or negotiate
                at all. It is often worth a simple phone call to find out.</p>
            <p>Some creditors are willing to negotiate with consumers on past-due bills, and may allow you to
                settle the debt for a fraction of what you owe. If your debt has already been sold to a 3rd
                party debt collection agency, you may have to negotiate with the debt collection agency instead.
            </p>
            <p>This option tends to work best for consumers with a small number of debts to clearly identifiable
                parties that they can call and negotiate with. It is a time-consuming endeavor, and one that
                requires patience.</p>
            <h3>Debt Consolidation Loan</h3>
            <p>This is generally not a great option, but if you have a decent credit rating, you may be able to
                take out a loan and then pay off all of your debt that way. If you are a homeowner, you might be
                able to take out a home-equity loan. However, taking out a loan to pay off debt is "Robbing
                Peter to pay Paul", as the saying goes, and it often actually increases the amount you owe. An
                advantage to paying it all off at once is you are stopping the late charges, interest, and other
                fees from running. However you are often trading your unsecured debt for secured debt, which is
                generally not a great financial move.</p>
            <h3>Credit Counseling – Debt Management Plans</h3>
            <p>Some credit counseling organizations offer debt management plans. The credit counseling
                organization contacts all of the debtor's creditors, and creates a custom-tailored debt
                management plan that allows the debtor to consolidate their debt into a series of scheduled
                payments. The credit counseling organization takes a fee out of that payment for managing the
                plan, and the rest is split up among the various creditors. Debt management plans typically last
                anywhere from 3 to 5 years.</p>
            <p>These programs are only successful if you continue to have income. If you have lost your job or
                your source of income, you would not be able to make the monthly payments. (Complete Credit
                Counseling, Inc., which provides the course you are taking now, does not offer debt management
                plans, but many other credit counseling agencies do).</p>
            <p>One recommendation is to check out <a target="_blank"
                    href="https://www.greenpath.com/">Greenpath</a>. They have been around for over 50 years,
                are a nonprofit, and have proven themselves as pretty reliable.</p>
            <h3>Debt Settlement</h3>
            <p>Debt settlement companies allow you to pay a reduced portion of what you owe. However, they often
                want you to pay the whole amount at once, which may mean borrowing money or selling assets to
                come up with the full amount. However, if you do not pay the full reduced amount, creditors will
                continue to come after you. Also, you will probably have to pay taxes on the amount forgiven.
                Debt Settlement companies often charge a hefty sum to negotiate a reduced debt, which is really
                something with enough persistence you could really do on your own.</p>
            <h3>Predatory Practices</h3>
            <p>Attorney General offices are closing down many businesses that promise to settle your debt for
                less than you owe. Make sure that you contact an attorney and discuss fully with them any
                alternative you might consider to bankruptcy, and then try to get from them a suggestion as to
                who to go to. A good bankruptcy attorney should be aware of all of the alternatives to
                bankruptcy and good advisers you can contact in your area to help you out.</p>
            <p>The worst possible thing you can do is choose an unscrupulous company, and fall deeper into debt.
                If their offer seems too good to be true, it probably is. Make sure you do research on any debt
                management or any debt consolidation company if you are interested in using one. Make sure they
                are reputable, have been in business a long time, and have a good track record and a history of
                satisfied clients.</p>



            <div class="row">
                <div class="col-12 my-5">
                    <form class="button_to" method="post" action="client_c_f_laws">
                        <input type="hidden" name="progress" value="70">
                        <button class="btn btn-primary">@lang('lang.back')</button>
                        <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
                        <input type="hidden" name="authenticity_token"
                            value="aNx60ZuEpZUfZlr2v9EW2vGmIATsphD1pXS6j837p6tEs3Zn8uA0KEI7kRotZ-mpDT6OymnRx_6pmXPe51NG5A"
                            autocomplete="off">
                    </form>
                </div>

            </div>

        </article>



        <div class="progress my-5" style="height:1.5rem;">

            <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

            <div class="progress-bar bg-success" role="progressbar" style="width: 70.0%"
                aria-valuemin="0" aria-valuemax="16" aria-valuenow="16">

            </div>

        </div>





    </div>


</main>
@endsection