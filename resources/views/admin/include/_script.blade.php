<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/chart.morris.js') }}"></script>
<!-- Font Awesome 6 --->
<script src="{{ asset('admin/assets/font-awesome-6/all.min.js') }}"></script>

<!-------- Dropify Image ----->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js'></script>
<script src="{{ asset('admin/assets/js/dropify.js') }}"></script>

<!-------- Toogle Button ------->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="{{ asset('admin/assets/js/toogle/change_status.js') }}"></script>

<!-------- Datatable -------->
<script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

<!--------- Summernote Bootstrap 4 --------->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!--------- Toaster Message ------->
<script src="{{ asset('admin/assets/toaster/js/jquery.toast.js') }}"></script>

<script src="{{ asset('admin/assets/js/script.js') }}"></script>

<!------- Create Message ------->
@if (session('create_message')){
<script>
    $.toast({
        heading: 'Created!',
        text: '{{ session('create_message') }}',
        position: 'top-right',
        bgColor: '#009688',
        stack: false
    })
</script>
}
@endif

<!------- Update Message ------->
@if (session('update_message')){
<script>
    $.toast({
        heading: 'Updated!',
        text: '{{ session('update_message') }}',
        position: 'top-right',
        bgColor: '#28A745',
        stack: false
    })
</script>
}
@endif

<!------- Delete Message ------->
@if (session('delete_message')){
<script>
    $.toast({
        heading: 'Deleted!',
        text: '{{ session('delete_message') }}',
        position: 'top-right',
        bgColor: 'red',
        stack: false
    })
</script>
}
@endif

<!-- Summernote -->
<script>
    $('#summernote_house').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 150
    });
</script>

<script>
    $('#summernote_overview').summernote({
        placeholder: 'Overview',
        tabsize: 2,
        height: 150
    });
</script>

<script>
    $('#summernote_information').summernote({
        placeholder: 'Information',
        tabsize: 2,
        height: 150
    });
</script>
</html>

