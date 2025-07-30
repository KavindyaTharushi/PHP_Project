function myFunction()
{
    var moreText=document.getElementById("more");
    var btnText=document.getElementById("mybtn");
    if(moreText.style.display=="none")
    {
        btnText.innerHTML="Read More";
        moreText.style.display="none";
    }
    else
    {
        btnText.innerHTML="Read Less";
        moreText.style.display="inline";
    }

}