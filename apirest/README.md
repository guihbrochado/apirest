# apirest


Este projeto é uma api que executa funções CRUD utilizando REST.
A linguagem utilizada foi PHP com framework Laravel e o gerenciador de dependências Composer.


Para que a API seja executada você necessita dos seguintes requisitos instalados:
Apache
PHP 7.3
mysql 5.5
composer
Laravel 7.3.0
Postman


Para que implemente mais funcionalidade ao projeto você tem de clonar a estrutura para o diretório de sua preferência e a partir dai construir as demais funcionalidades desejadas.


Para realizar os testes da aplicação é necessário clonar a mesma para um ambiente com apache php, mysql, composer.
Após clonas a estrutura do projeto é necessário importar o arquivo DATABASE.sql em uma base de dados mysql.
O arquivo pode ser encontrado na raiz do projeto na pasta apirest


O próximo passo é ajustar a conexão do banco de dados, no arquivo /apirest/rest/.env


Feito a configuração do banco via terminal deverá ser executado o seguinte comando:
$ php artisan serve

Ele vei devolver uma saída semelhante a seguinte:
Laravel development server started: http://127.0.0.1:8000


Feito isso a aplicação esta pronta para uso.
Os testes realizados foram utilizando a ferramenta Postman.


Passos para os testes:
Copiar o endereço http da saída do comando anterior


http://127.0.0.1:8000 e passar o seguinte endpoint /api/todos
EX:
Para uma consulta dos dados no banco de dados vamos usar o metodo GET e passar a URL: http://127.0.0.1:8000/api/todos
Para buscar uma única informação também vamos usar o método GET passando o ID da informação no banco. URL: http://127.0.0.1:8000/api/todos/id


Para inserir uma informação usaremos o método POST postman vamos ao campo params e vamos informar as keys description e completed e os values ambos com strings. URL http://127.0.0.1:8000/api/todos


Para atualização de informação o método usado é o PUT em params vai informar a key que deseja atualizar e o id que possui no banco de dados. URL: http://127.0.0.1:8000/api/todos/id


Por fim para remover informações o método utilizado é o DELETE, nele é necessário informar qual o id vai ser removido. URL: http://127.0.0.1:8000/api/todos/id