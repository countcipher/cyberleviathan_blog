//============================
//DEFINED CONSTANTS VARIABLES
//============================
const body = document.querySelector("body"),
   html = document.querySelector("html"),
   fullWrapper = document.querySelector(".full-wrapper");
   nav = document.querySelector(".nav"),
   navLinks = document.querySelector(".nav__links");
   navLinkTitle = document.querySelectorAll(".nav__link-title"),
   hasDropdown = document.querySelectorAll(".has-dropdown"),
   navDropdownBox = document.querySelectorAll(".nav__dropdown-box"),
   navDropdownContent = document.querySelectorAll(".nav__dropdown-content"),
   hamburger = document.querySelector(".hamburger"),
   hamburgerBunTop = document.querySelector(".hamburger__bun--top"),
   hamburgerBunMiddle = document.querySelector(".hamburger__bun--middle"),
   hamburgerBunBottom = document.querySelector(".hamburger__bun--bottom"),
   mobileBreakPoint = 749,
   indexAbout = document.querySelector(".index-about"),
   indexAboutVideoButton = document.querySelector(".index-about__video-button"),
   indexAboutVideo = document.querySelector(".index-about__video"),
   indexAboutModal = document.querySelector(".index-about__modal"),
   indexAbout__Row = document.querySelector(".index-about__row");

//=============================
//EVENT LISTENERS
//=============================
window.addEventListener("scroll", navWhiteOnScroll);
window.addEventListener("resize", removeMobileClasses);
window.addEventListener("resize", removeLargeScreenClasses);
window.addEventListener("resize", addLargeScreenClasses);
//window.addEventListener("scroll", indexAboutRowScroll);
hamburger.addEventListener("click", toggleMenu);

if(indexAboutVideoButton !== null){
   indexAboutVideoButton.addEventListener("click", openIndexAboutModal);
}

if(indexAboutModal !==null){
   indexAboutModal.addEventListener("click", closeIndexAboutModal);
}

if(indexAbout !== null){
   window.addEventListener("scroll", indexAboutRowScroll);
}

//==============================
//GIVES <li/> WITH "HAS-DROPDOWN" CLASS THE showDropdownContent FUNCTION
//==============================
(function(){
   hasDropdown.forEach(function(item){
      item.addEventListener("click", showDropdownContent);
   })
})();

//=================================
//SETS CSS PROPERTIES FOR NAV AFTER SCROLLING DOWN PAGE
//=================================
function navWhiteOnScroll(){
   if(window.pageYOffset >= 145 && window.innerWidth >= mobileBreakPoint){
        nav.classList.add("onScrollWhite");
        navLinkTitle.forEach(function(item){
         item.classList.add("onScrollBlackColor");
        });
   }else{
      nav.classList.remove("onScrollWhite");
      navLinkTitle.forEach(function(item){
         item.classList.remove("onScrollBlackColor");
      })
   }
}

//====================================
//ADDS NECESSARY CLASSES TO NAVIGATION
//IN THE EVENT THAT SOMEONE, LIKE ME,
//WERE TO OPEN THE SITE IN MOBILE VERSION,
//SCROLL DOWN A WAYS,
//AND THEN DECIDE TO ENLARGE THE WINDOW.
//THIS CODE WILL MAKE IT SO THAT THE NAVIGATION
//IS WHITE BACKGROUND WITH BLACK LETTERING
//IF THE PAGE SCOLLED DOWN BEYOND 144 (>= 145)
//=========================================
function addLargeScreenClasses(){
   if(window.innerWidth >= mobileBreakPoint && window.pageYOffset >=145){
      nav.classList.add("onScrollWhite");
      navLinkTitle.forEach(function(title){
         title.classList.add("onScrollBlackColor");
      });
   }
}

//================================
//SHOWS DROPDOWN CONTENT FOR DROPDOWN MENUS
//================================
function showDropdownContent(){
   this.children[1].classList.toggle("fullHeight");
}

//==================================
//REMOVES ALL MOBILE-USE CLASSES WHEN WINDOW IS RESIZED FROM MOBILE TO LARGE
//==================================
function removeMobileClasses(){
   if(window.innerWidth >= mobileBreakPoint){
      navDropdownContent.forEach(function(item){
         item.classList.remove("fullHeight");
      })
      navLinks.classList.remove("menuShow");
      nav.classList.remove("fullVH");
      body.classList.remove("noScroll");
      html.classList.remove("noScroll");
      fullWrapper.classList.remove("noScroll");
      hamburgerBunTop.classList.remove("topBunClose");
      hamburgerBunMiddle.classList.remove("middleBunClose");
      hamburgerBunBottom.classList.remove("bottomBunClose");
//=====================================
//THIS IS THE BLOCK OF CODE
//THAT'S NEED TO BE REDONE TO MAKE THIS SHIT WORK
//SCOLLING DOWN AND THEN SLIGHTLY BACK UP
//ON PC SIZE SCREEN, THEN GOING TO MOBILE SIZE
//MAKES THE COLOR OF THE NAV BLACK
//FIX THIS SHIT!!!
//======================================
   // }else if(window.innerWidth < mobileBreakPoint){
   //    nav.classList.remove("onScrollWhite");
   //    navLinkTitle.classList.add("whiteColor");
   //    navLinkTitle.classList.remove("onScrollBlackColor");
   //    alert('hello');
    }
   
}

//===================================
//REMOVES CLASSES SPECIFIC TO LARGE SIZE
//TO PREP FOR MOBILE LAYOUT
//====================================
function removeLargeScreenClasses(){
   if(window.innerWidth < mobileBreakPoint){
      nav.classList.remove("onScrollWhite");
      navLinkTitle.forEach(function(item){
         item.classList.remove("onScrollBlackColor");
      });
   }
}

//====================================
//OPENS AND CLOSES THE MOBILE NAV MENU
//AS WELL AS CHANGES THE HAMBURGER MENU
//TO AN 'X'
//====================================
function toggleMenu(){
   nav.classList.toggle("fullVH");
   navLinks.classList.toggle("menuShow");
   body.classList.toggle("noScroll");
   html.classList.toggle("noScroll");
   fullWrapper.classList.toggle("noScroll");

   if(navLinks.classList.contains("menuShow")){
      hamburgerBunTop.classList.add("topBunClose");
      hamburgerBunMiddle.classList.add("middleBunClose");
      hamburgerBunBottom.classList.add("bottomBunClose");
   }else{
      hamburgerBunTop.classList.remove("topBunClose");
      hamburgerBunMiddle.classList.remove("middleBunClose");
      hamburgerBunBottom.classList.remove("bottomBunClose");
   }
}

//======================================
//OPENS MODAL ON INDEX PAGE, ABOUT SECTION
//=======================================
function openIndexAboutModal(){
   // indexAboutModal.classList.add("index-about__modal--show");
   // indexAboutVideo.classList.add("index-about__video--show");
   body.classList.add("noScroll");
   html.classList.add("noScroll");
   fullWrapper.classList.add("noScroll");
   indexAboutModal.style.transform = "scale(1)";
   indexAboutModal.style.zIndex = 1000;
   indexAboutModal.style.opacity = 1;
   indexAboutVideo.play();
}

//============================================
//CLOSES MODAL ON INDEX PAGE, ABOUT SECTION
//============================================
function closeIndexAboutModal(e){
   if(!e.target.classList.contains("video")){
      // indexAboutModal.classList.remove("index-about__modal--show");
      // indexAboutVideo.classList.remove("index-about__video--show");
      body.classList.remove("noScroll");
      html.classList.remove("noScroll");
      fullWrapper.classList.remove("noScroll");
      indexAboutModal.style.transform = "scale(0)";
      indexAboutModal.style.zIndex = -1000;
      indexAboutModal.style.opacity = 0;
      indexAboutVideo.pause();
   }
}

function indexAboutRowScroll(){
   if(window.pageYOffset >= indexAbout.offsetTop - 400){
      //console.log("hello");
      indexAbout__Row.children[0].style.transform = "translateX(0%)";
      //indexAbout__Row.children[0].style.opacity = "1";
   }
}

//===============================================================================================
//SETS CSS PROPERTIES FOR NAV ONLOAD IF PAGE IS ALREADY SCROLLED DOWN (I.E. USER USES BACK ARROW)
//===============================================================================================
body.onload = function navWhiteOnScroll(){
   if(window.pageYOffset >= 145 && window.innerWidth >= mobileBreakPoint){
        nav.classList.add("onScrollWhite");
        navLinkTitle.forEach(function(item){
         item.classList.add("onScrollBlackColor");
        });
   }else{
      nav.classList.remove("onScrollWhite");
      navLinkTitle.forEach(function(item){
         item.classList.remove("onScrollBlackColor");
      })
   }
}