$(document).ready(function(){
      $(document).scroll(function () {
            var $nav = $("#navbarGuest");
            $nav.toggleClass('bg-white shadow-sm-red', $(this).scrollTop() > $nav.height());
      });
      // document.onreadystatechange = function () {
      //       var state = document.readyState
      //       if (state == 'interactive') {
      //             document.getElementById('body').style.overflowX="hidden";
      //             document.getElementById('body').style.overflow="hidden";
      //             document.getElementById('loading').style.display="block";
      //             document.getElementById('app').style.display="none";
      //             console.log("loading")
      //       } else if (state == 'complete') {
      //             console.log("loading_complete")
      //             let loading_complete = document.getElementById('loading');
      //             setTimeout(function(){
      //                   console.log('jalan')
      //                   document.getElementById('body').style.overflow="auto";
      //                   document.getElementById('body').style.overflowX="hidden";
      //                   loading_complete.style.display="none";
      //                   document.getElementById('app').style.display="block";
      //             },1500);
      //       };
      // }
            
})

