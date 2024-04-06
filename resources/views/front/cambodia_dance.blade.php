@extends('front.layout')

@push('styles')
<style>
    
</style>
@endpush

@section('content')
   <section classname="">
        <h3>Testing</h3>
   </section>
@endsection

@push('scripts')
	<script type="text/javascript">
	</script>
    <script>
        function setHref(path) {
            console.log(path)
            window.location.href = "{{url('rel')}}/" + path;
        }
   </script>
@endpush
