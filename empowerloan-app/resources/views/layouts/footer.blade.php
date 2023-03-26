</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            class="d-none">
            @csrf
        </form>
        {{-- <a class="btn btn-primary" href="login.html">Logout</a> --}}
    </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('fronts/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('fronts/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('fronts/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('fronts/js/sb-admin-2.min.js') }}"></script>
 <!-- Page level plugins -->
 <script src="{{ asset('fronts/vendor/chart.js/Chart.min.js') }}"></script>

 <!-- Page level custom scripts -->
 <script src="{{ asset('fronts/js/demo/chart-area-demo.js') }}"></script>
 <script src="{{ asset('fronts/js/demo/chart-pie-demo.js') }}"></script>
 <script src="{{ asset('fronts/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('fronts/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('fronts/js/demo/datatables-demo.js') }}"></script>
<script>
    $(document).ready(function() {
    $('#searchbranch').on('change', function() {
       var branch_code = $(this).val();
       if(branch_code) {
           $.ajax({
               url: '/getOfficers/'+branch_code,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#searchofficer').empty();
                    $('#searchofficer').append('<option hidden>Choose Officer</option>'); 
                    $.each(data, function(key, searchofficer){
                        $('select[name="searchofficer"]').append('<option value="'+ searchofficer.emp_no +'">' + searchofficer.name+ '</option>');
                    });
                }else{
                    $('#searchofficer').empty();
                }
             }
           });
       }else{
         $('#searchofficer').empty();
       }
    });
    });
</script>
<script>
    $(document).ready(function() {
    $('#br_code').on('change', function() {
       var br_code = $(this).val();
       if(br_code) {
           $.ajax({
               url: '/getOfficer/'+br_code,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#lo').empty();
                    $('#lo').append('<option hidden>Choose Officer</option>'); 
                    $.each(data, function(key, lo){
                        $('select[name="emp_no"]').append('<option value="'+ lo.emp_no +'">' + lo.name+ '</option>');
                    });
                }else{
                    $('#lo').empty();
                }
             }
           });
       }else{
         $('#lo').empty();
       }
    });
    });
</script>
</body>

</html>