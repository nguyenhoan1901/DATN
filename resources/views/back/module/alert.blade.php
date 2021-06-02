	<!-- Theme JS files -->
	<script src="back/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
<script>
    @if(session('success'))
    $.jGrowl('{{ session('success') }}', {
        header: 'Well done!',
        theme: 'bg-success'
    });
    @endif

    @if(session('warning'))
    $.jGrowl('{{session('warning')}}', {
        header: 'Cảnh báo!',
        theme: 'bg-warning'
    });
    @endif


    @if(session('error'))
    $.jGrowl('{{ session('error') }}', {
        header: 'Thất bại!',
        theme: 'bg-danger'
    });
    @endif
</script>
