<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Popup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f9;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .popup button {
            margin: 5px;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .popup button:hover {
            background-color: #0056b3;
        }

        .content {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<div class="popup">
    <h2>Select an Option</h2>
    <button onclick="showContent(1)">Option 1</button>
    <button onclick="showContent(2)">Option 2</button>
    <button onclick="showContent(3)">Option 3</button>
    <button onclick="showContent(4)">Option 4</button>
    
    <div id="content" class="content hidden">
        <p id="content-text"></p>
    </div>
</div>

<script>
    function showContent(option) {
        const contentDiv = document.getElementById('content');
        const contentText = document.getElementById('content-text');
        const messages = {
            1: "You selected Option 1! Here's the information for Option 1.",
            2: "Option 2 selected! Here's the information for Option 2.",
            3: "This is Option 3. Here is its corresponding information.",
            4: "You've chosen Option 4. Here's what you need to know."
        };

        contentText.textContent = messages[option] || "";
        contentDiv.classList.remove('hidden');
    }
</script>

</body>