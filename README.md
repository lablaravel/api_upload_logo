<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# SOBRE O PROJETO
Estou aprendendo a criar um upload de imagem via API.
Material de Referncia  - <a href="https://larainfo.com/blogs/laravel-9-rest-api-image-upload-with-validation-example">Clique aqui </a>

# OBSERVAÇÕES

<p> Faça o clone desse repositório.</p>

<p> Depois, use o comando, mas não esquece que tem que ter instalado na sua máquina o PHP 8 e depois instale o composer</p>

```
composer install 
```

<p> Apos isso, instale um servidor Mysql, caso não tenha, pode usar o Xampp, se souber usar Docker melhor ainda </p>

<p> Não esqueça de configurar o seu arquivo .env </p>

<p> Uma vez instalado com servidor mysql, executar o comando </p>

```
php artisan migrate
```

<p> Vai no postman, não esqueça de adiciona, no headers, Accept -> application/json </p>
<p> No body, escolhe form-data </p>
<p> Adicione os campos da coluna do seu banco de dados, que é, nome, asn, url_logo.</p>
<p> Não esqueça, de alterar o tipo no postman para file </p>


<h1> O que aprendi com esse projeto </h1>

 > Qual diferença de usar validação de request dentro do controller e fora do controller ?

<p> Na própria documentação do laravel informa, que quando eu faço verificação fora do controller, meio que não sobrecarrego o controller de responsabilidade  e deixo outra class se responsabilizar por isso, uma vez verificado, ela me retorna um resultado, se for um sucesso, eu continuo o processo e retorno a resposta da minha função do meu controller, entretanto, caso eu tenha algum problema em alguma parte da requisição enviada via post, a class responsável ele retorna um erro com asmensagens personalizadas se assim eu quiser, e assim não aciona o resto do processo da minha função do meu controller até aquilo se resolver.</p>
