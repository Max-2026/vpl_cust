<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/')}}">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-cart"></i>
        <span class="menu-title">Buy Numbers</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('Buy_Number.buynumber') }}">Buy Number</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Buy_Number.goldennumber')}}">Golden Number</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">My Numbers</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('my_number.Myfaxes')}}">My Faxes</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('my_number.viewallmynumber')}}">View All My Numbers</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('my_number.changeforwarding')}}">Change Call Forwarding</a></li>
        </ul>"    </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
        <i class="menu-icon mdi mdi-settings"></i>
        <span class="menu-title">Advance Features</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic3">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.voicemessages')}}">Voice Messages</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.voicemail')}}">Voice Mail Settings</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.callrecording')}}">Call Recording</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.ivrmanager')}}">IVR Manager</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.virtualpbx')}}">Virtual PBX</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.smsinbox')}}">SMS Inbox</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('advance_feature.sendsms')}}">Send SMS</a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
        <i class="menu-icon mdi mdi-credit-card"></i>
        <span class="menu-title">Billings</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic4">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('Billings.accountstatment')}}">Account Statements</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Billings.changecreditcard')}}">Change Credit Card Information</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Billings.addtalktime')}}">Add Talk Time</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Billings.addfunds')}}">Add Funds</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Billings.mastertalktime')}}">Master Talk Time Usage</a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">Profile</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic6">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.basicinfo')}}">Basic Info</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.contactinfo')}}">Contact Info</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.creditcardinfo')}}">Credit Card Info</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.generalsetting')}}">General Setting</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.smssetting')}}">SMS Setting</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Profile.verified_number')}}">Verified Number</a></li>
        </ul>
      </div>
    </li>



    



    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
        <i class="menu-icon mdi mdi-inbox"></i>
        <span class="menu-title">Inbox</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic5">
        <ul class="nav flex-column sub-menu">
<<<<<<< Updated upstream
          <li class="nav-item"> <a class="nav-link" href="{{ route('Inbox.msginbox')}}">Message Inbox</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Inbox.announcemnets')}}">Announcements</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Inbox.reportproblem')}}">Report A Problem</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Inbox.makewish')}}">Make A Wish</a></li>
=======
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Message Inbox</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Announcements</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Report A Problem</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Make A Wish</a></li>
>>>>>>> Stashed changes
        </ul>
      </div>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="{{ route('cart.mycart')}}">
        <i class="menu-icon mdi mdi-shopping"></i>
        <span class="menu-title">My Cart</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class=" menu-icon mdi mdi-logout"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>


    
    <li class="nav-item nav-category">Golden Number</li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="menu-icon mdi mdi-star"></i>
        <span class="menu-title">Golden Number Available</span>
      </a>
    </li>



    
    
    
    
    <li class="nav-item nav-category">Numbers In My Account:</li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('numbers_in_my_account.numbers_in_my_account')}}">
        <i class="menu-icon mdi mdi-check-circle"></i>
        <span class="menu-title">88592753892</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('Buy_Number.buynumber')}}">
        <i class="menu-icon mdi mdi-check-circle"></i>
        <span class="menu-title">Add Number To Your Account</span>
      </a>
    </li>
    
    
    
    
  </ul>
</nav>
       <!-- partial -->
       <div class="main-panel">
        