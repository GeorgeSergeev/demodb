<html>
<head>
</head>
<body>
   <?
   //Соединение с базой данных
    $link = mysql_connect ("localhost", "root", "") or die ("Could not connect");
   //Выбор базы данных 
    $base=mysql_select_db ("note");
    mysql_query("SET NAMES cp1251");
	
	//Запрос к базе данных
    $query="select * from nt where city = 'Севастополь'";		
  ?>
   <CENTER>Hello!
   <TABLE width=800 border=1>
     <TR>
	   <TD> Ф.И.О.</TD>
	   <TD> Город </TD>
	   <TD> Телефон </TD>
	 </TR>
	<?
	$res=mysql_query ($query) or die ("Не могу выбрать абонентов.<br> Ошибка в запросе: ".$query);
    while(list($code,$name,$city,$phone)=mysql_fetch_array($res))
    {
    ?>	
	 <TR>
	   <TD> <?=$name?> </TD>
	   <TD> <?=$city?> </TD>
	   <TD> <?=$phone?> </TD>
	 </TR>
	<?
	}
    ?>	
   </TABLE>
   </CENTER>
</body>
</html>