document.addEventListener("DOMContentLoaded",function(){
	var slike = document.querySelectorAll("#galerija img");
	for(var i=0; i<slike.length; i++)
	{
		slike[i].addEventListener("click",function(){
			if(event.target.requestFullscreen) 
			{
				event.target.requestFullscreen();
			} 
			else if(event.target.mozRequestFullScreen) 
			{
				event.target.mozRequestFullScreen();
			} 
			else if(event.target.webkitRequestFullscreen) 
			{
				event.target.webkitRequestFullscreen();
			}
		});
	}
});