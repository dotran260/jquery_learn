<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.structure.css">
    <link type="text/css" rel="stylesheet" href="jquery-ui/jquery-ui.theme.css">
    <title>Jquery UI</title>
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

#box1 {
    display: flex;
    flex-direction: column;

}

.img-box4 {
    width: 100px;
    height: 100px;
}
</style>

<body>
    <div class="box-wraper">
        <div id="box1" class="box">
            <p> BOX </p>
            <img src="img/test.png" alt="test" class="img-box4" title="Đây là hình ảnh"></img>
            <p>Chọn ngày: <input type="text" class="input-date"></p>
        </div>
        <button class="click">Click Me</button>
    </div>

    <div id="main-panels">
        <div class="panels">
            <h2>Click1</h2>
            <p>Trần Đình Đô</p>
            <h2>Click2</h2>
            <p>Trần Đình Đô</p>
            <h2>Click3</h2>
            <p>Trần Đình Đô</p>
        </div>
    </div>

    <div id="main-tabs">
        <div class="tabs">
            <ul>
                <li><a href="#1">Click 1</a></li>
                <li><a href="#2">Click 2</a></li>
                <li><a href="#3">Click 3</a></li>
            </ul>
            <div id="1">1</div>
            <div id="2">2</div>
            <div id="3">3</div>
        </div>
    </div>

    <div class="sortable">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>

    </div>

    <div class="dialog">
        <h2>Dialog</h2>
    </div>
    <button class="click-dialog">Click diglog</button>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script>
    $(document).ready(function() {
        $('.input-date').datepicker({})
        $('.img-box4').tooltip({
            content: 'Hello',
            // track:true,
            show: {
                effect: 'explode',
                duration: 300
            }
        }).draggable({
            grid: [50, 30],
            containment: 'parent',
            cursor: 'crosshair',
            revert: true,
        })

        $('.panels').accordion({
            active: 2,
            event: 'mouseover',
            animate: 500,
        })
        $('.dialog').dialog({
            title: 'Đây là dialog',
            autoOpen: false,
            show: {
                effect: 'bounce',
                duration: 800
            },
            hide: {
                effect: 'explode',
                duration: 800
            }
        })
        $('.tabs').tabs({
            heightStyle: 'fill',
            disabled: [2],
        })
        $('.click-dialog').click(function() {
            $('.dialog').dialog({
                autoOpen: true,
            })
        })
        $('.sortable ul').sortable({
            // grid: [50, 30],
            opacity: '0.5',
            delay: 250,
            cursor: 'move',
            axis:'y',
        })


    });
    </script>
</body>

</html>