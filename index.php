<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <title>Jquery</title>
</head>
<style>
.box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px;
    height: 100px;
    border: 1px solid blue;
    margin-bottom: 16px;
}

.box-wraper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.add_class{
    color: green;
    font-size: 24px;
}
</style>

<body>
    <div class="box-wraper">
        <div id="box1" class="box">BOX 1</div>
        <div id="box2" class="box">BOX 2</div>
        <div id="box3" class="box">BOX 3</div>
        <button class="click">Click Me</button>
    </div>


    <script>
    $(document).ready(function() {
        $('.click').click(function() {
            $('#box3').css({
                "color": "red",
                "font-weight": "bold",
                "border": " 6px solid blue",
            }).fadeOut(3000)
            $('#box2').toggleClass('add_class');
        })
    });
    </script>
</body>

</html>