from flask import Flask, render_template, send_file

app = Flask(__name__)

@app.route('/')
def index():
    return "hello"

@app.route('/download')
def download_file():
    path = "profile.yaml"
    return send_file(path, as_attachment=True)

if __name__ == '__main__':
    app.run(debug=True, host="0.0.0.0", port=42424)