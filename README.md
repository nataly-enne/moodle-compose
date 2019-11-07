# moodle-dev-env
Criando plugin 'local' no moodle com docker-compose


# Ambientalizando com docker

### Ambiente docker para a utilização do moodle:
```git
git clone https://github.com/srssaulo/moodle-dev-env.git
```

### Dentro da pasta html, faça:
```git
git clone https://github.com/SrtaEnne/moodle-dev-env.git
```

### Na raiz do projeto, faça:
```bash
./start 7.2 # é necessário passar a versão do php

ou

docker-compose  -f docker-compose-php5.6.yml up -d # executa o docker-compose.yml
```

Para acessar a página acesse `localhost:8080`

### Para parar o processo, vá até a raiz do projeto e faça:
```bash
./stop 7.2 # é necessário passar a versão do php
      
ou

docker-compose -f docker-compose-php7.2 down # executa o docker-compose.yml
```   

# Estrutura:
1. **moodledatas** 
    * Espaço reservado para criar sua pasta do Moodledata.;
    * Padrão sugerido: `moodledata_[nome_da_aplicacao]`;
    
2. **php7.0-ubuntu**
    * Dockfile contendo as configurações do serviço.    

3. **postgres**
    * **./postgres/postgres-data**: 
      * a pasta deve ser criada por você. Crie `/postgres/postgres-data`. É o volume que guardará    os dados na sua máquina local
    * /**scripts**: 
        * `init.sql`: por padrão cria uma base de dados chamada Moodle; **[Você pode alterar]**

### Você deve/pode alterar:

* `./postgres/script/init.sql`: altere o nome do banco de dados para criar uma nova base;
* `./moodledatas/`: crie aqui uma nova pasta moodledata para nova instância Moodle;

### Quaisquer dúvidas, clique [aqui](https://github.com/srssaulo/moodle-dev-env/blob/master/README.md).

