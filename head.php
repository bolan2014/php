<table width="780" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <tr>
    <td bgcolor="#FFFFFF"><img src="images/aa.jpg" width="780" height="150" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="780" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php" title="��ҳ">��ҳ</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php?proid=<?php echo urlencode('��ҳ����');?>" title="��ҳ����">��ҳ����</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php?proid=<?php echo urlencode('����Ӫ��');?>" title="����Ӫ��">����Ӫ��</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php?proid=<?php echo urlencode('asp���');?>" title="asp���">ASP���</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php?proid=<?php echo urlencode('php���');?>" title="php���">PHP���</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="index.php?proid=<?php echo urlencode('�������');?>" title="�������">�������</a></td>
        <td align="center" background="images/button1_bg.jpg"><a href="landing.php"  title="�û���½">�û���½</a>&nbsp;&nbsp;<?php 
		ini_set("error_reporting","E_ALL & ~E_NOTICE");
		if ($_SESSION['id']){
			echo "<a href='landing.php?tj=out'  title='�˳�'>�˳�</a>";
		}
		?></td>
      </tr>
    </table></td>
  </tr>
</table>