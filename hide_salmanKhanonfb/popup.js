posts=document.querySelectorAll('div._1dwg');

for(var i=0;i<posts.length;i++)
{
	if (posts[i].innerHTML.indexOf("Salman Khan") >= 0)
	{
		posts[i].parentElement.parentElement.style.visibility = 'hidden';
		
	}

}