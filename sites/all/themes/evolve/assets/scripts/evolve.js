jQuery(document).ready(function($){
    var pathname = window.location.pathname;
   if(pathname == '/personal-banking-security'){
       $('#edit-field-security-section-tid   option[value="356"]').attr("selected", "selected");
   }
     if( $('#block-block-136').length ){
        $("#block-block-136 #select-login").appendTo('#section-banner #field-features-wrapper');
    }
    if( $('#block-block-166').length ){
        $("#block-block-166 #select-login").appendTo('#section-banner #field-features-wrapper');
    }
    if( $('#block-block-181').length ){
        $("#block-block-181 #select-login").appendTo('#section-banner #field-features-wrapper');
    }
    
     if( $('.inside-login').length){
        $('.inside-login .btn').click(function(){
            if($(".inside-login input:radio[name=p-log]").is(':checked') ) {
                var destiy = $(".inside-login input[name='p-log']:checked").val();
                 $( "#dialog" ).html('If you click the "Continue" link below, you'+"'"+'ll leave our site and enter a partner site which is hosted by another party. The partner site may have different privacy and security policies than our site. So, for your protection, we encourage you to read and evaluate their privacy and security policies. ')
               
                    
                    $( "#dialog" ).dialog({
                        height:400,
                        modal: true,
                        minWidth: 500,
                        title: "Partner Site Disclaimer",
                        buttons: {
                          "Continue": function() {
                              window.open(destiy);
                            $( this ).dialog( "close" );
                          },
                          Decline : function() {
                            $( this ).dialog( "close" );
                          }
                        }
                    });
                
            }
        })
    }
    
    if( $('#edit-field-do-you-frequently-use-you-value').length ){
        $('#edit-field-do-you-frequently-use-you-value  option[value="All"]').attr("selected", "selected");
    }
    
    if( $('#edit-field-do-you-frequently-use-you-value').length ){
        $("#edit-field-do-you-frequently-use-you-value").change(function() {
            $('#qq-filter-field_does_anyone_plan_to_have_d_value').fadeOut();
            $('#qq-filter-field__will_you_always_keep_more_value').fadeOut();
            var quiz =  $("#edit-field-do-you-frequently-use-you-value  option:selected").text();
            
            if(quiz =='Yes'){
                $('#qq-filter-field_does_anyone_plan_to_have_d_value').fadeIn();
            }
            if(quiz =='No'){
                $('#qq-filter-field__will_you_always_keep_more_value').fadeIn();
            }
      });
    }
    
    
     $('.search-btn-toggle').click(function(){
           $('#views-exposed-form-choose-a-plan-search').toggle(700);
        });
    
     $('.login-btn-toggle').click(function(){
           $('#block-block-191').toggle(700);
        });
        
    
     var regExp = new RegExp("//" + location.host + "($|/)");
     $('a').each(function() {
         
        $(this).click(function(event){
                var value = $(this).attr('href');
                var target = ($(this).attr('target')) ? $(this).attr('target') : 'parent';
                var isLocal = (value.substring(0,4) === "http") ? regExp.test(value) : true;
                var isAtm = (value === "http://www.moneypass.com/atm-locator.aspx") ? regExp.test(value) : true;

                if( !isLocal ){
                    if( !isAtm ){
                       dialogatm(value,target); 
                    }else{
                       dialogexternal(value,target);  
                    }
                 event.preventDefault(); 
                    
                }
            })
     });
     
     
     function dialogatm(url,target){
        $( "#dialog" ).html('If you click the "Continue" link below, you'+"'"+'ll leave our site and enter a partner site which is hosted by another party. The partner site may have different privacy and security policies than our site. So, for your protection, we encourage you to read and evaluate their privacy and security policies. ');
        $( "#dialog" ).dialog({
            height:400,
            modal: true,
            minWidth: 500,
            title: "Partner Site Disclaimer",
            buttons: {
              "Continue": function() {
                window.open(url, target);
                $( this ).dialog( "close" );
              },
              Decline : function() {
                $( this ).dialog( "close" );
              }
            }
        });
     }
     function dialogexternal(url,target){
         $( "#dialog" ).html('If you click the "Continue" link below, you'+"'"+'ll leave our site and enter another site which is hosted by a third party. This site may have different privacy and security policies than our site. So, for your protection, we encourage you to read and evaluate their privacy and security policies. Please understand that Westfield Bank has not verified the privacy or security of this site. ');

        $( "#dialog" ).dialog({
            height:400,
            modal: true,
            minWidth: 500,
            title: "Third-Party Disclaimer",
            buttons: {
              "Continue": function() {
                    window.open(url, target);
                $( this ).dialog( "close" );
              },
              Decline : function() {
                $( this ).dialog( "close" );
              }
            }
        });
     }
    
  $('#views-exposed-form-choose-a-plan-search .form-text').attr('placeholder','Enter Search Term');
  $('#views-exposed-form-choose-a-plan-search .truck-btn').appendTo('#views-exposed-form-choose-a-plan-search .form-item');
  $('#views-exposed-form-choose-a-plan-search #edit-term-node-tid-depth .truck-btn').remove();
  
   if( $('#edit-field-security-section-tid-wrapper').length ){
        $('#edit-field-security-section-tid option[value="All"]').remove();
    }

        
   $('#block-views-exp-location-finder-page #edit-combine').val('');
    
    $(".dtooltip").tooltip();
  $('span.menu-toggle').click(function(){
    $('body').toggleClass('menu-open');
  });
  $('.region-navigation').click(function(e){
     if($(e.target).hasClass('region-navigation')){
       $('body').removeClass('menu-open');
     }
  });
  
  $('.region-top').hide();
  
  $('.search-toggle').click(function(){
    $('.region-top').show().find('input[type=text]').focus();
    return false;
  });
  
  $('.search-close').click(function(){
    $('.region-top').hide();
    return false;
  });
  
  $('.dexp-fading').each(function(){
    var $this = $(this);
    var $slides = [];
    $this.find('> *').each(function(index){
      $(this).wrap('<div>');
      $slides[index] = $(this).parent().html();
      $(this).remove();
    });
    var counter = 1;
    $this.html($slides[0]).removeClass('fadeout');
    setInterval(function(){
      $this.addClass('fadeout');
      setTimeout(function(){
        $this.html($slides[counter=(counter+1)%$slides.length]).removeClass('fadeout');
      },500);
    },5000);
  });
  
});

