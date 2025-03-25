# Imagem base: Nginx oficial
FROM nginx:latest

# Copia configuração customizada do Nginx para o container
COPY nginx.conf /etc/nginx/nginx.conf

# Porta exposta (deve corresponder à configuração no nginx.conf)
EXPOSE 4500

# Observação: O arquivo index.php deve ser montado via volume 
# ou adicionado via COPY em um estágio de build posterior
