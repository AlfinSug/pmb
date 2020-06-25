


$(document).ready(function(){
    var panel = $('.panel').css('width');
    var width = panel.replace('px','');
    var i = 0;
    $('ul li').each(function(){
      i++;
    });
    var val1= width/i;
    $('.panel').css('width', val1 +'px')

    $('ul li:nth-child(1)').on('click',function(){
        $('.panel').animate({
            left : '0px'
        })
    });
    $('ul li:nth-child(2)').on('click',function(){
        $('.panel').animate({
            left : val1+5 +'px'
        })
    });
});

// Login
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
