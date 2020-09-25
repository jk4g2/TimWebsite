function defaultTextCSS(){
    document.getElementById("top").value = "h3 {color: blue; text-align: center;}\np {font-family: cursive; font-size: 22pt; color: green;}";
    
}

function defaultTextHTML(){
    document.getElementById("bottom").value = "<h3> Greetings! </h3>\n<p> Start by adding some HTML and CSS </p>";
}

function isTitle(){
    var title = prompt("What is your title?");
    if(title!=null){
        document.getElementById("tim").innerHTML = title;
        document.getElementById("tim1").innerHTML = title;
    }
}

function reset(){
    document.getElementById("top").value = null;
    document.getElementById("bottom").value = null;
    document.getElementById("right").innerHTML = null;
}

function htmlButtonFunction(){
    var texts = document.getElementById("bottom").value;
    document.getElementById("right").innerHTML = texts;
}

var onoff = 0;
function cssButtonFunction(){
    if(onoff==0){
        document.getElementById("cssButton").style.backgroundColor="blue";
        onoff=1;
        var css = document.getElementById("top").value;
        document.getElementById("css").innerHTML = css;
    } else{
        onoff = 0;
        document.getElementById("cssButton").style.backgroundColor="yellow";
        document.getElementById("css").innerHTML = null;
    }
}
