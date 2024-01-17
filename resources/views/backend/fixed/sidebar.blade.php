<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">

                            </div>

                            @if (auth()->user()->role=='admin')
                            <a class="nav-link" href="{{url('/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="{{route('index.volunteer')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Volunteers
                            </a>

                            <a class="nav-link" href="{{route('category.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Crisis Categories
                            </a>


                            <a class="nav-link" href="{{route('index.crisis')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Crisis
                            </a>

                              <a class="nav-link" href="{{route('location.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Location
                            </a>

                              <a class="nav-link" href="{{route('donation.proposal')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Donation Proposal
                            </a>



                            <a class="nav-link" href="{{route('index.donor')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Donor Details
                            </a>


                            <a class="nav-link" href="{{route('index.expense')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Expense
                            </a>

                             <a class="nav-link" href="{{route('crisis.report')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Crisis  Report
                            </a>
                            @endif

                            <a class="nav-link" href="{{route('index.expense_categories')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Expense Categories
                            </a>










                            </div>

                </nav>
            </div>
