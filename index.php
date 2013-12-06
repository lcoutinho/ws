
        <?php
		
#define o encoding do cabeçalho para utf-8
@header('Content-Type: text/html; charset=utf-8');
#carrega o arquivo XML e retornando um Array
		$path = "http://suaurl/ws/cria.php";
      $xml = simplexml_load_file($path);
# se o xml for um link e nao um arquivo como livros.xml, troque -o pelo link ex.
# $xml = simplexml_load_file(“http://endereco/link/mesmoQueNaoTenhaExtensaoXML/“);
#para cada nó LIVRO  atribui à variavel $livro (obj simplexml)
foreach($xml->contato as $livro)
{

#usando o utf8_decode para exibir com acentos
 echo $livro->nome."<br/>";
echo $livro->telefone."<br/>";
echo $livro->endereco."<br/>";

echo "<br>";
}

     // print_r($xml);
	  
	  
	

?>
      

