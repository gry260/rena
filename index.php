<!DOCTYPE html>
<html>
<head>
    <title>Angular 2 without node</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <!-- 1. Load libraries -->
    <script src="https://unpkg.com/systemjs@0.19.6/dist/system.src.js"></script>
    <script src="https://code.angularjs.org/tools/typescript.js"></script>
    <script src="system.config.js"></script>
    <script>
        System.import('app').catch(function (err) {
            console.error(err);
        });
    </script>
</head>
<!-- 3. Display the application -->
<body>
<hello>Loading...</hello>
<register>
</register>
<login>
</login>

</body>
</html>