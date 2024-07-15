<?php 

	require_once('../lib/pdf/mpdf.php');

	$html = '<body style="background-color: #ffffff;">
	<div class="container-fluid">
		<div class="logo">
			<img src="img/ifbaloi.png">
		</div>

		<div class="cabe">
			<h1 style="color: #003783; font-size: 24px;"><strong>Cursos Presenciais</strong></h1>
			<h3 style="color: #003783; font-size: 15px;"><strong>Para o sector bancário</strong></h3>
		</div>

		<div class="cabec">
			<h1 style="color: #003783; font-size: 50px;"><strong>2018</strong></h1>
		</div>

		
		<div class="cabeca">
			<p style="color: #ff0000; font-size: 24px; text-shadow: 1px 1px 1px #000; text-align: center;"><strong>Inscrições<br>abretas</strong></p>
			<p style="text-align: center;"><strong>Sujeita às vagas disponíveis</strong></p>
		</div>
	</div>

	<div class="container-fluid">
		<div class="tabela">
			<table width="900">
				<tr>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Áreas e Cursos</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Jun</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Jul</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Ago</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Set</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Out</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Nov</th>
					<th style="color: #003783; text-align: center; font-size: 18px;" scope="col">Dez</th>
				</tr>
				<tr>
					<th style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">Área de Comportamento Organizacional</th>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #60a345; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Gestão de Tempo</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">6 e 7</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">7 e 8</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">16 e 17</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<tr>
					<th scope="row">Liderença de Equipa</th>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
					<td style="text-align: center; background-color: #ecedef;">8 à 10</td>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;">9 à 11</td>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;">18 à 20</td>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
				</tr>
				<!------------------------------------------ Segunda linha ---------------------------------------------->
				<tr>
					<th style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">Área de Contab. e Análise de Empresas</th>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #3b63a7; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Análise Económica-Financeira de Empresas</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">12 à 15</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">7 à 10</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Auditoria Bancária</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">22 à 26</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">21 à 25</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Avaliacção de Projecto de Investimentos</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">27 à 31</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">17 à 21</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">23 à 27</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">IAS/IFRS na Banca</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">3</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">5</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">11</td>
				</tr>
				<tr>
					<th style="font-size: 18px;" scope="row">Contabilidade Bancária</th>
					<td style="text-align: center font-size: 18px;;">&nbsp;</td>
					<td style="text-align: center font-size: 18px;; background-color: #ecedef;"></td>
					<td style="text-align: center font-size: 18px;;">&nbsp;</td>
					<td style="text-align: center font-size: 18px;; background-color: #ecedef;"></td>
					<td style="text-align: center font-size: 18px;;">19 à 23</td>
					<td style="text-align: center font-size: 18px;; background-color: #ecedef;"></td>
					<td style="text-align: center font-size: 18px;;">&nbsp;</td>
				</tr>
				<!----------------------------------------------------- terceira linha ------------------------------------------------>
				<tr>
					<th style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">Área de Crédito</th>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
					<td style="background-color: #008fd1; color: #fff; font-size: 18px;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Finaciamento de Bancário</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">17 à 19</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">7 à 9</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Análise de Risco de Crédito</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">13 e 14</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">21 e 22</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Crédito Particular</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">15 e 16</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">19 e 20</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Crédito de Empresas</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">8 à 10</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">16 à 18</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="font-size: 18px;" scope="row">Gestão de Recuperação de Crédito</th>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;"></td>
					<td style="text-align: center; font-size: 18px;">24 à 26</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;"></td>
					<td style="text-align: center; font-size: 18px;">19 à 21</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;"></td>
					<td style="text-align: center; font-size: 18px;">14 à 16</td>
				</tr>
				<!------------------------------------------------------ quarta linha ---------------------------------------->
				<tr>
					<th style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">Área de Direito</th>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #632f87; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Garantia Bancária</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">18 e 19</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">22 e 23</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Ética e Sigilo Bancário</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">17</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">3</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">1</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">5</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">3</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				
				<!-------------------------------------------------------- quinta linha -------------------------------------------->
				<tr>
					<th style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">Área de Mark. e Gestão de Activ. Comercial</th>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #a61484; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Qualidade no Atendimento</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">3 e 4</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">21 e 22</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">26 e 27</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Tácnicas de Negociação e Venda</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">5 à 7</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">28 à 30</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<!-----------------------------------------------------  sexta linha -------------------------------------------->
				<tr>
					<th style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">Área de Mercados Financeiros</th>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #db2128; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Mercado e Produtos Financeiros I</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">6 à 9</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">7 à 10</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">16 à 19</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Operaç. de Bolsa e a Interl. aos Mercados</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">2 e 3</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">1 e 2</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<!---------------------------------------------------------- sétima linha ---------------------------------------->
				<tr>
					<th style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">Área de Operações Técnicas Bancária</th>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
					<td style="background-color: #dd9b00; font-size: 18px; color: #fff;" scope="row">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">AML-Combate ao Branq. de Capitais </th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">29 e 30</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">27 e 28</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">24 e 25</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">26 e 27</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">3 e 4</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Cálculo Financeiro</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">27 à 31</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">7 à 11</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">5 à 9</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Produtos Báncarios e Financeiros</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">15 à 18</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">10 à 13</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">5 à 8</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="border-bottom: 1px solid; font-size: 18px;" scope="row">Meio e Sistemas de Pagam. Eletrónico</th>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">20 à 23</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">7 à 10</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef; border-bottom: 1px solid;">3 à 6</td>
					<td style="text-align: center; font-size: 18px; border-bottom: 1px solid;"></td>
				</tr>
				<tr>
					<th style="font-size: 18px;" scope="row">Operações Documentárias no Comér. Intern.</th>
					<td style="text-align: center; font-size: 18px;">&nbsp;</td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;">3 e 2</td>
					<td style="text-align: center; font-size: 18px;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;">1 e 2</td>
					<td style="text-align: center; font-size: 18px;"></td>
					<td style="text-align: center; font-size: 18px; background-color: #ecedef;"></td>
					<td style="text-align: center; font-size: 18px;">3 e 4</td>
				</tr>

			</table>
			<div class="hora">
				<h3 style="margin-top: 40px; color: #008fd1;">Horário dos Cursos</h3>
				<p><strong>Laboral: </strong>Dás 08h00 às 12h00 e dás 13h00 às 16h00, de segunda à sexta</p>
				<p style="border-bottom: 4px solid #008fd1;"><strong>Pós-Laboral: </strong>Dás 17h00 às 20h30m (Nº de dias de calendário x2.)</p>

				<h4 style="margin-top: 40px; color: #008fd1;">Para mais informações</h4>
				<p><strong>E-mail:</strong>info@ifba.co.ao</p>
				<p><strong>Telefone:</strong>+244 923 987 356</p>
				<p>Largo Bressano Leite nº 6, Luanda-Angola</p>
			</div>
		</div>
		</body>';

	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('css/bootstrap.min.css');
	$mpdf->writeHTML($css, 1);
	$css = file_get_contents('css/estilos.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('Calendario de Cursos.pdf', 'I');

 ?>