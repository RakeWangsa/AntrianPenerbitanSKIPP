<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('partials.navbar')
        @include('partials.sidebar')

        <main id="main" class="main">
            @yield('container')
        </main>
        @include('layouts.footer')
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="{{asset('admintemplate/js/apexcharts.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/chart.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/echarts.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/quill.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/simple-datatables.js')}}"></script>
        <script src="{{asset('admintemplate/js/tinymce.min.js')}}"></script>
        <script src="{{asset('admintemplate/js/validate.js')}}"></script>
        <script src="{{asset('admintemplate/js/main.js')}}"></script>       
        <script src="{{asset('admintemplate/js/calendar.js')}}"></script>       
   </body>
</html>