<html>
<head>
    <meta charset="utf-8"/>
    <title>test</title>
    <style>
        #navigation li{
            display:inline;
            postion:absolute;
        }
        #navigation a{
            padding:2px 2px;
            background-color:#09F;
            color:#FFFFFF;
        }
        #navigation a:hover{
            background-color:#F90;
            color:#666;
        }
    </style>
</head>
<body>
    <div id="navigation">
        <input type=button onclick="myFunction()" />
    </div> 
    <div>
        <p id="demo">
            <pre> 
                <b>This is one title</b>

                I'm writing here
                the text that I 
                don't need to get.

                <b>Other title</b>

                And so we'll test
                whether this thing works.
            </pre>
        </p>
    </div>

    <script>
        function myFunction() {
            var text = document.body.innerText;
            var titles =text.match(/^\n(.+?)\n\n/mg);
            for (var i = 0; i < titles.length; i++) {
                document.write(titles[i] + "<br />" + "<br />");
            }
        }
    </script>
</body>
</html>
