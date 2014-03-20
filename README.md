# BRAZIL DATA FORMAT

Classe simples para converter datas no formato TIMESTAMP (yyyy-mm-dd hh:ii:ss) para o padrão brasileiro.


### Utilização
Para utilizar essa classe, basta incluí-la em seu arquivo:

```php
$data = '2014-01-01 23:59:59';
get_data($data); //retorna a data com o ano abreviado. Ex.: 01/01/14
get_data_full($data); //retorna a data com o ano completo. Ex.: 01/01/2014
get_hora($data); //retorna a hora, no fomrato 23:59:59.
```