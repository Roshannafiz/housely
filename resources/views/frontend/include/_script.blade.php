<!-- JAVASCRIPTS -->
<!-- Font Awesome 6 --->
<script src="{{ asset('frontend/assets/font-awesome-6/all.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="{{ asset('frontend/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/tobii/js/tobii.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.init.js') }}"></script>

<!--------- For Toaster Message ------->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/assets/toaster/js/jquery.toast.js') }}"></script>

<script src="{{ asset('frontend/assets/js/app.js') }}"></script>
<!-- JAVASCRIPTS -->


<!------- Booking Message ------->
@if (session('booking_message')){
<script>
    $.toast({
        heading: 'Booked!',
        text: '{{ session('booking_message') }}',
        position: 'top-right',
        bgColor: '#16A34A',
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
</body>
</html>
