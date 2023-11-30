@include('navbar')
@include('sidebar')

<!-- Dashboard -->
@yield('dashboard')
<!-- End -->

<!-- My Number -->
@yield('my_faxes')
@yield('view_all_my_number')
@yield('change_call_forwarding')
@yield('pakage_plan')
@yield('plan_detail')
@yield('call_log')
<!-- End -->


<!-- Profile -->
@yield('basic_info')
@yield('contact_info')
@yield('credit_info')
@yield('general_setting')
@yield('sms_setting')
@yield('verified_number')

<!-- End -->


<!-- Advanced Feature -->
@yield('callrecording')
@yield('IVR_manager')
@yield('PBXsetting')
@yield('sendsms')
@yield('smsinbox')
@yield('UploadPBXIVR')
@yield('virtualpbx')
@yield('voicemailsetting')
@yield('voicemessages')
<!-- End -->

<!-- Billings -->
@yield('accountstatment')
@yield('addfunds')
@yield('addtalktime')
@yield('creditcardprocess')
@yield('mastertalktime')
<!-- End -->

<!-- Buy number -->
@yield('buy_number')
@yield('golden_number')
<!-- End -->

<!-- My Cart -->
@yield('my_cart')
<!-- End -->

<!-- Number in my account -->
@yield('numbers_in_my_account')
@yield('call_forwarding')
@yield('monthly_recuring_charges')

<!-- End -->

<!-- send sms -->
@yield('send_sms')
<!-- end -->

<!-- sms inbox -->
@yield('sms_inbox')
<!-- end -->


<!-- Report problem -->
@yield('report_problem')
<!-- end -->




















@include('footer')