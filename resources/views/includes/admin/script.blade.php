<!-- Bootstrap core JavaScript-->

<script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- sweet alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // function Delete(id) {
    //     var id = id;
    //     var token = $("meta[name='csrf-token']").attr("content");
    //     swal.fire({
    //         title: "APAKAH KAMU YAKIN ?",
    //         text: "INGIN MENGHAPUS DATA INI!",
    //         icon: "warning",
    //         buttons: [
    //             'TIDAK',
    //             'YA'
    //         ],
    //         dangerMode: true,
    //     }).then(function(isConfirm) {
    //         if (isConfirm) {
    //             //ajax delete
    //             jQuery.ajax({
    //                 url: "{{ route('travel-package.index') }}/" + id,
    //                 data: {
    //                     "id": id,
    //                     "_token": token
    //                 },
    //                 type: 'DELETE',
    //                 success: function(response) {
    //                     if (response.status == "success") {
    //                         swal.fire({
    //                             title: 'BERHASIL!',
    //                             text: 'DATA BERHASIL DIHAPUS!',
    //                             icon: 'success',
    //                             timer: 1000,
    //                             showConfirmButton: false,
    //                             showCancelButton: false,
    //                             buttons: false,
    //                         }).then(function() {
    //                             location.reload();
    //                         });
    //                     } else {
    //                         swal.fire({
    //                             title: 'GAGAL!',
    //                             text: 'DATA GAGAL DIHAPUS!',
    //                             icon: 'error',
    //                             timer: 1000,
    //                             showConfirmButton: false,
    //                             showCancelButton: false,
    //                             buttons: false,
    //                         }).then(function() {
    //                             location.reload();
    //                         });
    //                     }
    //                 }
    //             });
    //         } else {
    //             return true;
    //         }
    //     })
    // }
</script>


<!-- Core plugin JavaScript-->
<script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('backend/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ url('backend/js/demo/chart-pie-demo.js') }}"></script>
