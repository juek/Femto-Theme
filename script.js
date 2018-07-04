/* Typesetter CMS - Femto Theme -- JS */

$(function(){

  $('ul.menu_top .submenu-toggle').on('click', function(e){
    var $a = $(this).closest('a');
    var $li = $(this).closest('li');

    $(this).toggleClass('expanded');

    if( $a.hasClass('selected') ){
      $li.toggleClass('selected_li');
    }else if( $a.hasClass('haschildren') ){
      $li.toggleClass('childselected_li');
    }
    e.preventDefault();
    e.stopPropagation();
  });

  if( $(window).width() < 480 ){
    $('input#nav-toggle').prop('checked', false);
  }

  $(window).on('resize', function(){
    if( $(this).width() < 480 ){
      $('input#nav-toggle').prop('checked', false);
    }
  });

});
