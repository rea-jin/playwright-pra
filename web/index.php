<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & JS サイト</title>
    <script>
        async function sendData() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;

            const response = await fetch("server.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    name,
                    email,
                    message
                })
            });

            const result = await response.json();
            document.getElementById("result").innerText = result.message;
        }
    </script>
</head>

<body>
    <h1>PHP & JavaScript サンプル</h1>
    <label>名前: <input type="text" id="name" placeholder="名前を入力"></label><br>
    <label>メール: <input type="email" id="email" placeholder="メールアドレスを入力"></label><br>
    <label>メッセージ: <textarea id="message" placeholder="メッセージを入力"></textarea></label><br>
    <button onclick="sendData()">送信</button>
    <p id="result"></p>
</body>

</html>