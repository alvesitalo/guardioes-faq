# Guardiões FAQ
Plugin que adiciona o FAQ ao site do Guardiões da Saúde e permite ser utilizado por endpoints.

## Instalação

### Instalando dependências
1. Clone o repositório [Basic-Auth](https://github.com/WP-API/Basic-Auth) e depois copie-o para a pasta *plugins* (/wp-content/plugins):
```
git clone https://github.com/WP-API/Basic-Auth.git
```
2. Ative o plugin no painel do WordPress

### Configurando Usuário permitido
1. Crie um usuário no painel com função de Colaborador.
2. Acrescente as seguintes linhas ao arquivo *wp-config.php*, localizado na raiz do site:
```
define( 'FAQ_USER', 'username' );
define( 'FAQ_PASSWORD', 'senha' );
```
3. Substitua o username e senha pelos do usuário que criou no passo 1.


## Solucionando problemas

### Mensagem "Sem permissão para criar posts com este usuário."
1. Verifique se plugin Basic-Auth está instalado e ativo no painel.
2. Verifique se os dados do usuário estão corretos no arquivo *wp-config.php*.
2. Adicione a seguinte linha ao arquivo .htaccess, localizado na raiz do site:

Após a linha RewriteEngine On, adicionar:
```
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
```

----
## Copyright
ProEpi, Associação Brasileira de Profissionais de Epidemiologia de Campo