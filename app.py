from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

# Simple response dictionary (you can expand this or integrate with a more sophisticated chatbot)
responses = {
    "prix": "Les prix sont mis à jour quotidiennement dans notre base de données.",
    "magasin": "Nous comparons les prix dans plus de 50 magasins partenaires.",
    "application": "OptiPrice est une application qui vous aide à trouver les meilleurs prix.",
    "aide": "Je peux vous aider à trouver les meilleurs prix ou à utiliser l'application.",
}

@app.route('/chat', methods=['POST'])
def chat():
    data = request.json
    user_message = data.get('message', '').lower()
    
    # Simple keyword matching (you can implement more sophisticated logic here)
    response = "Je ne comprends pas votre question. Pouvez-vous la reformuler ?"
    
    for keyword, resp in responses.items():
        if keyword in user_message:
            response = resp
            break

    return jsonify({"response": response})

if __name__ == '__main__':
    app.run(debug=True) 