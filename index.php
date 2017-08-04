<!DOCTYPE html>
<html>
<head>
    <title>Angular 2 without node</title>
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