function switchLang(e){"ar"===e?window.location.toString().includes("services")?window.location.href="/ar/services":window.location.toString().includes("contact")?window.location.href="/ar/contact":window.location.href="/ar":window.location.toString().includes("services")?window.location.href="/services":window.location.toString().includes("contact")?window.location.href="/contact":window.location.href="/"}function fileCountChange(){var e=document.getElementById("sampleFile"),t=document.getElementById("fileSpan");if(""!==e.value)if(e.files.length>1)t.innerHTML=e.files.length+" ملفات ";else{var i=e.value.split("\\");t.innerHTML=i[i.length-1]}else t.innerHTML="لم يتم اختيار ملف"}$(document).ready((function(){$(".mobile-nav-toggle").click((function(e){$("#navbar").toggleClass("navbar-mobile"),$(e).toggleClass("bi-list"),$(e).toggleClass("bi-x")})),$(".navbar .dropdown > a").click((function(e){$("#navbar").hasClass("navbar-mobile")&&(e.preventDefault(),$(".navbar .dropdown > a").next().toggleClass("dropdown-active"))}));let e=$("#preloader");e&&e.remove();GLightbox({selector:".glightbox"}),GLightbox({selector:".gallery-lightbox"});new Swiper(".testimonials-slider",{speed:600,loop:!0,autoplay:{delay:5e3,disableOnInteraction:!1},slidesPerView:"auto",pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}}),AOS.init({duration:100,easing:"ease-in-out",once:!0,mirror:!1}),new PureCounter})),function(){const e=(e,t)=>{e.addEventListener("scroll",t)};let t=$("#header");if(t){const i=()=>{window.scrollY>100?t.addClass("header-scrolled"):t.removeClass("header-scrolled")};window.addEventListener("load",i),e(document,i)}let i=$(".back-to-top");if(i){const t=()=>{window.scrollY>100?i.addClass("active"):i.removeClass("active")};window.addEventListener("load",t),e(document,t)}}();let dt=new DataTransfer;$("#sampleFile").on("change",(function(e){fileCountChange();for(var t=0;t<this.files.length;t++)if("application/pdf"==this.files.item(t).type||"image"==this.files.item(t).type.substring(0,5)){let e=$("<span/>",{class:"file-block"}),i=$("<span/>",{class:"name",text:this.files.item(t).name+"  "+Math.round(this.files.item(t).size/1024)+"  KB"});e.append('<span class="file-delete"><span>+</span></span>').append(i),$("#filesList > #files-names").append(e)}for(let e of this.files)"application/pdf"!=e.type&&"image"!=e.type.substring(0,5)||dt.items.add(e);this.files=dt.files,$("span .file-delete").click((function(){let e=$(this).next("span.name").text();$(this).parent().remove();for(let t=0;t<dt.items.length;t++)e!==dt.items[t].getAsFile().name+"  "+Math.round(dt.items[t].getAsFile().size/1024)+"  KB"||dt.items.remove(t);document.getElementById("sampleFile").files=dt.files,fileCountChange()}))}));