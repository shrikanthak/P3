function SelectRadioButton()
{
	if (document.getElementById("optLoremIpsum").checked == true) {
        document.getElementById("divLorenIpsum").style.display = 'block';
        document.getElementById("divRandomLogins").style.display = 'none';
        document.getElementById("txtNumParagraphs").value="";
    }
    else if (document.getElementById("optRandomLogins").checked == true) {
        document.getElementById("divLorenIpsum").style.display = 'none';
        document.getElementById("divRandomLogins").style.display = 'block';
        document.getElementById("txtNumberRandomLogins").value="";
    }

    var element=document.getElementById("content");
    if (element!=null)
    {
        element.style.display = 'none';
    }
}