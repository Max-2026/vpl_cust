<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-cart"></i>
                    <span class="menu-title">Buy Numbers</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('buy_number') }}">Buy Number</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('buy_golden_number') }}">Golden
                                Number</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                    aria-controls="ui-basic2">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">My Numbers</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('faxes') }}">My Faxes</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('view_all_numbers') }}">View All My
                                Numbers</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('call_forwarding') }}">Change Call
                                Forwarding</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
                    aria-controls="ui-basic3">
                    <i class="menu-icon mdi mdi-settings"></i>
                    <span class="menu-title">Advance Features</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('voice_messages') }}">Voice
                                Messages</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('voice_mail_setting') }}">Voice Mail
                                Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('call_recordings') }}">Call
                                Recording</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('ivr_setting') }}">IVR Settings</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('virtual_pbx_setting') }}">Virtual PBX
                                Settings</a></li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false"
                    aria-controls="ui-basic4">
                    <i class="menu-icon mdi mdi-credit-card"></i>
                    <span class="menu-title">Billings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('account_statement') }}">Account
                                Statements</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('add_talktime') }}">Add Talk Time</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('add_funds') }}">Add Funds</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('talktime') }}">Master Talk Time
                                Usage</a></li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false"
                    aria-controls="ui-basic6">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Profile</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic6">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('basic_info') }}">Basic Info</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('contact_info') }}">Contact
                                Info</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('credit_card_details') }}">Credit
                                Card Info</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('general_setting') }}">General
                                Setting</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('sms_setting') }}">SMS Setting</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('verified_number') }}">Verified
                                Number</a></li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('send_sms') }}">
                    <i class="menu-icon mdi mdi-message"></i>
                    <span class="menu-title">Send SMS</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('sms_inbox') }}">
                    <i class="menu-icon mdi mdi-inbox"></i>
                    <span class="menu-title">Inbox</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('report_problem') }}">
                    <i class="menu-icon fas fa-exclamation-circle"></i>
                    <span class="menu-title">Report A Problem</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('my_cart') }}">
                    <i class="menu-icon mdi mdi-shopping"></i>
                    <span class="menu-title">My Cart</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="menu-icon mdi mdi-logout"></i>
                    <span class="menu-title">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>



            <li class="nav-item nav-category">Golden Number</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buy_golden_number') }}">
                    <i class="menu-icon mdi mdi-star"></i>
                    <span class="menu-title">Golden Number Available</span>
                </a>
            </li>

            <li class="nav-item nav-category">Numbers In My Account:</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('buy_number') }}">
                    <i class="menu-icon mdi mdi-check-circle"></i>
                    <span class="menu-title">Add Number To Your Account</span>
                </a>
            </li>




        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
