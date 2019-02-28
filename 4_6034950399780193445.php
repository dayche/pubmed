<?php
	header("Content-Type: text/html");

	$index = $_GET['page'];

	$context  = stream_context_create([
		'http' => [
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => http_build_query([
				'term' => 'Thalassemia[MeSH Terms] ',
				'EntrezSystem2.PEntrez.PubMed.Pubmed_ResultsPanel.Pubmed_DisplayBar.sPageSize' => '100',
				'EntrezSystem2.PEntrez.PubMed.Pubmed_ResultsPanel.Pubmed_Pager.CurrPage' => '63',
				'EntrezSystem2.PEntrez.DbConnector.Db' => 'pubmed',
				'EntrezSystem2.PEntrez.DbConnector.Term' => 'Thalassemia[MeSH Terms]',
				'EntrezSystem2.PEntrez.DbConnector.LastQueryKey' => '4',
				'EntrezSystem2.PEntrez.DbConnector.Cmd' => 'PageChanged',

			])
		]
	]);
	

//	$dom = new DOMDocument;
//	$dom->loadHTML(file_get_contents('https://www.ncbi.nlm.nih.gov/pubmed', false, $context));
//	$xpath = new DOMXPath($dom);
//	$links = $xpath->query("//div[contains(@class, 'rprt')]/div[contains(@class, 'rslt')]/p[contains(@class, 'title')]/a");

//	$jsonData = file_get_contents('https://www.ncbi.nlm.nih.gov/pubmed', false, $context);
//	$arrayData = json_decode($jsonData, true);
//	$links = $arrayData['ArticleCollection']['Articles'];
//	print_r($links);die();

//	foreach($links as $link) {
//		echo "','" . $link->getAttribute('href'); 
//	}

echo file_get_contents('https://www.ncbi.nlm.nih.gov/pubmed', false, $context);
