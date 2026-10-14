<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Common3 enquiry</title></head>
<body style="font-family: Arial, sans-serif; color: #1a1420; line-height: 1.6;">
    <h1>New Common3 enquiry</h1>
    <p><strong>Name:</strong> {{ $enquiry->name }}</p>
    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
    @if ($enquiry->company)<p><strong>Company:</strong> {{ $enquiry->company }}</p>@endif
    @if ($enquiry->phone)<p><strong>Phone:</strong> {{ $enquiry->phone }}</p>@endif
    <h2>Message</h2>
    <div style="white-space: pre-wrap;">{{ $enquiry->message }}</div>
    <p>Reply to this email to respond to the sender.</p>
</body>
</html>
