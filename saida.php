<?php
  $nomeAluno = $_POST['nomeAluno'];
  $nomeDisciplina = $_POST['disciplina'];
  $nomeCurso =$_POST['nomeCurso'];
  $logomarca = $_POST['logomarca'];
  $notaVa1 = $_POST['notaVa1'];
  $notaVa2 = $_POST['notaVa2'];
  $notaVa3 = $_POST['notaVa3'];
  $notaTrabalhos = $_POST['notaTrabalhos'];
  $nomeProfessor = $_POST['nomeProfessor'];
  $nomeCoordenador = $_POST['nomeCoordenador'];
  $conceito;
  $total= ($notaVa1+$notaVa2+$notaVa3+$notaTrabalhos);
  $resultado=($total >=60)
  			? ''
  			: '<b><font color=red>NÂO</font></b>';
  
  
  echo '<h1 align=center><img src= '.$logomarca.' alt= Faculdades Promove  title= Faculdades Promove width=300px height=100px> </h1>';
  echo '<h1 align=center> Declaração </h1>';
  echo '<p align=center> Declaramos para os devidos fins, que ' .$nomeAluno.' '.$resultado .' concluiu satisfatoriamente as atividades
              da disciplina '.$nomeDisciplina. ' do curso '.$nomeCurso. '. </p>';
  echo '<p align=center> Segue o desempenho de '.$nomeAluno. ' :</p>';
  echo '<table border=1 align=center>   
	<trConcluiu>
        <th> Critério </th>
        <th> Valor total </th>
        <th> Nota do aluno </th>
        <th> Desempenho (%) </th>
    </tr>

    		<br>
    <tr>
    <td> Prova 1 </td>
    <td> 15 </td>
    <td> '.$notaVa1.' </td>
    <td> '.$desempenho = round($notaVa1 * 100 / 15) .'% </td>
    </tr>

    <tr>
    <td> Prova 2 </td>
   <td> 25 </td>
    <td> '.$notaVa2.' </td>
    <td> '.$desempenho = round($notaVa2 * 100 / 25) .'% </td>
    </tr>

    <tr>
    <td> Prova 3 </td>
    <td> 35 </td>
    <td> '.$notaVa3.' </td>
    <td> '.$desempenho = round($notaVa3 * 100 / 35) .'% </td>
    </tr> 
    
    <tr>
    <td> Trabalhos </td>
    <td> 25 </td>
    <td> '.$notaTrabalhos.' </td>
    <td> '.$desempenho = round($notaTrabalhos * 100 / 25) .' % </td>
    </tr>

  </table><br>';
  
if($total>=90){
	$conceito= 'excelente';
}
else if($total>=80 && $total<90){
	$conceito = 'ótimo';
}
else if($total>=70 && $total <80){
	$conceito = 'bom';
}
else if ($total>=60 && $total<70){
	$conceito	= 'ruim';
}
else {
	$conceito	= 'péssimo';
}
 echo '<p align=center> Com esse resultado, o conceito de '.$nomeAluno. ' foi <i>'.$conceito.'</i>, já que sua nota total foi de <b>'.$total.	'</b> pontos.  </p><br>
 <p align=center> Belo Horizonte, '.date("d/m/Y").'</p><br>
 		<hr width=300px></hr>
 		<p align=center>'.$nomeProfessor.' - Professor(a)</p><br>
 		<hr width=300px></hr>
 		<p align=center>'.$nomeCoordenador.' - Coordenador(a)</p>
 '


?>