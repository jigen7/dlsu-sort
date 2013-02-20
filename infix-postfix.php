<html>
<head>
<title>Infix to Postfix</title>
</style>
</head>
<body bgcolor="#FFFFFF">

<script language="JavaScript">


function push_stack(stackArr,ele){
stackArr[stackArr.length]=ele;
}

function pop_stack(stackArr){
var _temp=stackArr[stackArr.length-1];
delete stackArr[stackArr.length-1];
stackArr.length--;
return(_temp);
}

function isOperand(who){
return(!isOperator(who)? true : false);
}

function isOperator(who){
return((who=="+" || who=="-" || who=="*" || who=="/" || who=="^" || who=="(" || who==")")? true : false);
}

function topStack(stackArr){
return(stackArr[stackArr.length-1]);
}

function isEmpty(stackArr){
return((stackArr.length==0)? true : false);
}

/* Check for Precedence */
function prcd(char1,char2)
{
var char1_index,char2_index;
var _def_prcd="-+*/^";
for(var i=0; i<=_def_prcd.length; i++)
{
  if(char1==_def_prcd.charAt(i)) {
	char1_index=i;
	}
  if(char2==_def_prcd.charAt(i)) { 
	char2_index=i;
	}
} //end fir
if(((char1_index==0)||(char1_index==1)) && (char2_index>1)) {
	
	return false;
	}
	else {
		if(char1_index == char2_index){
			return false;
		}else {
		return true;
		}//end else
	}
}

function InfixToPostfix(infixStr,postfixStr)
{
var postfixStr=new Array();
var stackArr=new Array();
var postfixPtr=0;
infixStr=infixStr.split('');
for(var i=0; i<infixStr.length; i++)
{
  if(isOperand(infixStr[i]))
  {
   postfixStr[postfixPtr]=infixStr[i];
   postfixPtr++;
  }
  else
  {
   while((!isEmpty(stackArr)) && (prcd(topStack(stackArr),infixStr[i])))
   {
    postfixStr[postfixPtr]=topStack(stackArr);
    pop_stack(stackArr);
    postfixPtr++;
   }
   if((!isEmpty(stackArr)) && (infixStr[i]==")"))
   {
    pop_stack(stackArr);
   }
   else
   {
    push_stack(stackArr,infixStr[i]);
   }
  }
}
while(!isEmpty(stackArr))
{
  postfixStr[postfixStr.length]=topStack(stackArr);
  pop_stack(stackArr);
}
var returnVal='';
for(var i=0; i<postfixStr.length; i++)
{
  returnVal+=postfixStr[i];
}
return(returnVal);
}
//2^2^3 = 223^^
</script>


<span class="header">Infix to Postfix </span>

<form name="input_form">
<table class="form_in" cellspacing="0" cellpadding="3">
<tr>
  <td><font face="verdana,arial,helvetica" size="-2" color="#000">Infix Expression :</font></td>
  <td><font face="verdana,arial,helvetica" size="-2" color="#000">Postfix Expression :</font></td>
  <td></td>
</tr>
<tr>
  <td><input type="text" name="infixVal" class="text_box" value=""></td>
  <td><input type="text" name="postfixVal" class="text_box" value=""></td>
  <td align="bottom"><input type="button" onClick="document.input_form.postfixVal.value=InfixToPostfix(document.input_form.infixVal.value,'arr')" value="Infix to Postfix" class="button"></td>
</tr>
</table>
</form>



</body>
</html>
