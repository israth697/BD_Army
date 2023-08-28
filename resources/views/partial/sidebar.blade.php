<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Guli korbo</div>
                            @if(auth()->user()->role =='admin')
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>   
                            <a class="nav-link" href="{{route('Armstype')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Arms Item
                            </a>
                             
                            
                            <a class="nav-link" href="{{route('Purchase')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Purchase
                            </a> 
                            <a class="nav-link" href="{{route('soilders.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Soilders
                            </a> 
                            <a class="nav-link" href="{{route('rank.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Rank
                            </a> 

                            <a class="nav-link" href="{{route('vendor.supply')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Vendor
                            </a>
                            <a class="nav-link" href="{{route('tender.Report')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Report
                            </a>
                            <a class="nav-link" href="{{route('Armsetup')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Round Uses
                            </a>
                        @endif
                            
                            @if(auth()->user()->role =='admin' ||auth()->user()->role =='commander' || auth()->user()->role =='dutyofficer' )
                            <a class="nav-link" href="{{route('officer.permit')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Authorised Officer
                            </a>
                           
                            <a class="nav-link" href="{{route('weapon.stock')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stock
                            </a>
                            
                            <a class="nav-link" href="{{route('damage.stock')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Damage Stock
                            </a>
                            <a class="nav-link" href="{{route('distribution.arms')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Distribution
                            </a>
                            @endif
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        MOULY SHEIKH
                    </div>
                </nav>