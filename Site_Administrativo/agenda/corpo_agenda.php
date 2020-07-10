
   <html>
   <?php include "../banco_de_dados/valida_cookies_adm.inc.php" ?>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Agenda de Compromissos</title>
   <style type="text/css">
   .tabela{
   background:#fff;
   width:400px;
   padding:0px;
   border:1px solid #f0f0f0;
   float:left;
   margin-right:20px;
   margin-left:250px;

   }
   .td{
   background:#f8f8f8;
   width:40px;
   height:40px;
   text-align:center;
   
   }
   .hj{
   background: #FFFFCC;
   width:40px;
   height:40px;
   text-align:center;
   }
   .dom{
   background: #FFCC99;
   width:40px;
   height:40px;
   text-align:center;
   }
   .evt{
   background: #CCFF99;
   width:40px;
   height:40px;
   text-align:center;
   }
   .mes{
   background:#fff;
   width:auto;
   height:40px;
   text-align:center;
   }
   .show{
   background:#202020;
   width:300px;
   height:30px;
   text-align:left;
   font-size:12px;
   font-weight:bold;
   color:#CCFF00;
   padding-left:5px;
   }
   .linha{
   background:#404040;
   width:300px;
   height:20px;
   text-align:left;
   font-size:11px;
   color:#f0f0f0;
   padding:1px 1px 1px 10px;
   }
   .sem{
   background: #ECE6D9;
   width:auto;
   height:20px;
   text-align:center;
   font-size:12px;
   font-weight:bold;
   font-family:Verdana;
   }
   body,td,th {
	   font-family: Verdana;
	   font-size: 11px;
	   color: #000000;
   }
   a:link {
	   color: #000000;
	   text-decoration: none;
   }
   a:visited {
	   text-decoration: none;
	   color: #000000;
   }
   a:hover {
	   text-decoration: underline;
	   color: #FF9900;
   }
   a:active {
	   text-decoration: none;
   }
       
   </style>
   <link rel="icon" href="../../Cliente-visual/img/balanca.ico">
   </head>
   
   <body>
   
   <?php 
   include "../banco_de_dados/conexao_banco_de_dados.inc.php";//conexão com o banco de dados
   
   //selecione o banco de dados
   $qt=0;
   if(empty($_GET['data'])){//navegaçao entre os meses
	   $dia = date('d');
	   $month = ltrim(date('m'),"0");
	   $ano = date('Y');
	   
   }else{
	   $data = explode('/',$_GET['data']);//nova data
	   $dia = $data[0];
	   $month = $data[1];
	   $ano = $data[2];
	   
   }
   
   if($month==1){//mês anterior se janeiro mudar valor
	   $mes_ant = 12;
	   $ano_ant = $ano - 1;
   }else{
	   $mes_ant = $month - 1;
	   $ano_ant = $ano;
   }
   
   if($month==12){//proximo mês se dezembro tem que mudar
	   $mes_prox = 1;
	   $ano_prox = $ano + 1;
   }else{
	   $mes_prox = $month + 1;
	   $ano_prox = $ano;
   }
//echo"$n<br>$mes<br>";
   $hoje = date('j');//função importante pego o dia corrente
   switch($month){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
	   case 1: $mes ="JANEIRO";
			   $n = 31;
	   break;
	   case 2: $mes ="FEVEREIRO";// todo ano bixesto fev tem 29 dias
			   $bi = $ano % 4;
			   if($bi == 0){
				   $n = 29;
			   }else{
				   $n = 28;
			   }
	   break;
	   case 3: $mes ="MARÇO";
			   $n = 31;
	   break;
	   case 4: $mes ="ABRIL";
			   $n = 30;
	   break;
	   case 5: $mes ="MAIO";
			   $n = 31;
	   break;
	   case 6: $mes ="JUNHO";
			   $n = 30;
	   break;
	   case 7: $mes ="JULHO";
			   $n = 31;
	   break;
	   case 8: $mes ="AGOSTO";
			   $n = 31;
	   break;
	   case 9: $mes ="SETEMBRO";
			   $n = 30;
	   break;
	   case 10: $mes ="OUTUBRO";
			   $n = 31;
	   break;
	   case 11: $mes ="NOVEMBRO";
			   $n = 30;
	   break;
	   case 12: $mes ="DEZEMBRO";
			   $n = 31;
	   break;
   }
   echo"<table><tr><td valign='top'>";
   $pdianu = mktime(0,0,0,$month,1,$ano);//primeiros dias do mes
   $dialet = date('D', $pdianu);//escolhe pelo dia da semana
   switch($dialet){//verifica que dia cai
	   case "Sun": $branco = 0; break;
	   case "Mon": $branco = 1; break;
	   case "Tue": $branco = 2; break;
	   case "Wed": $branco = 3; break;
	   case "Thu": $branco = 4; break;
	   case "Fri": $branco = 5; break;
	   case "Sat": $branco = 6; break;
   }			
   
	   print '<table class="tabela">';//construção do calendario
	   print '<tr>';
	   print '<td class="mes"><a href="?data='.$dia.'/'.$mes_ant.'/'.$ano_ant.'" title="Mês anterior">  « </a></td>';/*mês anterior*/
	   print '<td class="mes" colspan="5">'.$mes.'/'.$ano.'</td>';/*mes atual e ano*/
	   print '<td class="mes"><a href="?data='.$dia.'/'.$mes_prox.'/'.$ano_prox.'" title="Próximo mês">  » </a></td>';/*Proximo mês*/
	   print '</tr><tr>';
	   print '<td class="sem">D</td>';//printar os dias da semana
	   print '<td class="sem">S</td>';
	   print '<td class="sem">T</td>';
	   print '<td class="sem">Q</td>';
	   print '<td class="sem">Q</td>';
	   print '<td class="sem">S</td>';
	   print '<td class="sem">S</td>';
	   print '</tr><tr>';
	   $dt = 1;
	   if($branco > 0){
		   for($x = 0; $x < $branco; $x++){
				print '<td> </td>';/*preenche os espaços em branco*/
			   $dt++;
		   }
	   }
	   
	   for($i = 1; $i <= $n; $i++ ){/*agora vamos no banco de dados verificar os evendos*/
			   $dtevento = $i."-".$month."-".$ano;
		   $sqlag = mysqli_query($conn,"SELECT * FROM agenda WHERE dtevento = '$dtevento'") or die(mysqli_error());
				   $num = mysqli_num_rows($sqlag);/*quantos eventos tem para o mes*/
				   $res=mysqli_fetch_row($sqlag);
				   $idev =$res[2];// @mysql_result($sqlag, 0, "dtevento");
				   $eve =$res[1];// @mysql_result($sqlag, 0, "evento");
				   
				   if($num > 0){/*prevalece qualquer dia especial do calendario, por isso está em primeiro*/
			  print '<td class="evt">';
			  print '<a href="?d='.$idev.'&data='.$dia.'/'.$month.'/'.$ano.'" title="'.$eve.'">'.$i.'</a>';
			  print '</td>';
			  $dt++;/*incrementa os dias da semana*/
					  $qt++;/*quantos eventos tem no mes*/
		   }elseif($i == $hoje){/*imprime os dia corrente*/
			   print '<td class="hj">';
			   print $i;
			   print '</td>';
			   $dt++;
		   
		   }elseif($dt == 1){/*imprime os domingos*/
			   print '<td class="dom">';
			   print $i;
			   print '</td>';
			   $dt++;
		   }else{/*imprime os dias normais*/
					   print '<td class="td">';
			   print $i;
			   print '</td>';
			   $dt++;
				   }
		   if($dt > 7){/*faz a quebra no sabado*/
		   print '</tr><tr>';
		   $dt = 1;
		   }
	   }
	   print '</tr>';
	   print '</table>';
	   echo"</td><td valign='top'>";
		   if($qt > 0){/*se tiver evento no mês imprime quantos tem */
			 print "Temos ".$qt." evento(s) em ".strtolower($mes)."<br>";/*mudar para caixa baixa as letras do mes*/
		   }
   if(isset($_GET['d'])){/*link dos dias de eventos*/
	   $idev = $_GET['d'];
	   $sqlev = mysqli_query($conn,"SELECT * FROM agenda WHERE dtevento = '$idev' ORDER BY hora ASC");
	   $numev = mysqli_num_rows($sqlev);
	   for($j = 0; $j < $numev; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
	   $res_evento=mysqli_fetch_row($sqlev);
	   $eve = $res_evento[0];//@mysql_result($sqlev, $j, "evento");/*pegando os valores do banco referente ao evento*/
	   $dev = $res_evento[1];//@mysql_result($sqlev, $j, "dtevento");
	   $dsev = $res_evento[2];//@mysql_result($sqlev, $j, "conteudo");
	   $lev = $res_evento[3];//@mysql_result($sqlev, $j, "local");
	   $psev = $res_evento[4];//@mysql_result($sqlev, $j, "data");
	   $nowev = date('d/m/Y - H:i', strtotime($psev));/*transforma a data para data padrão brazil*/
	   $hev = $res_evento[5];//@mysql_result($sqlev, $j, "hora"); 
   print '<table width="300" cellspacing="0" cellpadding="0">';/*monta a tabela de eventos*/
   print '<tr><td class="show">'.$dev.'</td></tr>';
   print '<tr><td class="linha"><b>Hora: </b>'.$lev.'hs</td></tr>';
   print '<tr><td class="linha"><b>Local: </b>'.$hev.'</td></tr>';
   print '<tr><td class="linha"><b>Descrição: </b>'.nl2br($psev).'</td></tr>';/*mantem o quebra da linha para dascriçao do evento*/
   //print '<tr><td class="linha"><b>Postado: </b><small>'.$nowev.'hs por '.$auev.'</small></td></tr>';
   print '<tr><td class="linha"><b><form action="modify_evento.php" method="post"><input type="hidden" value="'.$eve.'" name="id"><input type="submit" value="Modificar"></form></b></td></tr>';
   print '</table>';
	   }
   }
   
   ?>
   </td></tr></table><?php include "evento_agenda.php";?>
   </body>
   </html>