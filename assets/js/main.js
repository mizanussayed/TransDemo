$(document).ready(function(){
  $(".mobile-nav-toggle").click(function(e){
    $('#navbar').toggleClass('navbar-mobile')
    $(e).toggleClass('bi-list')
    $(e).toggleClass('bi-x')
  });   /** Mobile nav dropdowns activate   */
  $(".navbar .dropdown > a").click(function(e){
    if ($('#navbar').hasClass('navbar-mobile')) {
      e.preventDefault();
      $(".navbar .dropdown > a").next().toggleClass('dropdown-active')
    }
  });
  let preloader = $('#preloader');
  if (preloader) {
      preloader.remove()
  }   /** Initiate glightbox  */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });   /* * Testimonials slider  */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  AOS.init({
    duration: 100,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  })
 new PureCounter();
});

(function () {
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }   /**  * Toggle .header-scrolled class to #header when page is scrolled  */
  let selectHeader = $('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.addClass('header-scrolled')
      } else {
        selectHeader.removeClass('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }   /** * Back to top button */
  let backtotop = $('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.addClass('active')
      } else {
        backtotop.removeClass('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }
})()

function switchLang(lang) {
  if (lang === "ar") {
    if (window.location.toString().includes("services")) {
      window.location.href = "services-ar";
    } else if (window.location.toString().includes("contact")) {
      window.location.href = "contact-ar";
    } else {
      window.location.href = "index-ar";
    }
  } else {
    if (window.location.toString().includes("services")) {
      window.location.href = "services";
    } else if (window.location.toString().includes("contact")) {
      window.location.href = "contact";
    } else {
      window.location.href = "index";
    }
  }
}   //Arabic Contact  page input file label text change
function fileCountChange() {
  var a = document.getElementById('sampleFile');
  var span = document.getElementById('fileSpan');
  if (a.value !== "") {
    if (a.files.length > 1) {
      span.innerHTML = a.files.length + " ملفات ";
    } else {
      var theSplit = a.value.split('\\');
      span.innerHTML = theSplit[theSplit.length - 1];
    }
  } else {
    span.innerHTML = "لم يتم اختيار ملف";
  }
};    // input file items name with size and reomve icon
let dt = new DataTransfer();
$("#sampleFile").on('change', function (e) {
  fileCountChange();
  for (var i = 0; i < this.files.length; i++) {
    let fileBloc = $('<span/>', { class: 'file-block' }),
      fileName = $('<span/>', { class: 'name', text: this.files.item(i).name + "  " + Math.round(this.files.item(i).size / 1024) + "  KB" });
    fileBloc.append('<span class="file-delete"><span>+</span></span>')
      .append(fileName);
    $("#filesList > #files-names").append(fileBloc);
  };
  for (let file of this.files) {
    dt.items.add(file);
  }

  this.files = dt.files;
  $('span .file-delete').click(function () {
    let name = $(this).next('span.name').text();
    $(this).parent().remove();
    for (let i = 0; i < dt.items.length; i++) {
      if (name === dt.items[i].getAsFile().name + "  " + Math.round(dt.items[i].getAsFile().size / 1024) + "  KB") {
        dt.items.remove(i);
        continue;
      }
    }
    document.getElementById('sampleFile').files = dt.files;
    fileCountChange();
  });
});