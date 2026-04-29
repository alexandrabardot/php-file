<!DOCTYPE html>
<html>
<head>
    <title>Queue Display</title>
    <style>
        body { font-family: Arial; text-align: center; padding: 50px; }
        .queue-number { font-size: 120px; font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Current Queue Number</h1>
    <div class="queue-number" id="queue">Loading...</div>
    <script>
        function updateQueue() {
            fetch('/next_api.php')
                .then(r => r.text())
                .then(data => document.getElementById('queue').textContent = data);
        }
        updateQueue();
        setInterval(updateQueue, 1000); // Refresh every second
    </script>
</body>
</html>
