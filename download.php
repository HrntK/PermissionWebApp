<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
    <?php include('nav1'); ?>
    <!-- <h1 style="align-items: center; text-align: center;"><a href="/download-pdf/<%=idq.id %>">Download File</a></h1> -->
    <center>
    <div style="height: 100%;"></div>
    <embed src="/docs/<%=idq.id %>.pdf" width="900px" height="500px" type="application/pdf" style="text-align: center;"></center>
</body>
</html>