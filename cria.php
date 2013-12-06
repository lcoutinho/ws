<?php
#versao do encoding xml
$dom = new DOMDocument("1.0", "ISO-8859-1");
 
#retirar os espacos em branco
$dom->preserveWhiteSpace = false;
 
#gerar o codigo
$dom->formatOutput = true;
 
#criando o nó principal (root)
$root = $dom->createElement("agenda");
 
#nó filho (contato)
$contato = $dom->createElement("contato");

function addContato($document, $nome, $fone, $end)
{
 #criar contato
 $contato = $document->createElement("contato");
 
 #criar nó nome
 $nomeElm = $document->createElement("nome", $nome);
 
 #fone
 $foneElm = $document->createElement("telefone", $fone);
 
 #endereco
 $endElm = $document->createElement("endereco", $end);
 
 $contato->appendChild($nomeElm);
 $contato->appendChild($foneElm);
 $contato->appendChild($endElm);
 return $contato;
}
 
$dom = new DOMDocument("1.0", "ISO-8859-1");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
 
$root = $dom->createElement("agenda");
 
#utilizando a funcao para criar contatos
$Tiao = addContato($dom, "Tiao J.", "5555-4444", "R. Jaú, 3");
$Joao = addContato($dom, "Joao S.", "4444-5555", "R. Itú, 4");
 
#adicionando no root
$root->appendChild($Tiao);
$root->appendChild($Joao);
$dom->appendChild($root);
 
#salvando o arquivo
//$dom->save("agenda.xml");
 
#mostrar dados na tela
header("Content-Type: text/xml");
print $dom->saveXML();
 ?>