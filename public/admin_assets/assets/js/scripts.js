(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
  $(document).ready(function(){
    // set default token each ajax
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // custom input file
    $('.custom-file-input').on('change',function(){
        let fileName = $(this).val().split('\\').pop(); 
        $(this).next('.form-control-file').addClass("selected").html(fileName);
    });

    // set active menu
    $(function(){
      if($("#main-menu-navigation a").length > 0){
        var url = window.location.href;
        var numActive = 0;

        $("#main-menu-navigation a").each(function() {
            if(url == (this.href)) { 
                numActive++;
                $(this).closest("li").addClass("active");
            }
        });

        while(url.lastIndexOf("?") > 0 && numActive <= 0){
          url = url.substring(0, url.lastIndexOf("?"));
          $("#main-menu-navigation a").each(function() {
            if(url == (this.href)) {
                $(this).closest("li").addClass("active");
                numActive++;
            }
          });
        }

        while(numActive <= 0){
          url = url.substring(0, url.lastIndexOf("/"));
          $("#main-menu-navigation a").each(function() {
            if(url == (this.href)) {
                $(this).closest("li").addClass("active");
                numActive++;
            }
          });
        }
      }
    });
  
  
    // filter menu
    $('#menu_search').keyup(function(){
      var value = $(this).val().toLowerCase();
      $("#main-menu-navigation > li").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  
    function convertToSlug(Text)
    {
        return Text.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
    }
  
    // slug
    $('input[name=name],input[name=title]').keyup(function() {
      $('input[name=slug]').val(convertToSlug($(this).val()));
    });
  
  
  
  
  
  
  });
})(window);