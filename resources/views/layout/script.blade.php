<script>
   document.addEventListener("DOMContentLoaded", function(event) { 
       var scrollpos = localStorage.getItem('scrollpos');
       if (scrollpos) window.scrollTo(0, scrollpos);
   });

   window.onbeforeunload = function(e) {
       localStorage.setItem('scrollpos', window.scrollY);
   };
</script>
  
  
  <script src="{{asset('js')}}/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="{{asset('js')}}/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="{{asset('js')}}/bootstrap.js"></script>
      <!-- custom js -->
      <script src="{{asset('js')}}/custom.js"></script>

      <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>