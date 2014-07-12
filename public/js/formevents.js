function SelectRadioButton()
{
	if (document.getElementById("optLoremIpsum").checked == true) 
    {
        //if Lorem ipsum Selected disable the Random users text input
        // and enable the Lorem Ipsum Text Input
        document.getElementById("divLorenIpsum").style.display = 'block';
        document.getElementById("divRandomUsers").style.display = 'none';
        document.getElementById("txtNumParagraphs").value="";
    }
    else if (document.getElementById("optRandomUsers").checked == true) 
    {

        //if Random Users Selected disable the Lorem Ipsum text input
        //And Enable Random Users text Imput
        document.getElementById("divLorenIpsum").style.display = 'none';
        document.getElementById("divRandomUsers").style.display = 'block';
        document.getElementById("txtNumberRandomUsers").value="";
    }

    var element=document.getElementById("content");
    if (element!=null)
    {
        element.style.display = 'none';
    }

}