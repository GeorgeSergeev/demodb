<html>
<head>
</head>
<body>
   <?
   //���������� � ����� ������
    $link = mysql_connect ("localhost", "root", "") or die ("Could not connect");
   //����� ���� ������ 
    $base=mysql_select_db ("note");
    mysql_query("SET NAMES cp1251");
	
	//������ � ���� ������
    $query="select * from nt where city = '�����������'";		
  ?>
   <CENTER>Hello!
   <TABLE width=800 border=1>
     <TR>
	   <TD> �.�.�.</TD>
	   <TD> ����� </TD>
	   <TD> ������� </TD>
	 </TR>
	<?
	$res=mysql_query ($query) or die ("�� ���� ������� ���������.<br> ������ � �������: ".$query);
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