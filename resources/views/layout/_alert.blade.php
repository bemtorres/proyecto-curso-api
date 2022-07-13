@if (session('success'))
<script>
    Swal.fire("{{ session('success') }}",'','success');
</script>
@endif

@if (session('error'))
<script>
    Swal.fire("{{ session('error') }}",'','error');
</script>
@endif

@if (session('warning'))
<script>
    Swal.fire("{{ session('warning') }}",'','warning');
</script>
@endif

@if (session('info'))
<script>
    Swal.fire("{{ session('info') }}",'','info');
</script>
@endif
