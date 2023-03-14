// upload images and preview
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}



///////////////////////////////////////////////



// Accordion Action\\\\\\\\\\\\\\
// $(function() {
//   $('.accordion li h3').click(function(){
//     $('.accordion li').toggleClass(' active ');
//     $(this).siblings().removeClass(' active '); 
//     $('.accordion-inner').stop().slideUp();
//     $('.active .accordion-inner').stop().slideDown();
//     return false;
//   });
// });

var selector = '.accordion li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
    $('.accordion-inner').stop().slideUp();
   $('.active .accordion-inner').stop().slideDown();
   //return false;
});





// select drop down filter start
// //////////////////////////////
jQuery(document).ready(function(){ 
  $('#allRating').on('click', function(){
    $('#allRatingContent').toggleClass('active');
  });
  $('#allRatingContent .select-dropdown__list-item').on('click', function(){
    var itemValue = $(this).data('value');
    console.log(itemValue);
    $('#allRating span').text($(this).text()).parent().attr('data-value', itemValue);
    $('#allRatingContent').toggleClass('active');
  });
});

jQuery(document).ready(function(){ 
  $('#allResponnceButton').on('click', function(){
    $('#allResponnceContent').toggleClass('active');
  });
  $('#allResponnceContent .select-dropdown__list-item').on('click', function(){
    var itemValue = $(this).data('value');
    console.log(itemValue);
    //$('#allResponnceButton span').text($(this).text()).parent().attr('data-value', itemValue);
    
    $('#allResponnceButton span').html($(this).text()).parent().attr('data-value', itemValue);
    $('#allResponnceContent').toggleClass('active');
  });
});

jQuery(document).ready(function(){ 
  $('#shortByButton').on('click', function(){
    $('#shortByContent').toggleClass('active');    
  });
  $('#shortByContent .select-dropdown__list-item').on('click', function(){    
    $(this).addClass('selected');
    var itemValue = $(this).data('value');
    console.log(itemValue);
    $('#shortByButton span').text($(this).text()).parent().attr('data-value', itemValue);
    $('#shortByContent').toggleClass('active');
  });
});
// select drop down filter end
// //////////////////////////////
// 
// 
// profile drop down start
// //////////////////////////////
jQuery(document).ready(function(){ 
  //$(".profile-btn").removeClass("active");
  $(".profile-btn").click(function(){
    $(".dropdown-profile").slideToggle();
    $(this).toggleClass("active");
  });
});
// profile drop down end
// //////////////////////////////


jQuery(document).ready(function(){ 
  // country dropdown start
   // function setCountry(code){
   //        if(code || code==''){
   //            var text = jQuery('a[cunt_code="'+code+'"]').html();
   //            $(".dropdown dt a span").html(text);
   //        }
   //    }
      // $(document).ready(function() {
      //     $(".dropdown img.flag").addClass("flagvisibility");

      //     $(".dropdown dt a").click(function() {
      //         $(".dropdown dd ul").toggle();
      //     });

      //     $(".dropdown dd ul li a").click(function() {
      //         //console.log($(this).html())
      //         var text = $(this).html();
      //         $(".dropdown dt a span").html(text);
      //         $(".dropdown dd ul").hide();
      //         $("#result").html("Selected value is: " + getSelectedValue("country-select"));
      //     });

      //     function getSelectedValue(id) {
      //         //console.log(id,$("#" + id).find("dt a span.value").html())
      //         return $("#" + id).find("dt a span.value").html();
      //     }

      //     $(document).bind('click', function(e) {
      //         var $clicked = $(e.target);
      //         if (! $clicked.parents().hasClass("dropdown"))
      //             $(".dropdown dd ul").hide();
      //     });


      //     $("#flagSwitcher").click(function() {
      //         $(".dropdown img.flag").toggleClass("flagvisibility");
      //     });
      // });
  // country dropdown end


  //---- responsive menu
  $('#toggle').click(function(){
    $(this).toggleClass('on');
    $('#menu').toggleClass('active');
    $('body').toggleClass('scrolled');
    // $('#menu').slideToggle();
  });






  //---------- modal popup

  // // Get the modal
  // var ebModal = document.getElementById('mySizeChartModal');

  // // Get the button that opens the modal
  // var ebBtn = document.getElementById("mySizeChart");

  // // Get the <span> element that closes the modal
  // var ebSpan = document.getElementsByClassName("ebcf_close")[0];

  // // When the user clicks the button, open the modal 
  // ebBtn.onclick = function() {
  //     ebModal.style.display = "block";
  // }

  // // When the user clicks on <span> (x), close the modal
  // ebSpan.onclick = function() {
  //     ebModal.style.display = "none";
  // }

  // // When the user clicks anywhere outside of the modal, close it
  // window.onclick = function(event) {
  //     if (event.target == ebModal) {
  //         ebModal.style.display = "none";
  //     }
  // }













//=============

});


// tab =======================
function openHouse(evt, housing) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(housing).style.display = "block";
  evt.currentTarget.className += " active";
}


//----- upload profile image===

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


//----- upload file===

//Reference: 
//https://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;(function($) {

      // Browser supports HTML5 multiple file?
      var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
          isIE = /msie/i.test( navigator.userAgent );

      $.fn.customFile = function() {

        return this.each(function() {

          var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
              $wrap = $('<div class="file-upload-wrapper">'),
              $input = $('<input type="text" class="file-upload-input" />'),
              // Button that will be used in non-IE browsers
              $button = $('<button type="button" class="file-upload-button">Upload Image</button>'),
              // Hack for IE
              $label = $('<label class="file-upload-button" for="'+ $file[0].id +'">upload Image</label>');

          // Hide by shifting to the left so we
          // can still trigger events
          $file.css({
            position: 'absolute',
            left: '-9999px'
          });

          $wrap.insertAfter( $file )
            .append( $file, $input, ( isIE ? $label : $button ) );

          // Prevent focus
          $file.attr('tabIndex', -1);
          $button.attr('tabIndex', -1);

          $button.click(function () {
            $file.focus().click(); // Open dialog
          });

          $file.change(function() {

            var files = [], fileArr, filename;

            // If multiple is supported then extract
            // all filenames from the file array
            if ( multipleSupport ) {
              fileArr = $file[0].files;
              for ( var i = 0, len = fileArr.length; i < len; i++ ) {
                files.push( fileArr[i].name );
              }
              filename = files.join(', ');

            // If not supported then just take the value
            // and remove the path to just show the filename
            } else {
              filename = $file.val().split('\\').pop();
            }

            $input.val( filename ) // Set the value
              .attr('title', filename) // Show filename in title tootlip
              .focus(); // Regain focus

          });

          $input.on({
            blur: function() { $file.trigger('blur'); },
            keydown: function( e ) {
              if ( e.which === 13 ) { // Enter
                if ( !isIE ) { $file.trigger('click'); }
              } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
                // On some browsers the value is read-only
                // with this trick we remove the old input and add
                // a clean clone with all the original events attached
                $file.replaceWith( $file = $file.clone( true ) );
                $file.trigger('change');
                $input.val('');
              } else if ( e.which === 9 ){ // TAB
                return;
              } else { // All other keys
                return false;
              }
            }
          });

        });

      };

      // Old browser fallback
      if ( !multipleSupport ) {
        $( document ).on('change', 'input.customfile', function() {

          var $this = $(this),
              // Create a unique ID so we
              // can attach the label to the input
              uniqId = 'customfile_'+ (new Date()).getTime(),
              $wrap = $this.parent(),

              // Filter empty input
              $inputs = $wrap.siblings().find('.file-upload-input')
                .filter(function(){ return !this.value }),

              $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

          // 1ms timeout so it runs after all other events
          // that modify the value have triggered
          setTimeout(function() {
            // Add a new input
            if ( $this.val() ) {
              // Check for empty fields to prevent
              // creating new inputs when changing files
              if ( !$inputs.length ) {
                $wrap.after( $file );
                $file.customFile();
              }
            // Remove and reorganize inputs
            } else {
              $inputs.parent().remove();
              // Move the input so it's always last on the list
              $wrap.appendTo( $wrap.parent() );
              $wrap.find('input').focus();
            }
          }, 1);

        });
      }

}(jQuery));

$('input[type=file]').customFile();






