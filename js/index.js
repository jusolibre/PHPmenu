var erreur = 0 ;
function validForm()
{
	var a;
	var b;

	a = validCheck();
	b = validLien();
	if (a == false || b == false)
	{
		return (false);
	}
	else
	{
		copy_desc();
		return (true);
	}
}

function copy_desc()
{
	var div = document.getElementById("divdescription");
	var text = document.getElementById("textarea");
	text.value = div.innerHTML;
}

function validLien()
{
	var lien = document.getElementById("lien");
	var regexp = new RegExp("^((http):\/\/)?(www[.])?([a-zA-Z0-9]|-)+([.][a-zA-Z0-9]+)+$");
	if (lien.value == "")
		return (true);
	var resultat = regexp.test(lien.value);
	  if (resultat)
	  {
		return  true;
	  }
	  else
	  {
		erreur++;
		alert ("l'URL n\'est PAS valide");
		return false;

	  }

}
function validCheck()
{
	var verifCheck = document.querySelectorAll('input[type="checkbox"]:checked');
	if (verifCheck.length==0)
	{
		erreur++;
		alert ('Veuillez cocher au moins un navigateur dans Compatibilité');
		return false;
	}
	else
	{
		return true;
	}
}

function italic ()
{
	document.execCommand('italic');
}

function gras ()
{
	document.execCommand('bold');
}
