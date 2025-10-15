# Feira Vagas - Plataforma de Vagas de Emprego

## Sobre o Projeto

A Feira Vagas é uma aplicação moderna desenvolvida em Laravel que demonstra minhas habilidades e conhecimentos adquiridos ao longo de dois anos de estudos e prática em desenvolvimento web.

### Características Técnicas
- **Arquitetura**: Single Page Application (SPA) com implementação personalizada
- **Tecnologia**: Laravel Framework
- **Containerização**: Docker para ambiente de desenvolvimento consistente

## Pré-requisitos

- Docker instalado na sua máquina
- Docker Compose (opcional, mas recomendado)

## Imagem Docker

A aplicação está disponível no Docker Hub:
- **Perfil**: `devguilhermeribeiiro`
- **Repositório**: `feira-vagas-php`

## Instalação e Execução

### Docker Compose (Recomendado)

Clone o repositório (se aplicável)
```bash
# git clone [url-do-repositorio]
```
## Execute a aplicação
```bash
docker-compose up -d
```
### Docker Run
```bash
docker run -d -p 80:80 devguilhermeribeiiro/feira-vagas-php
```
### Configuração Inicial

Após iniciar os containers, execute os seguintes comandos para configurar a aplicação:

### Acesse o container da aplicação
```bash
docker exec -it [container-id] bash
```

### Execute as migrações do banco de dados
```bash
php artisan migrate
```

### Gere a chave da aplicação
```bash
php artisan key:generate
```

### Execute os seeders para dados iniciais
```bash
php artisan db:seed
```
