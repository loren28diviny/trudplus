/**
 * 
 */

function definition(o)
{
	
  switch (true){
   case (document.getElementById('po').value==o.value):
	   document.getElementById('clothing').style.display="inline";
   break;
   case (document.getElementById('shoes').value==o.value) :
	   document.getElementById('shoes').style.display="inline";
   break;
   case (document.getElementById('siz').value==o.value ):
	   document.getElementById('ESafety').style.display="inline";
   break;
   case (document.getElementById('lit').value==o.value) :
	   document.getElementById('litter').style.display="inline";
   break;
   case (document.getElementById('shv').value==o.value) :
	   document.getElementById('ClothInd').style.display="inline";
   break;
   case (document.getElementById('drg').value==o.value) :
	   document.getElementById('another').style.display="inline";
   break;
   default:
	   document.getElementById('clothing').style.display="none";
	   document.getElementById('shoes').style.display="none";
	   document.getElementById('ESafety').style.display="none";
	   document.getElementById('litter').style.display="none";
	   document.getElementById('ClothInd').style.display="none";
	   document.getElementById('another').style.display="none";
   }
	} 
