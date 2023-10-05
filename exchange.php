<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>

    
      
    <div class="container">
        <h1>Choose a currency to convert</h1>
        <form action="main.php" method="post">
            <label for="quantity">Choose a quantity: </label>
            <input type="number" name="quantity" min="1" max="1000">
            <label for="currency">Choose a currency: </label>
            <select name="currency">
                <option value="INR">Indian Rupee</option>
                <option value="USD">US Dollar</option>
                <option value="EUR">Euro</option>
            </select>
            <button class="btn" type="submit" name="submit" id="submit">Submit</button>
        </form>
    </div>
    <div class="output">
        <h2>converted values</h2>
        <table>
            <thead>
                <tr>
                    <th>Currency</th>
                    <th>Code</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
    
            </tbody>
        </table>
    </div>

</body>
</html>