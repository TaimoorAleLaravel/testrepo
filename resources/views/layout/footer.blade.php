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
                                               @lang('footer.sec1')

                                                <!--<a href="#"><//?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 's') ? 'aprobado en TODOS los estados y territorios de EE. UU.' : 'approved in ALL U.S. States and Territories' ?></a>-->
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 text-white">
                                            Copyright ©2022 COMPLETE CREDIT COUNSELING&nbsp;INC. Todos los derechos
                                            reservados.
                                            <br>
                                            Complete Credit Counseling es una marca registrada de COMPLETE CREDIT
                                            COUNSELING&nbsp;INC.
                                            701 Rte 70 W. Marlton, NJ 08053
                                            <br>
                                            (833) 367-7130
                                            <br>
                                            cccounseling@completecreditc.com
                                        </div>
                                    </div>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}">Client</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ route('counsler.login', ['locale' => app()->getLocale()]) }}">Counselor</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}">Attorney</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ route('admin.login', ['locale' => app()->getLocale()]) }}">Admin</a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </footer>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>