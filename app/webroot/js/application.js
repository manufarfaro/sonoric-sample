// Javascript Document.

var resizeColumns = (function(){
  return{
    init: function(){
      //Select the columns that need to be equal e.g
      //$('div.contenedorPrincipal').equalCols();

      var h_menu = $('#lateral').height();
      var h_content = $('.principal').height();
      var h_sponsors = $('#otrolado').height();

      if( h_menu <= h_content ){
        $('#lateral').height($('.principal').height());
      }else{
        if( h_menu <= h_sponsors){
          $('#lateral').height($('#otrolado').height());
        }
      }
     //$('#lateral,#principal,#otrolado').equalCols(); 
    }
  }
})();

jQuery(document).ready(function(){

  $('#lateral').dynatree({
        initAjax: {
          url: "/index.php/api/config/getMenu"
        },
         persist: true,
         checkbox: false,
         selectMode: 1,
         imagePath: "/app/webroot/img/",
         onRender: function(node, nodeSpan) {
            if(node.data.url)
            $(nodeSpan).find("a.dynatree-title").attr('href', '/index.php' + node.data.url);
        },
        onClick: function(node) {
            if( node.data.url )
                location.href = '/index.php' + node.data.url;
        },

         debugLevel: 3
    });
   
});

$(document).ready(function(){
  $('.imgSponsor img').hover(
    function (){
      $(this).attr('src', '/app/webroot/img/' + $(this).attr('alt') + '.original.jpg')
    },
    function (){
      $(this).attr('src', '/app/webroot/img/' + $(this).attr('alt') + '.gray.jpg')
    }
  );
});

$(window).load(function(){
  resizeColumns.init();

  var refreshId = setInterval( function()
    {
        resizeColumns.init()
    }, 5000);
  
  $('#loadingLayout').fadeOut('slow', function(){
    $('#loadingLayout').remove();
  });
});
