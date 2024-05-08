/* Nav Bar */
window.addEventListener("scroll", function(){
	var nav = document.querySelector("#nav_bar");
	nav.classList.toggle("sticky", window.scrollY > 0);
})

var _nav = document.querySelector("#ancoras_nav_bar");
var _bar = document.querySelector("#nav_bar");

verificaTela();

function verificaTela(){
	var windowWidth = window.innerWidth;
	
	if (windowWidth < 768) {
		_nav.style.display = "none";
		_bar.style.justifyContent = "center";
	}else{
		_nav.style.display = "flex";
		_bar.style.justifyContent = "space-between";  
	}
}

window.addEventListener('resize', function(){
	verificaTela();
})

function rmvClass(){
	var aba = document.querySelectorAll("#ancoras_nav_bar li")
	aba.forEach((li)=>{
		li.classList.remove("scroll_ativo");
	})
}

verifyScreenWidth()

window.addEventListener('resize', function(){
	verifyScreenWidth()
})

function verifyScreenWidth(){ 
	window.addEventListener("scroll", navegation)
}

function navVerifY(e){
	var el = document.querySelector(e)
	return el.offsetTop - 200
}

function navegation(){
	if(window.scrollY >= 0){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(1)").classList.add("scroll_ativo"); 
	}
	if(window.scrollY >= navVerifY("#l_sobre")){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(2)").classList.add("scroll_ativo"); 
	}
	if(window.scrollY >= navVerifY("#l_cursos")){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(3)").classList.add("scroll_ativo"); 
	}
	if(window.scrollY >= navVerifY("#l_diferenciais")){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(4)").classList.add("scroll_ativo"); 
	}
	if(window.scrollY >= navVerifY("#l_metodologia")){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(5)").classList.add("scroll_ativo"); 
	}
	if(window.scrollY >= navVerifY("#l_contato")){
		rmvClass()
		document.querySelector("#ancoras_nav_bar li:nth-child(6)").classList.add("scroll_ativo"); 
	}
}

/* Efeito Card */

VanillaTilt.init(document.querySelectorAll(".card"), {
  max: 25,
  speed: 400
});

/* Slider 'ensino para' */

var swiper = new Swiper(".mySwiper", {
		loop: true,
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: "auto",
		coverflowEffect: {
		rotate: 50,
		stretch: 0,
		depth: 100,
		modifier: 1,
		slideShadows: true,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});

/* Form contato */

var inputs = document.querySelectorAll('.input_form_msg')
var t_inputs = document.querySelectorAll('.t_input_form_msg')
var msgArea = document.querySelectorAll('.input_msg');

inputs.forEach(function(item){

    item.addEventListener('focus', function(){
    	$(this).siblings('.t_input_form_msg').css({"margin-top": "-15px"})
    	$(this).siblings('.t_input_form_msg').css({"margin-left": "0px"})
    }); 

    item.addEventListener('blur', function(){
    	if(item.value.trim().length == 0){
    		$(this).siblings('.t_input_form_msg').css({"margin-top": "15px"})
    		$(this).siblings('.t_input_form_msg').css({"margin-left": "0px"})
    		this.value = ""
    	}
    }); 

}); 

msgArea.forEach(function(item){

    item.addEventListener('focus', function(){
    	$(this).siblings('.t_input_form_msg').css({"margin-top": "-20px"})
    	$(this).siblings('.t_input_form_msg').css({"margin-left": "0px"})
    }); 

    item.addEventListener('blur', function(){
    	if(item.value.trim().length == 0){
    		$(this).siblings('.t_input_form_msg').css({"margin-top": "10px"})
    		$(this).siblings('.t_input_form_msg').css({"margin-left": "10px"})
    		this.value = ""
    	}
    }); 

}); 

/* Href - Redirecionamento */

var LK_F_1 = document.querySelector(".h-box li:nth-child(1) a")
var LK_F_2 = document.querySelector(".h-box li:nth-child(2) a")
var LK_F_3 = document.querySelector(".h-box li:nth-child(3) a")
var LK_F_4 = document.querySelector(".h-box li:nth-child(4) a")

LK_F_1.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_cursos", false)
	}else{
		href("#l_cursos", true)
	}
})

LK_F_2.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_diferenciais", false)
	}else{
		href("#l_diferenciais", true)
	}
})

LK_F_3.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_metodologia", false)
	}else{
		href("#l_metodologia", true)
	}
})

LK_F_4.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		$('html, body').animate({ 
			scrollTop: document.querySelector("#l_form").offsetTop - 150
		}), 0;
	}else{
		$('html, body').animate({ 
			scrollTop: document.querySelector("#l_form").offsetTop - $("#l_form").height() + 300
		}), 0;
	}
})

// Mobile

var CB_BTN = document.querySelector("#check_nav_bar")
var BP = document.querySelector(".backPage")
var menu_btn = document.querySelector(".check_nav_bar_btn")

function fecharMenu(){
	setTimeout(function(){
		CB_BTN.checked = false;
		document.querySelector(".check_nav_bar_btn i").classList.remove("fa-times")
		document.querySelector(".check_nav_bar_btn i").classList.add("fa-bars")
	}, 1000)
}

menu_btn.addEventListener("click", function(){
	if(document.querySelector(".check_nav_bar_btn i").classList.contains("fa-bars")){
		document.querySelector(".check_nav_bar_btn i").classList.remove("fa-bars")
		document.querySelector(".check_nav_bar_btn i").classList.add("fa-times")
	}
	else{
		document.querySelector(".check_nav_bar_btn i").classList.remove("fa-times")
		document.querySelector(".check_nav_bar_btn i").classList.add("fa-bars")
	}
})

BP.addEventListener("click", function(){
	fecharMenu()
})

// ----------------------------------------

var LK1 = document.querySelector(".LN_Sobre")
var LK2 = document.querySelector(".LN_Cursos")
var LK3 = document.querySelector(".LN_Diferenciais")
var LK4 = document.querySelector(".LN_Metodologia")
var LK5 = document.querySelector(".LN_Contato")

LK1.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_sobre", false)
	}else{
		href("#l_sobre", true)
	}
	fecharMenu()
})

LK2.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_cursos", false)
	}else{
		href("#l_cursos", true)
	}
	fecharMenu()
})

LK3.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_diferenciais", false)
	}else{
		href("#l_diferenciais", true)
	}
	fecharMenu()
})

LK4.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_metodologia", false)
	}else{
		href("#l_metodologia", true)
	}
	fecharMenu()
}) 

LK5.addEventListener("click", function(){
	if(window.innerWidth <= 768){
		href("#l_contato", false)
	}else{
		href("#l_contato", true)
	}
	fecharMenu()
})

function href(e, type){
	var el = document.querySelector(e)
	if(type){
		$('html, body').animate({ 
			scrollTop: el.offsetTop - 100
		}), 0;
	}else{
		$('html, body').animate({ 
			scrollTop: el.offsetTop - 100
		}), 0;
	}
}

/* Anima */
// Debounce do Lodash
debounce = function(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
		  timeout = null;
		  if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};


(function(){
	var $target = $('.anime'),
	animationClass = 'anime-start',
	offset = $(window).height() * 3/4;

function animeScroll() {
	var documentTop = $(document).scrollTop();

	$target.each(function(){
		var itemTop = $(this).offset().top;
		if (documentTop > itemTop - offset) {
			$(this).addClass(animationClass);
		} else {
			$(this).removeClass(animationClass);
		}
	});
}

	animeScroll();

	$(document).scroll(debounce(function(){
		animeScroll();
	}, 100));
})();	

/* Loader */

var loader = document.querySelector(".loader")
var body = document.querySelector('body')

body.style.overflow = "hidden"

window.addEventListener('load', function(){
	setTimeout(function(){
		loader.classList.add('fim_anim_loader')
		setTimeout(function(){
			body.removeChild(loader)
			body.style.overflowY = "scroll"
		}, 1000)
	}, 1000)
})

/* Sessão gerenciador */

var btn_close_manage = document.querySelectorAll(".fechar")
btn_close_manage.forEach((e)=>{
	e.addEventListener("click", function(){
		document.querySelector(".gerenciador_form_contato").style.top = -50 + "%"
		setTimeout(function(){
			closeManage(document.querySelector(".gerenciador_form_contato"))
		}, 1000)
	})
})
function closeManage(el){
	el.remove()
}

/* pop-up */
var Pop = document.querySelector(".pop-up")
var closePop = document.querySelector(".closePopUp")
var openPop = document.querySelector(".whatsForm")

closePop.addEventListener("click", PopUp)
openPop.addEventListener("click", PopUp)

function PopUp(){
	if(Pop.style.display == "flex")
		Pop.style.display = "none"
	else
		Pop.style.display = "flex"
}

function goTo(e){
	window.open(e, '_blank');
}





