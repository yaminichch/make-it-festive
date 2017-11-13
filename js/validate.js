// JavaScript Document

function bfn(str)
{
	var fn=document.getElementById('fn').value;
	var fnexp=/^[a-zA-Z_ ]+$/;
	if(str.length=="")
	{
		document.getElementById('d1').style.color="white";
		document.getElementById('fn').style.backgroundcolor="red";
		document.getElementById('d1').innerHTML="Please Enter your Name";
		return false;
	}
	else if (fn.length <4)
	{
		document.getElementById('d1').style.color="white";
		document.getElementById('d1').innerHTML="please enter valid length for name";
		return false;
	}
	else if(!fnexp.test(fn))
	{
		document.getElementById('d1').style.color="white";
		document.getElementById('fn').style.backgroundcolor="red";
		document.getElementById('d1').innerHTML="please enter valid name";
		return false;
	}
	else
	{
		document.getElementById('fn').style.color="";
		document.getElementById('d1').innerHTML="";
	}
}

function bem(str)
{
	var em=document.getElementById('em').value;
	var emexp=/^[a-zA-Z0-9._]+\@[a-z]+\.[a-z]{2,3}$/;
	
	if(str.length=="")
	{
		document.getElementById('d2').style.color="white";
		document.getElementById('em').style.backgroundcolor="red";
		document.getElementById('d2').innerHTML="please Enter Email-id";
		return false;
	}
	else if (!emexp.test(em))
	{
		document.getElementById('d2').style.color="white";
		document.getElementById('em').style.backgroundcolor="red";
		document.getElementById('d2').innerHTML="please valid Email-id";
		return false;
	}
	else
	{
		document.getElementById('em').style.color="";
		document.getElementById('d2').innerHTML="";
	}
}

function bps(str)
{
	var ps=document.getElementById('ps').value;
	var psexp=/^[a-zA-Z_0-9]+$/;
	
	if(str.length=="")
	{
		document.getElementById('d3').style.color="white";
		document.getElementById('ps').style.backgroundcolor="red";
		document.getElementById('d3').innerHTML="please Enter pssword";
		return false;
	}
	else if (ps.length <5)
	{
		document.getElementById('d3').style.color="white";
		document.getElementById('d3').innerHTML="please enter valid pssword";
		return false;
	}
	else if(!psexp.test(ps))
	{
		document.getElementById('d3').style.color="white";
		document.getElementById('ps').style.backgroundcolor="red";
		document.getElementById('d3').innerHTML="please valid pssword";
		return false;
	}
	else
	{
		document.getElementById('ps').style.color="";
		document.getElementById('d3').innerHTML="";
	}
}

function badd(str)
{
	var add=document.getElementById('add').value;
	var addexp=/^[a-zA-Z0-9.\/_ ]+$/;
	
	if(str.length=="")
	{
		document.getElementById('d4').style.color="white";
		document.getElementById('add').style.backgroundcolor="red";
		document.getElementById('d4').innerHTML="please Enter Address";
		return false;
	}
	else if(!addexp.test(add))
	{
		document.getElementById('d4').style.color="white";
		document.getElementById('add').style.backgroundcolor="red";
		document.getElementById('d4').innerHTML="please valid Addess";
		return false;
	}
	else
	{
		document.getElementById('add').style.color="";
		document.getElementById('d4').innerHTML="";
	}
}

function bpn(str)
{
	var pn=document.getElementById('pn').value;
	var pnexp=/^[0-9]+$/;
	
	if(str.length=="")
	{
		document.getElementById('d5').style.color="white";
		document.getElementById('pn').style.backgroundcolor="red";
		document.getElementById('d5').innerHTML="please Phone Number";
		return false;
	}
	else if (pn.length <10)
	{
		document.getElementById('d5').style.color="white";
		document.getElementById('d5').innerHTML="please enter valid phone Number";
		return false;
	}
	else if(!pnexp.test(pn))
	{
		document.getElementById('d5').style.color="white";
		document.getElementById('pn').style.backgroundcolor="red";
		document.getElementById('d5').innerHTML="please valid Phone Number";
		return false;
	}
	else
	{
		document.getElementById('pn').style.color="";
		document.getElementById('d5').innerHTML="";
	}
}

function bcp(str)
{
	var ps1=document.getElementById('ps1').value;
	var ps1exp=/^[0-9]+$/;
	
	if(str.length=="")
	{
		document.getElementById('d6').style.color="white";
		document.getElementById('ps1').style.backgroundcolor="red";
		document.getElementById('d6').innerHTML="please Enter confirm pssword";
		return false;
	}
	else if (ps1.length <5)
	{
		document.getElementById('ps1').style.color="white";
		document.getElementById('d6').innerHTML="please enter valid pssword";
		return false;
	}
	else if(!ps1exp.test(ps))
	{
		document.getElementById('d6').style.color="white";
		document.getElementById('ps').style.backgroundcolor="red";
		document.getElementById('d6').innerHTML="please valid confirm pssword";
		return false;
	}
	else
	{
		document.getElementById('ps1').style.color="";
		document.getElementById('d6').innerHTML="";
	}
}
