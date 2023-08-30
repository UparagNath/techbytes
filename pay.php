<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recharge Balance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-container {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 5px;
            transition: border-color 0.3s;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .input-container:focus-within {
            border-color: #007bff;
        }

        .input-container input {
            border: none;
            outline: none;
            width: 625px;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .rex {
            width: calc(33.33% - 10px);
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .rex.selected {
            background-color: #007bff;
            color: white;
        }

        .rex:hover {
            background-color: #f0f0f0;
        }

        .payment-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            justify-content: space-between;
            max-width: 600px;
            margin: 0 auto;
        }

        .pay {
            padding: 10px 20px;
            top:10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .pay:hover {
            background-color: #007bff;
            color: white;
        }

        .recharge-button {
            text-align: center;
            margin-top: 20px;
        }
        .recharge-button {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px; /* Add margin to bottom for spacing */
}

.home-button {
    text-align: center;
    margin-top: 20px;
}

.home-link {
    text-decoration: none;
    padding: 10px 20px;
    background-color: #ccc;
    border-radius: 5px;
    color: #000;
    transition: background-color 0.3s, color 0.3s;
}
.x{
    display: flex;/* This will separate the two elements */
    align-items: center;
    justify-content: center;
}
.x a{
    margin-right: 15px;
}
.home-link:hover {
    background-color: #007bff;
    color: white;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Balance Recharge</div>
        <div class="input-container">
            <input id="amountInput" type="number" placeholder="Enter amount" />
        </div>
        <div class="box">
            <div class="rex">$500</div>
            <div class="rex">$1000</div>
            <div class="rex">$1500</div>
            <div class="rex">$2000</div>
            <div class="rex">$2500</div>
            <div class="rex">$3000</div>
        </div>
        <h2 class="frek">payment-list</h2>
            <ul class="payment-list">
                <li class="pay">WowPay</li>
                <li class="pay">EkPay</li>
                <li class="pay">WinPay</li>
                <li class="pay">DyPay</li>
            </ul>
            <div class="recharge-button">
                <div class="x">
                    <a href="index2.php" class="home-link">Home</a>
                    <button class="pay" id="rechargeButton">Recharge</button>
                </div>
            </div>
    </div>
    <script>
        const rexElements = document.querySelectorAll('.rex');
        const amountInput = document.getElementById('amountInput');

        rexElements.forEach(rex => {
            rex.addEventListener('click', () => {
                rexElements.forEach(element => element.classList.remove('selected'));
                rex.classList.add('selected');
                amountInput.value = rex.textContent.replace('$', '');
            });
        });
    </script>
</body>
</html>
