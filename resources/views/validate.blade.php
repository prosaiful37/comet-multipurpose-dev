<script>

@if($errors -> any())

    swal('validation Errors', '{{ $errors -> first() }}', 'warning');
    
@endif
@if(Session::has('success') )
    
    swal('Success', '{{ Session::get('success') }}', 'success');
    

@endif

</script>