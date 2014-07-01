<?php
/*
	Student ID : 1784765
	Name: Vivek S Patil
	Functonality : This page loads xml and xsl files and returns the results in HTML format specied in xsl file
*/

$xmlDoc = new DomDocument;
$xmlDoc->load("../../data/auction.xml");
$xslDoc = new DomDocument;
$xslDoc->load("generateReport.xsl");
$proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc);
echo $proc->transformToXML($xmlDoc);
?>