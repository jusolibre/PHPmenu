var erreur = 0 ;
function validForm()
{
	validCheck();
	validLien();
	
}


function validLien() 
{
	var lien = document.getElementById("lien");
	var regexp = new RegExp("^((http):\/\/)?(www[.])?([a-zA-Z0-9]|-)+([.][a-zA-Z0-9]+)+$");
	console.log(lien);
	var resultat = regexp.test(lien.value);
	console.log(resultat);
	  if (resultat)
	  { 
		
		return  alert ('Mon URL est valide');
	  } 
	  else
	  {
		erreur++;
		return alert ('Mon URL n\'est PAS valide');
	 
	  }
 
}
function validCheck()
{
	var verifCheck = document.querySelectorAll('input[type="checkbox"]:checked');
	
	if (verifCheck.length==0) 
	{
		erreur++;
		alert ('Veuillez cocher au moins un navigateur dans ');
	}			
	else 
	{
		
		alert ('Au moins une case est cochée');
	}
}
 document.getElementById('formulaire').addEventListener("submit", function(event)
{
	validCheck();
	validLien();
	
	if(erreur!=0)
	{
		event.preventDefault();
	}
});

function italic ()
{
	document.execCommand('italic');
	console.log(italic);
}
	
function gras ()
{
	document.execCommand('bold');
}
	