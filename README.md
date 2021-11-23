<h1 align="center"><strong>All Black</strong></h1>

<p align="center"><strong>Problema</strong></p>
<p align="justify">
Os All Blacks possuem uma base de torcedores em planilha Excel.
- A planilha é atualizada mensalmente com base em um arquivo XML enviado pela
loja virtual da seleção na internet. Uma funcionária do Administrativo abre o arquivo
XML em um navegador e atualiza a planilha copiando e colando os dados.
- Os campos telefone e e-mail não são informados pela loja virtual, sendo atualizados
manualmente na planilha.
- Existem torcedores que não são enviados pela loja virtual sendo inseridos
manualmente na planilha.
- Os AllBlacks, periodicamente, enviam comunicados para seus torcedores
endereçados aos e-mails cadastrados na planilha.
- Os AllBlacks contam com uma funcionária dedicada exclusivamente para realizar
toda essa operação de atualização e envio dos e-mails.
- Visando reduzir custos, o presidente dos All Blacks ordenou que a funcionária seja
demitida, e a operação deverá ser realizada pela secretária que, por sua vez, tem
diversas outras ações diárias a fazer e não conseguirá realizar o trabalho da forma
como é feito.
</p>

## Solução
<p align="justify">
Sistema com login onde poderá importar o XML para a base de dados, também foi criado um CRUD para os registros de torcedores. É possivel importar a base de dados para Excel,
código de facil manuntenção para futuras implementações como por exemplo gerar outro tipo de exportação ou importação.</p>

## Tecnologias usadas
- Laravel Framework. 
- VueJS.
- Argon Dashboard.
- Bootstrap 4.
- Animate.css.

## Como instalar

<p align="justify">
A configuração é feita como a de qualquer projeto Laravel, primeiro ajuste o seu ".env" para conter os dados do seu banco corretamente, depois rode os comando "composer install",
"php artisan migrate --seed" e também npm install, Tudo feito! aproveite ;)</p>
