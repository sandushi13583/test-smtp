<!DOCTYPE html>
<html>
<head>
    <title>SMTP Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl font-bold mb-6">Laravel SMTP Tester</h1>
            <p class="mb-8 text-gray-600">
                Click below to send a test email via SMTP
            </p>
            <a href="{{ route('send-test') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
                Send Test Email
            </a>
        </div>
    </div>
</body>
</html>
