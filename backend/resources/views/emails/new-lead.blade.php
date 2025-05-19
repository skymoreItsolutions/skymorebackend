<!DOCTYPE html>
<html>
<head>
    <title>New Lead Notification</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            padding: 20px;
            color: #333;
        }

        .container {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            max-width: 650px;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #28a745;
            margin-bottom: 10px;
        }

        p {
            font-size: 15px;
            line-height: 1.6;
        }

        .lead-info {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        .info-box {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .info-box strong {
            display: inline-block;
            width: 120px;
            color: #007bff;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🚀 New Lead Notification</h2>
        <p>A new lead has submitted their details. Please find the information below:</p>

        <div class="lead-info">
            <div class="info-box">
                <strong>Name:</strong> {{ $lead['name'] ?? 'N/A' }}
            </div>
            <div class="info-box">
                <strong>Email:</strong> {{ $lead['email'] ?? 'N/A' }}
            </div>
            @if(!empty($lead['phone']))
            <div class="info-box">
                <strong>Phone:</strong> {{ $lead['phone'] }}
            </div>
            @endif
            @if(!empty($lead['service']))
            <div class="info-box">
                <strong>Service:</strong> {{ $lead['service'] }}
            </div>
            @endif
            @if(!empty($lead['message']))
            <div class="info-box">
                <strong>Message:</strong> {{ $lead['message'] }}
            </div>
            @endif
        </div>

        <div class="footer">
            This is an automated notification from your Laravel application.
        </div>
    </div>
</body>
</html>
