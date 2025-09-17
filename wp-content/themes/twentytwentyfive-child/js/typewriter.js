//<div id="textTotype"></div>

document.addEventListener("DOMContentLoaded", async function() {
    console.log("script loaded");    
    const typeWrite=document.getElementById("textToType")
    const typeWriteText = typeWrite.innerHTML;
    
    console.log("typewrite ",typeWrite);
    console.log("typewrite vis ",typeWrite.style.visibility);
    //console.log("innerHtml ",typeWrite.innerHTML);
    let textToType;
    let delay;
    let waiting;    
    if (typeWriteText.includes("*")) {
        textToType=typeWriteText.split("*")[0];
        delay=typeWriteText.split("*")[1];
        waiting = typeWriteText?.split("*")[2] || 0;
        console.log("textToType ",textToType,"delay ",delay, " waiting ",waiting);
    } else {
        textToType=typeWriteText;
        delay=100;
        waiting=0;}
    textLength=textToType.length;
    typeWrite.innerHTML="";
    typeWrite.style.visibility="visible";
    let i=0;
    setTimeout(()=> {
        const intervalWriter = setInterval(typeWriter,delay);
        function typeWriter() {
            if (i<textToType.length) {                
                let nextLetter=textToType.charAt(i);
                nextLetter=="|"?nextLetter="<br>":nextLetter=nextLetter;
                typeWrite.innerHTML+=nextLetter;               
                i++;                    
            }  else {
                clearInterval(intervalWriter);
                console.log("text ",typeWrite.innerHTML," interval cleared");} }
        }, waiting)
    
    for (let i=1; i<5; i++) {
    console.log("lightbulb" + i)
    const element=document.getElementById("lightbulb"+i);
    element.addEventListener("click", (event)=> {
        manageDisplay(event.currentTarget);
    })
    /*element.addEventListener("mouseout", (event)=> {
        clearDisplay(event.currentTarget);
    })*/
}
    })

function manageDisplay (box) {    
    const previousBox=document.getElementsByClassName("activeBox");
    console.log("activeBox",previousBox[0]?.id);
    console.log("boxid ", box.id);
    const previousParagraph=document.getElementsByClassName("activeParagraph");
    const boxNb = box.id.split("lightbulb")[1];
    let reclick=false;
    const textToType=document.getElementById("textBox0");
    if (previousBox[0]?.id == box.id) {
        console.log("Here we are");
        reclick=true;
        previousBox[0].classList.remove("activeBox");        
        previousParagraph[0].classList.remove("activeParagraph");        
        textToType.classList.add("activeParagraph");
    }

    if (previousBox[0]) {            
        previousBox[0].classList.remove("activeBox");
        previousParagraph[0]?.classList.remove("activeParagraph");
    }
    if (!reclick) {
        console.log(previousBox[0]?.id, box.id, previousBox[0]?.id !== box.id)
        console.log("there", previousBox[0]?.id, " ",box.id);
        textToType.classList.remove("activeParagraph");        
        console.log("boxNb", boxNb);
        console.log(box);
        const newParagraph = document.getElementById("textBox" + boxNb);    
        box.classList.add("activeBox");
        console.log("textBox" + boxNb, newParagraph);
        newParagraph.classList.add("activeParagraph"); }
}


