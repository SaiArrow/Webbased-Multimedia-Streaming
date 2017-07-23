function isVisible(id)
{
	if(document.getElementById(id).style.visibility === 'hidden')
	{
		return false;
	}
	return true;
}

function togglePlayPause()
{
	var playId = document.getElementById('play');
	var pauseId = document.getElementById('pause');
	
	if(isVisible(playId.id) === true)
	{
		play.style.visibility = 'hidden';
		pause.style.visibility = 'visible';
	}
	else if(isVisible(pauseId.id) === true)
	{
		play.style.visibility = 'visible';
		pause.style.visibility = 'hidden';
	}
}