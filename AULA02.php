<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>
		  ATIVIDADE 1 - PHP
		</title>
	</head>
	<body>
		<h1 ALIGN= 'CENTER'>
		  PHP - Atividade 01
		</h1>
		<br>
		<p ALIGN='LEFT'>
			Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:
		</p>
		<br>
		<?PHP $A =10; $B=20; ?>
		<table ALIGN= 'CENTER' BORDER='1' WIDTH='700px'>
		<thead ALIGN= 'CENTER'>
			<tr>
				<th>
					Operação
				</th>
				<th>
					Resultado
				</th>
			</tr>
		</thead>
		<tbody ALIGN= 'CENTER'>
			<tr>
				<td>
					A + B
				</td>
				<td>
					<?PHP
						ECHO $A + $B;
					?>
				</td>
			</tr>
			<tr>
				<td>
					A - B
				</td>
				<td>
					<?PHP
						ECHO $A - $B;
					?>
				</td>
			</tr>
			<tr>
				<td>
					A x B
				</td>
				<td>
					<?PHP
						ECHO $A * $B;
					?>
				</td>
			</tr>
			<tr>
				<td>
					A / B
				</td>
				<td>
					<?PHP
						ECHO $A / $B ..0;
					?>
				</td>
			</tr>
			<tr>	
				<td>
					B<sup>A</sup>
				</td>
				<td>
					<?PHP
						ECHO number_format(pow($B, $A), 0, ',', '.'); 
					?>
				</td>
			</tr>
		</tbody>
		</table>
	</body>
</html>