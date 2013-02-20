
<html>
<head>
<title>Postfix</title>
</head>
<body bgcolor="#FFFFFF">


<script language="JavaScript">

function push_stack(stackArr,ele)
{
 stackArr[stackArr.length]=ele;
}

function pop_stack(stackArr)
{
 var _temp=stackArr[stackArr.length-1];
 delete stackArr[stackArr.length-1];
 stackArr.length--;
 return(_temp);
}

function isOperand(who)
{
 return(!isOperator(who)? true : false);
}

function isOperator(who)
{
 return((who=="+" || who=="-" || who=="*" || who=="/" || who=="^" || who=="(" || who==")")? true : false);
}

function topStack(stackArr)
{
 return(stackArr[stackArr.length-1]);
}

function PostfixSubEval(num1,num2,sym)
{
 var returnVal;
 if(sym=="+")
  returnVal=num1+num2;
 if(sym=="-")
  returnVal=num1-num2;
 if(sym=="*")
  returnVal=num1*num2;
 if(sym=="/")
  returnVal=num1/num2;
if(sym=="^")
  returnVal= Math.pow(num1,num2);
 return(returnVal);
}

function PostfixEval(postfixStr)
{
 var stackArr=new Array();
 postfixStr=postfixStr.split('');
 for(var i=0; i<postfixStr.length; i++)
 {
  if(isOperand(postfixStr[i]))
  {
   push_stack(stackArr,postfixStr[i]);
  }
  else
  {
   var temp=parseFloat(topStack(stackArr));
   pop_stack(stackArr);
   var pushVal=PostfixSubEval(parseFloat(topStack(stackArr)),temp,postfixStr[i]);
   pop_stack(stackArr);
   push_stack(stackArr,pushVal);
  }
 }
 return(topStack(stackArr));
} 
</script>


<span class="header">Postfix Evaluator</span>

<form name="input_form">
<table class="form_in" cellspacing="0" cellpadding="3">
 <tr>
  <td><font face="verdana,arial,helvetica" size="-2" >Postfix  :</font></td>
  <td><font face="verdana,arial,helvetica" size="-2">Result :</font></td>
  <td></td>
 </tr>

 <tr>
  <td><input type="text" name="postfixVal" class="text_box" value=""></td>
  <td><input type="text" name="resultVal" class="text_box" value=""></td>
  <td align="bottom"><input type="button" onClick="document.input_form.resultVal.value=PostfixEval(document.input_form.postfixVal.value)" value="Evaluate Postfix" class="button"></td>
 </tr>
</table>
</form>

</body>
</html>

           