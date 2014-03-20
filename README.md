# BRAZIL DATA FORMAT

Classe simples para converter datas no formato TIMESTAMP (yyyy-mm-dd hh:ii:ss) para o padrão brasileiro.


### Utilização
Para utilizar essa classe, basta fazer o seguinte:

```php

include '/path/to/file/DataForm.class.php'; //inclui a classe

$data = new DataForm(); //Instancia a classe dentro de uma variável

$timestamp = '2014-01-01 23:59:59'; //data no formato TIMESTAMP

$data->set_data($timestamp); //seta a data dentro da classe

//Imprimindo a data formatada na tela na tela
echo $data->get_data($data); //retorna a data com o ano abreviado. Ex.: 01/01/14
echo $data->get_data_full($data); //retorna a data com o ano completo. Ex.: 01/01/2014
echo $data->get_hora($data); //retorna a hora, no fomrato 23:59:59.
```