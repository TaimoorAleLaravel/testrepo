@extends('layout.app')
@section('main')
    <main class="bg-white min-vh-100">
        <!---------------------------------------------------- English --------------------------------------------------->
        <div class="container">
            <article class="course reason_explained">
                <div class="mt-3">
                    <h2 style="color: #000b57">Reason for Seeking Credit Counseling Explained</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                            <li class="breadcrumb-item"><a href="">Reason for Seeking Credit Counseling
                                    Explained</a></li>
                        </ol>
                    </nav>
                </div>

                <br><br>
                @if ($courseReason->garnishment === 1)
                    <h3>Garnishment</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/garnishment.jpg">
                    <p>Garnishment is when a creditor seizes wages paid by your employer to satisfy a debt that you owe.
                        Credit
                        counseling cannot really help stop a garnishment. If you are being garnished, bankruptcy can help
                        stop
                        that garnishment.</p><br><br>
                @endif
                @if ($courseReason->repossession === 1)
                    <h3>Repossession</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/repossesion.jpg">
                    <p>A repossession occurs when a creditor seizes collateral (such as a vehicle) which is securing a loan.
                        Bankruptcy can help stop certain types of repossessions, but the timing is very important. If you
                        have
                        just had a vehicle repossessed, for example, you should see a bankruptcy attorney immediately for
                        further instruction.</p><br><br>
                @endif
                @if ($courseReason->foreclosure === 1)
                    <h3>Foreclosure</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/foreclouser.jpg">
                    <p>A foreclosure is the process of taking back a piece of mortgaged property as a result of someone's
                        failing to keep current with the mortgage payments. Credit counseling cannot stop a foreclosure. A
                        bankruptcy, specifically a special type of bankruptcy called a Chapter 13 can. See a bankruptcy
                        attorney
                        immediately if your property is in danger of foreclosure. The bankruptcy generally must be filed
                        BEFORE
                        the sale date to stop the foreclosure.</p><br><br>
                @endif
                @if ($courseReason->lawsuit === 1)
                    <h3>Lawsuit</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/lawsuit.jpg">
                    <p>Lawsuits are initiated by creditors who want to recover debts owed to them by the debtor. If you have
                        been sued, it is very important to keep all of the paperwork you receive so that your bankruptcy
                        attorney can make copies of it and can analyze it. Credit counseling cannot stop lawsuits. Filing
                        bankruptcy can stop those lawsuits.</p><br><br>
                @endif
                @if ($courseReason->illness_disability === 1)
                    <h3>Illness / Disability</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/Illness_Disability.jpg">
                    <p>Illness and Disability are some of the most prevalent reasons that people are forced into filing
                        bankruptcy. Often lack of medical insurance and an unexpected medical issue lead to a recipe for
                        disaster. You should not feel alone, if the debt is significant, bankruptcy may allow a way to wipe
                        the
                        slate clean.</p><br><br>
                @endif
                @if ($courseReason->divorce === 1)
                    <h3>Divorce</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/Divorce.jpg">
                    <p>Divorce is another leading cause of bankruptcy. The divorce judge splits up not only the assets, but
                        the
                        liabilities as well. For example, even if the husband was the one responsible for racking up all of
                        the
                        debt, the wife may be stuck being responsible for half the debt (and vice-versa). Divorce has
                        special
                        implications if you file bankruptcy, these implications should be discussed with a qualified
                        bankruptcy
                        attorney. Make sure you mention to them if you are recently divorced, or if you are planning on
                        getting
                        a divorce. While being stuck with debt that may not be yours might not be pleasant, bankruptcy can
                        provide a fresh start.</p><br><br>
                @endif
                @if ($courseReason->Job_Loss === 1)
                    <h3>Job Loss</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/job loss.jpg">
                    <p>If you lose your job, and you have significant debt, get in to see a bankruptcy attorney. Credit
                        counseling requires that you have a steady income to maintain a repayment plan, something that just
                        is
                        not possible if you have lost your job.</p><br><br>
                @endif
                @if ($courseReason->c_c_debt === 1 )
                    <h3>Credit Card Debt</h3><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/Credit_card.jpg">
                    <p>Do not be ashamed of being honest with a bankruptcy attorney or credit counselor regarding the true
                        amount of your credit card debt. They will work hard to help you. Often, if the amount seems
                        staggering,
                        clients are embarrassed to divulge the number. Help your attorney or credit counselor help you by
                        being
                        honest. It often helps to create a list of all of the people you owe, and next to their name put the
                        amount, and then total it all at the end. That debt list will be an invaluable tool that can help
                        your
                        attorney or credit counselor get an accurate idea of your debt picture.</p><br><br>
                @endif
                @if ($courseReason->g_debt === 1 )
                <h3>Gambling Debt</h3><img alt="Image: Video" class="videostill border img-fluid"
                    src="https://completecreditcounseling.org/img/Gambling.jpg">
                <p>If you have gambling debt, you may need more than just financial help. Gambling Debt is often a sign of
                    an underlying addiction. Overcoming a gambling addiction or problem is never easy. But recovery is
                    possible if you stick with treatment and seek support. When you are ready, for advice or a treatment
                    referral, call the National Council on Problem Gambling's confidential hotline at 1-800-522-4700.</p>
                <br><br>
                @endif
                @if ($courseReason->other === 1 )
                <h3>Other</h3><img alt="Image: Video" class="videostill border img-fluid"
                    src="https://completecreditcounseling.org/img/other.jpg">
                <p>If you have one or more reasons for seeking advice from a credit counselor that were not listed, please
                    remember those reasons so when you chat with the credit counselor at the end of this session you can let
                    them know.</p>
                @endif
                <div class="row">
                    <div class="col-12 my-5">
                        <form class="button_to" method="post" action="{{route('form.seeking_reason_explain',['locale' => app()->getLocale() ])}}">
                            @csrf
                            <input type="hidden" name="progress" value="20">
                            <a href="{{ route('course.seeking_reason', ['locale' => app()->getLocale()]) }}"
                                class="btn btn-primary">BACK</a>
                            <input type="submit" name="commit_exp" value="CONTINUE" class="btn btn-primary"
                                data-disable-with="CONTINUE">
                            <!-- <input class="btn btn-primary" type="submit" name="commit_exp" value="Continue the Counseling Session"> -->
                        </form>
                    </div>
                </div>
            </article>
            <div class="progress my-5" style="height:1.5rem;">
                <div class="progress-bar bg-dark" style="width:5rem">Progress</div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20.0%" aria-valuemin="0"
                    aria-valuemax="16" aria-valuenow="16">
                </div>
            </div>
    </main>
@endsection
