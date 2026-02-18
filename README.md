# Teste Matheus Henrique

Este projeto é um sistema web desenvolvido com **Laravel 12**, **Livewire**, **TailwindCSS** e Docker, pronto para ser rodado em container. O objetivo é fornecer um ambiente pronto para desenvolvimento e deploy local.

---

## Tecnologias utilizadas

- **Backend:** Laravel 12 (PHP 8.2)  
- **Frontend:** Livewire, TailwindCSS, Vite  
- **Banco de dados:** MySQL (via Docker)  
- **Containers:** Docker + Docker Compose  
- **Controle de versão:** Git  
- **Testes:** PHPUnit e Pest  

---

## Como clonar o projeto

```bash
git clone https://github.com/Matheus557/teste-matheus-henrique-da-silva.git
cd teste-matheus-henrique-da-silva

1. Build e start dos containers: docker-compose up -d --build
2. Acessando o sistema no navegador: http://localhost:8000
3. Parar os containers: docker-compose down
4. Entrar no container PHP para executar comandos artisan:
    docker exec -it <nome_do_container_php> bash
    # Exemplo:
    docker exec -it laravel-app bash
```
    

## Executando os Testes

Para rodar os testes do projeto, você precisa estar dentro do container PHP. Use os comandos abaixo:

```bash
# Entre no container PHP
docker exec -it <nome_do_container_php> bash
# Exemplo:
docker exec -it teste-app bash

# Execute todos os testes com Pest
./vendor/bin/pest
```


