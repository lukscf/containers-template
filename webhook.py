from flask import Flask, request
import logging
import os

app = Flask(__name__)

# Configure logging with a fallback
log_file = '/var/www/html/debug.log'
try:
    logging.basicConfig(
        filename=log_file,
        level=logging.DEBUG,
        format='%(asctime)s %(levelname)s: %(message)s'
    )
except PermissionError as e:
    print(f"Warning: Cannot write to log file {log_file}: {e}")
    logging.basicConfig(level=logging.DEBUG)  # Fallback to console logging

@app.route('/webhook', methods=['POST'])
def handle_webhook():
    try:
        data = request.json
        app.logger.debug(f"Recebido: {data}")
        return "Webhook recebido com sucesso!", 200
    except Exception as e:
        app.logger.error(f"Erro: {str(e)}")
        return "Erro: Payload JSON inválido", 400
