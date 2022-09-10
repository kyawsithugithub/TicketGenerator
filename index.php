<html>

<head>
    <!-- <?php
        include('./lib/qrlib.php');

        //print('Hello');
        // outputs image directly into browser, as PNG stream
        // L, M, Q, H
        // static QRcode::raw($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4)		
        // QRcode::png('123456789');
        // QRcode::png('1234566789)', 'test.png', 'L', 4, 2);
        // echo '<img src="test.png" />';
        ?> -->
    <?php
    <!-- echo dechex(10); -->
    ?>
    <title>Ticket Generator | Home</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/html2canvas.min.js"></script>

    <!-- <script language="javascript">
            // html2canvas(document.querySelector("#capture")).then(canvas => {
            //     document.body.appendChild(canvas)
            // });
    </script>
    <script language="javascript">
        $(document).ready(function () {
            html2canvas($("#capture"), {
                onrendered: function (canvas) {
                    // canvas is the final rendered <canvas> element
                    var myImage = canvas.toDataURL("image/png");
                    window.open(myImage);
                }
            });
        });
    </script> -->
    <style>
        /* Container holding the image and the text */
        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        /* Top right text */
        .top-right {
            position: absolute;
            top: 80px;
            right: 180px;
        }

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 0px;
            left: 180px;
            color: black;
            font-size: 70px;
        }
    </style>
</head>

<body>
    <div class="container" id="ticket">
        <img src="img/HopeTicket.png" alt="Ticket Image" style="width:100%;">
        <div class="top-right">
            <img src="test.png" style="width:200px;" />
        </div>
        <div class="bottom-left">
            asdf
        </div>
        <!-- <div class="bottom-left">Bottom Left</div>
            <div class="top-left">Top Left</div>
            <div class="top-right">Top Right</div>
            <div class="bottom-right">Bottom Right</div>
            <div class="centered">Centered</div> -->
    </div>

    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <input type="button" value="Preview & Convert" id="btnConvert">
    <br />
    <h3>Preview :</h3>
    <div id="previewImg">
    </div>
    <!-- <img src = "img/HopeTicket.png" class = "img-thumbnail">
        <img src="test.png" /> -->

    <script>
        document.getElementById("btnConvert").addEventListener("click", function () {
            html2canvas(document.getElementById("ticket")).then(function (canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("previewImg").appendChild(canvas);
                anchorTag.download = "filename.jpg";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });
    </script>
</body>

</html>