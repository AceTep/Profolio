document.addEventListener("DOMContentLoaded",function(){
	var datoteka = location.href.split("/").pop();
	if(datoteka == "")
	{
		datoteka = "index.html";
	}
	var stavke = document.querySelectorAll("#navigacija ul li a");
	for(var i=0; i<stavke.length; i++)
	{
		if(stavke[i].href.split("/").pop() == datoteka)
		{
			stavke[i].setAttribute("id","active");
		}
	}
});
