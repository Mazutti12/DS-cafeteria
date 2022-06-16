<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>

    <script>

    $(document).ready(function(){
        $("button").click(function(){
            $(this).css("color", "red");
        });
    });

    
    $(document).ready(function(){
        $("button").dblclick(function(){
            $(this).css("color", "white");
        });
    });


    </script>

</head>
<body>
    
</body>
</html>