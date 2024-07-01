@extends('layout.app')
@section('main')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-5e46REXv9JmX4SW1twxWtOw6xXzcnYs+T9kR1D5TpFAnSKDwA2AVK8fPf7FojTRhX6U+/a0HbS9sYy4WdQ/ztA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <main class="bg-white min-vh-100">
        <style>
            .detail {
                display: none;
            }

            .category:hover~.details .detail.c_1,
            .category:hover~.details .detail.c_2,
            .category:hover~.details .detail.c_3,
            .category:hover~.details .detail.c_4,
            .category:hover~.details .detail.c_5,
            .category:hover~.details .detail.c_6,
            .category:hover~.details .detail.c_7,
            .category:hover~.details .detail.c_8,
            .category:hover~.details .detail.c_9,
            .category:hover~.details .detail.c_10 {
                display: none;
            }

            .category[data-category="c_1"]:hover~.details .detail.c_1,
            .category[data-category="c_2"]:hover~.details .detail.c_2,
            .category[data-category="c_3"]:hover~.details .detail.c_3,
            .category[data-category="c_4"]:hover~.details .detail.c_4,
            .category[data-category="c_5"]:hover~.details .detail.c_5,
            .category[data-category="c_6"]:hover~.details .detail.c_6,
            .category[data-category="c_7"]:hover~.details .detail.c_7,
            .category[data-category="c_8"]:hover~.details .detail.c_8,
            .category[data-category="c_9"]:hover~.details .detail.c_9,
            .category[data-category="c_10"]:hover~.details .detail.c_10 {
                display: table-row;
            }
        </style>
        <!---------------------------------------------------- English --------------------------------------------------->
        <div class="container">
            <article class="course budget_chart">

                <div class="mt-3">


                    <h2 style="color: #000b57">Budget Chart</h2>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb mt-3">

                            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

                            <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>

                            <li class="breadcrumb-item"><a href="">Budget Chart</a></li>

                        </ol>

                    </nav>

                </div>



                <p><img alt="Image: Video" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/budget Chart.jpg">
                </p>




                <p>Now that you have completed your budget, the pie-chart illustrates what percentage of your income
                    has been spent on these various categories. In the table below, you can see your monthly
                    expenses in each category.</p>
                <p>The Expenses column shows you the amount of your monthly expenditure in that category. The Normal
                    Percentage column shows you what percentage of your income you should be spending in each of the
                    categories and, the Your Percentage column shows you the percent you are currently spending.</p>
                <p>Rows marked in red indicate that you are overspending in those categories. If the rows are marked
                    in green, that means you are spending within the normal percentage in those categories.</p>



                <h3>Annual Income and Monthly Expenditures by Category</h3>


                <p class="lead">

                </p>
                <h3>Total Annual Net Income: $100</h3>

                <p></p>
                <div class="d-flex">
                    <p class="lead">

                    </p>
                    <h5>Your Net Income: $100</h5>

                    <p></p>
                    <p class="lead">

                    </p>
                    <h5 class="pl-5">Your Spouse’s Net Income: $0</h5>

                    <p></p>
                </div>


                <div class="row">
                    <div class="col-md-6 ml-3 mb-3">
                        <table class="table table-sm table-hover budget top">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Expenses</th>
                                    <th scope="col">Normal %</th>
                                    <th scope="col">Your %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="category" data-category="c_1">
                                    <td>Housing</td>
                                    <td>$0</td>
                                    <td class="text-secondary">25%—35%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_5">
                                    <td>Health</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—15%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_6">
                                    <td>Education</td>
                                    <td>$0</td>
                                    <td class="text-secondary">2%—5%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_2">
                                    <td>Utilities</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—10%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_4">
                                    <td>Transportation</td>
                                    <td>$0</td>
                                    <td class="text-secondary">10%—15%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_7">
                                    <td>Entertainment</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—10%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_8">
                                    <td>Personal</td>
                                    <td>$0</td>
                                    <td class="text-secondary">7%—17%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_10">
                                    <td>Loans and Credit Cards</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—10%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_9">
                                    <td>Savings / Investment</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—15%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                                <tr class="category" data-category="c_3">
                                    <td>Food</td>
                                    <td>$0</td>
                                    <td class="text-secondary">5%—15%</td>
                                    <td class="table-success">0%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-secondary">Place mouse pointer over a category row in the left table in
                            order to get detailed expenditures by subcategory displayed in the right table.</p>
                        <p></p>
                    </div>

                    <div class="col-md-5 ml-3 mb-3">
                        <table class="table table-sm budget details">
                            <thead>
                                <tr>
                                    <th scope="col">Subcategory</th>
                                    <th scope="col">Expenses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="detail c_1">
                                    <td>Mortgage or Rent</td>
                                    <td> 
                                        ${{ $budget->rent }}
                                    </td>
                                </tr>
                                <tr class="detail c_1">
                                    <td>Condo</td>
                                    <td>
                                        ${{ $budget->condo }}
                                    </td>
                                </tr>
                                <tr class="detail c_1">
                                    <td>Maintenance</td>
                                    <td>${{ $budget->maintenance }}
                                    </td>
                                </tr>
                                <tr class="detail c_1">
                                    <td>Property Taxes</td>
                                    <td>${{ $budget->pro_tax }}</td>
                                </tr>
                                <tr class="detail c_1">
                                    <td>Insurance</td>
                                    <td>${{ $budget->housing_insurance }}</td>
                                </tr>
                                <tr class="detail c_1">
                                    <td>Furniture and appliances</td>
                                    <td>${{ $budget->fur_app }}</td>
                                </tr>
                                <tr class="detail c_5">
                                    <td>Doctor(s)</td>
                                    <td>${{ $budget->doctor }}</td>
                                </tr>
                                <tr class="detail c_5">
                                    <td>Dentist(s)</td>
                                    <td>${{ $budget->dentist }}</td>
                                </tr>
                                <tr class="detail c_5">
                                    <td>Medications</td>
                                    <td>${{ $budget->medications }}</td>
                                </tr>
                                <tr class="detail c_5">
                                    <td>Insurance</td>
                                    <td>${{ $budget->health_insurance }}</td>
                                </tr>
                                <tr class="detail c_6">
                                    <td>Tuition/School fees</td>
                                    <td>${{ $budget->school_fee }}</td>
                                </tr>
                                <tr class="detail c_6">
                                    <td>Books and Supplies</td>
                                    <td>${{ $budget->books }}</td>
                                </tr>
                                <tr class="detail c_6">
                                    <td>School activities</td>
                                    <td>${{ $budget->school_activities }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Gas</td>
                                    <td>${{ $budget->gas }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Electricity</td>
                                    <td>${{ $budget->electricity }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Water</td>
                                    <td>${{ $budget->water }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Garbage</td>
                                    <td>${{ $budget->garbage }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Sewer</td>
                                    <td>${{ $budget->sewer }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Telephone</td>
                                    <td>${{ $budget->telephone }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Cell Phone</td>
                                    <td>${{ $budget->cell_phone }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Cable Television</td>
                                    <td>${{ $budget->cable }}</td>
                                </tr>
                                <tr class="detail c_2">
                                    <td>Internet</td>
                                    <td>${{ $budget->internet }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Automobile Payment</td>
                                    <td>${{ $budget->automobile }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Licensing</td>
                                    <td>${{ $budget->license }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Insurance</td>
                                    <td>${{ $budget->transport_insurance }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Fuel</td>
                                    <td>${{ $budget->gasoline }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Repairs</td>
                                    <td>${{ $budget->transport_maintenance }}</td>
                                </tr>
                                <tr class="detail c_4">
                                    <td>Public Transport</td>
                                    <td>${{ $budget->public_trans }}</td>
                                </tr>
                                <tr class="detail c_7">
                                    <td>Movies</td>
                                    <td>${{ $budget->movies_concerts }}</td>
                                </tr>
                                <tr class="detail c_7">
                                    <td>Dining</td>
                                    <td>${{ $budget->restaurent }}</td>
                                </tr>
                                <tr class="detail c_7">
                                    <td>Party</td>
                                    <td>${{ $budget->gifts }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Clothing</td>
                                    <td>${{ $budget->clothing }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Laundry/Dry Cleaning</td>
                                    <td>${{ $budget->laundery }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Membership Dues</td>
                                    <td>${{ $budget->membership }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Donations</td>
                                    <td>${{ $budget->donations }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Allowances</td>
                                    {{-- <td>${{ $budget->donations }}</td> --}}

                                    <td>${{ $budget->allowance }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Child support</td>
                                    <td>${{ $budget->child_support }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Childcare</td>
                                    <td>${{ $budget->child_care }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Pets</td>
                                    <td>${{ $budget->pets }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Cosmetics</td>
                                    <td>${{ $budget->cosmetics }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Haircuts</td>
                                    <td>${{ $budget->haircuts }}</td>
                                </tr>
                                <tr class="detail c_8">
                                    <td>Other</td>
                                    <td>${{ $budget->personal_other }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Student Loan</td>
                                    <td>${{ $budget->std_loan }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Gas Card</td>
                                    <td>${{ $budget->gas_card }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Department store card</td>
                                    <td>${{ $budget->ds_card }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 1</td>
                                    <td>${{ $budget->cc_1 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 2</td>
                                    <td>${{ $budget->cc_2 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 3</td>
                                    <td>${{ $budget->cc_3 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 4</td>
                                    <td>${{ $budget->cc_4 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 5</td>
                                    <td>${{ $budget->cc_5 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 6</td>
                                    <td>${{ $budget->cc_6 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Credit Card 7</td>
                                    <td>${{ $budget->cc_7 }}</td>
                                </tr>
                                <tr class="detail c_10">
                                    <td>Other</td>
                                    <td>${{ $budget->l_cc_other }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>Savings accounts</td>
                                    <td>${{ $budget->savings }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>401(k)</td>
                                    <td>${{ $budget->s_i_401 }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>Stocks</td>
                                    <td>${{ $budget->stocks }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>Mutual Funds</td>
                                    <td>${{ $budget->mutual_funds }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>Bonds</td>
                                    <td>${{ $budget->bonds }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>IRA(s)</td>
                                    <td>${{ $budget->ira }}</td>
                                </tr>
                                <tr class="detail c_9">
                                    <td>Other</td>
                                    <td>${{ $budget->s_i_other }}</td>
                                </tr>
                                <tr class="detail c_3">
                                    <td>Groceries</td>
                                    <td>${{ $budget->groceries }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="ml-3">Structure of Expenditures</h3>
                    <h4 class="ml-3">Annual expenses ${{ $budget->annual_expenses }}</h4>
                    <div class="col-md-6 col-lg-5 col-xl-4 ml-3 mb-3">
    
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
    
                                        0.05%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Health</td>
    
                                    <td class="text-end">
    
                                        0.02%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Education</td>
    
                                    <td class="text-end">
    
                                        0.02%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Utilities</td>
    
                                    <td class="text-end">
    
                                        0.83%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Transportation</td>
    
                                    <td class="text-end">
    
                                        0.16%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Entertainment</td>
    
                                    <td class="text-end">
    
                                        0.16%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Personal</td>
    
                                    <td class="text-end">
    
                                        0.25%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Loans and Credit Cards</td>
    
                                    <td class="text-end">
    
                                        0.37%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Savings / Investment</td>
    
                                    <td class="text-end">
    
                                        0.28%
    
                                    </td>
    
                                </tr>
    
                                <tr>
    
                                    <td>Food</td>
    
                                    <td class="text-end">
    
                                        0.01%
    
                                    </td>
    
                                </tr>
    
                            </tbody>
    
                        </table>
                        <a class="btn btn-danger text-dark" href="{{route('course.editBudget' , ['locale' => app()->getLocale() ])}}">Edit Budget</a>
    
                    </div>
                    <div class="row">
                        <div class="col-12 my-5">
                            <form class="button_to" method="get" action="{{route('course.visual_identification',['locale' => app()->getLocale() ])}}">
                                @csrf
                                <input type="hidden" name="progress" value="20">
                                <a href="{{ route('course.budget_calculator', ['locale' => app()->getLocale()]) }}"
                                    class="btn btn-primary">BACK</a>
                                <input type="submit" name="commit_exp" value="CONTINUE" class="btn btn-primary"
                                    data-disable-with="CONTINUE">
                                <!-- <input class="btn btn-primary" type="submit" name="commit_exp" value="Continue the Counseling Session"> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 budget_chart">
                        <div id="canvas-holder">
                            <div id="chart-area"></div>
                        </div>
                    </div>
                    
                </div>




            </article>



            <div class="progress my-5" style="height:1.5rem;">

                <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

                <div class="progress-bar bg-success" role="progressbar" style="width: 50.0%" aria-valuemin="0"
                    aria-valuemax="16" aria-valuenow="16">

                </div>

            </div>





           
                <script>
                    var xValues = ["Housing", "Health", "Education", "Utilities", "Transportation", "Entertainment", "Personal",
                        "Loans and Credit Cards", "Savings / Investment", "Food"
                    ];
            
                    var yValues = [800, 500, 300, 200, 0, 0, 0, 0, 0, 0];
            
                    var barColors = [
                        "#1395BA", "#117899", "#0F5B78", "#0D3C55", "#C02E1D", "#007bff", "#e8c3b9", "#EF8B2C", "#ECAA38", "#EBC844"
                    ];
            
                    var myChart = new Chart(document.getElementById('chart-area').getContext('2d'), {
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
            
                    (function () {
                        document.querySelectorAll('table.details tbody tr').forEach(el => el.classList.add('d-none'));
            
                        document.querySelectorAll('table.top tbody tr').forEach(el => {
                            el.addEventListener('mouseover', function () {
                                document.querySelectorAll('table.details tbody tr.' + this.id).forEach(el => el
                                    .classList.toggle('d-none'));
                            });
            
                            el.addEventListener('mouseout', function () {
                                document.querySelectorAll('table.details tbody tr').forEach(el => el.classList.add(
                                    'd-none'));
                            });
            
                        });
                    })();
                </script>


        </div>


    </main>

    <script>
        const detailsMap = {};
        for (let i = 1; i <= 10; i++) {
            detailsMap[`c_${i}`] = document.querySelectorAll(`.detail.c_${i}`);
        }

        const categories = document.querySelectorAll('.category');
        categories.forEach(category => {
            category.addEventListener('mouseenter', () => {
                const categoryClass = category.getAttribute('data-category');
                Object.keys(detailsMap).forEach(key => {
                    detailsMap[key].forEach(detail => detail.style.display = 'none');
                });
                detailsMap[categoryClass].forEach(detail => detail.style.display = 'table-row');
            });
            category.addEventListener('mouseleave', () => {
                const categoryClass = category.getAttribute('data-category');
                detailsMap[categoryClass].forEach(detail => detail.style.display = 'none');
            });
        });
    </script>
@endsection
