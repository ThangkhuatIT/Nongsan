@if (session('error'))
<script>
    swal("Không thành công!", "{{ session('error') }}", "warning");
</script>
@endif
@if (session('success'))
<script>
    swal("Thành công!", "{{ session('success') }}", "success");
</script>
@endif
