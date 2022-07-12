
@include('config.__partials.header')
@include('config.__partials.siderBar')  

   

    <!--Container Main start-->
    <div class="height-100 bg-light p-4"  >    
        <div class="app">
            @yield('content')          
        </div>     
    </div>
   


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='{{ asset('js/config/templates.js') }}'></script>
<script src='{{ asset('js/config/main.js') }}'>
</script>