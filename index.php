<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.theme.css">

    <title>Jquery</title>
</head>
<style>
.box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px;
    min-height: 100px;
    border: 1px solid blue;
    margin-bottom: 16px;
    padding: 6px 0;
}

.box-wraper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.add_class {
    color: green;
    font-size: 24px;
}
#box4{
    display: flex;
    flex-direction: column;

}
.img-box4{
    width: 100px;
    height: 100px;
}
</style>

<body>
    <div class="box-wraper">
        <div id="box1" class="box">BOX 1</div>
        <div id="box2" class="box">BOX 2</div>
        <div id="box3" class="box">BOX 3</div>
        <div id="box4" class="box">
            <p> BOX 4 </p>
            <img src="img/test.png" alt="test" class="img-box4">
        </div>
        <button class="click">Click Me</button>
    </div>


    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    

    <script>
    $(document).ready(function() {
        $('#box1').hover(function() {
            $(this).css({
                "color": "red",
                "font-weight": "bold",
                "border": " 6px solid blue",
            })
        },
        function() {
            $(this).css({
                "color": "blue",
                "font-weight": "bold",
                "border": " 6px solid blue",
            })
        })
        $('.img-box4').mouseout(function() {
            $(this).remove();
        })
        $('.click').click(function() {
            $('#box3').fadeToggle(1000)
            $('#box2').toggleClass('add_class');
            $('#box4').replaceWith('<div id="box4" class="box">BOX 4 - Image</div>');
        })
    });
    </script>
</body>

</html>