// external js: isotope.pkgd.js

$(document).ready( function() {
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.col-md-3'
  });

  // store filter for each group
  var filters = {};

  $('.filters').on( 'click', '.btn', function() {
    var $this = $(this);
    // get group key
    var $buttonGroup = $this.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}



// smooth scrolling

$(function(){

  $(".navbar a").click(function(){
    $("html,body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    },1000);
      return false;

  });


  // changing navbar color

  $(window).scroll(function(){
    var wScroll=$(window).scrollTop();
    if(wScroll > 730){
      $(".navbar").addClass("navbar-black");
    }else{
      $(".navbar").removeClass("navbar-black");
    }
  })


$('body').scrollspy({ target: '.menu-link' })


});