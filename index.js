var prevScrollpos = window.pageYOffset;
    window.onscroll= function(){
        var currentScrollPos = window.pageYOffset;
        if(currentScrollPos > 500){
            document.querySelector(".sideMedia").style.right = "10px";
        }else{
            document.querySelector(".sideMedia").style.right = "-50px";
        }

        //.slideScroll

        if(currentScrollPos > 700){
            document.querySelector(".slideScroll").style.right = "10px";
        }else{
            document.querySelector(".slideScroll").style.right = "-50px";
        }
        prevScrollpos=currentScrollPos;
    }

AOS.init({
    duration: 600,
  });


document.querySelector(".for_view").addEventListener('click',function(){
    document.querySelector(".for_close").style.visibility = 'visible'
    document.querySelector(".for_close").style.transform = 'scale(1)'
    document.querySelector(".for_view").style.transform = 'scale(0)'
    document.querySelector(".mobile-content").style.top = '0px'
})


document.querySelector(".for_close").addEventListener('click',function(){
    document.querySelector(".for_view").style.visibility = 'visible'
    document.querySelector(".for_close").style.transform = 'scale(0)'
})
  

document.querySelector(".mobile-content").addEventListener('click',function(){
    document.querySelector(".for_close").style.transform = 'scale(0)'
    document.querySelector(".mobile-content").style.top = '-100%'
    document.querySelector(".for_view").style.transform = 'scale(1)'
})






// sending email in js

document.querySelector(".mySubmitBtn").addEventListener('click',function(){
    console.log(document.querySelector(".firstName").value);
})
