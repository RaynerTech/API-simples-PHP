<?php
//$conexao = mysqli_connect('localhost','root','');
	//$banco = mysqli_select_db($conexao,'pessoa');
//$con = mysqli_query($conexao,"select * from tb_clientes group by NOME") or die("Error");

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'pessoa');
$sql = mysqli_query($conexao,"select * from tb_clientes group by NOME") or die("Erro");


?>
<style type="text/css">
<!--
.style2 {color: #FFFFFF; }
-->
</style>



<table width="727" border="1" align="center">
  <tr>
    <td colspan="5" bgcolor="#0099FF"><div align="center" class="style2">
      <div align="center">CLIENTES CADASTRADO</div>
    </div></td>
  </tr>
  <tr>
    <td width="64" bgcolor="#0099FF"><div align="center" class="style2 style2 style2 style2">
      <div align="center">COD</div>
    </div></td>
    <td width="105" bgcolor="#0099FF"><div align="center" class="style2 style2 style2 style2">
      <div align="center">NOME</div>
    </div></td>
    <td width="118" bgcolor="#0099FF"><div align="center" class="style2 style2 style2 style2">
      <div align="center">FONE</div>
    </div></td>
    <td width="208" bgcolor="#0099FF"><div align="center" class="style2 style2 style2 style2">
      <div align="center">E-MAIL</div>
    </div></td>
    <td width="198" bgcolor="#0099FF"><span class="style2">EXCLUIR</span></td>
  </tr>
  <?php
while($dados=mysqli_fetch_assoc($sql))
{

?>
  <tr>
    <td bgcolor="#0099FF"><div align="center"><span class="style2"><?php echo $dados['ID']; ?></span></div></td>
    <td bgcolor="#0099FF"><div align="center"><span class="style2"><?php echo $dados['NOME']; ?></span></div></td>
    <td bgcolor="#0099FF"><div align="center"><span class="style2"><?php echo $dados['FONE']; ?></span></div></td>
    <td bgcolor="#0099FF"><div align="center"><span class="style2"><?php echo $dados['EMAIL']; ?></span></div></td>
    <td bgcolor="#0099FF"><div align="center">
    <div align="center"><a  title="excluir" href="del.php?cod_cliente=<?php echo $cod; ?>"><img src="excluir.png" width="30" height="30" /></a></div></td>
  </tr>
  <?php
  }
  ?>
</table>


