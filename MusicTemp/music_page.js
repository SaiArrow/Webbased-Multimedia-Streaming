function appendMusicCard()
{
	for(var i= 0;i<10;i++)
	{
		document.getElementByClass('music_collection').innerHtml += document.getElementByClass('card'); 
	}
}