import requests
import json

def send_webhook_message():
    # URL do webhook - substitua pelo seu endereço real
    webhook_url = "https://cruzferreira.com.br/webhook" # Certifique-se de usar o URL correto

    # Dados a serem enviados (um dicionário JSON simples)
    data = {
        "message": "Esta é uma mensagem de teste para o webhook!"
    }

    try:
        # Envia a solicitação POST com os dados em JSON
        response = requests.post(webhook_url, json=data)

        # Verifica o status da resposta
        if response.status_code == 200:
            print("Webhook recebido com sucesso!")
            print("Resposta do servidor:", response.text)
        else:
            print(f"Erro ao enviar: Status code {response.status_code}")
            print("Resposta do servidor:", response.text)
    except Exception as e:
        print(f"Ocorreu um erro: {e}")

if __name__ == "__main__":
    send_webhook_message()
