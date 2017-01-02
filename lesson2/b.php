<!DOCTYPE html>
<html>
<head>
    <title>demo bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../asset/bootstrap.min.css">
</head>
<style type="text/css">
     .box {
        border:1px solid gray;
    }
    .line {
        margin-bottom: 8px;
    }
</style>
<body>
<div class="container">
    <div class="row line">
        <div class="col-xs-12 col-sm-6  col-md-4 box">
            <div class="form">
                <form method="POST" action="/lesson2/b.php" enctype="multipart/form-data">
                    <label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                    <input type="email" name="email" id="email" required><br/>

                    <label for="username">用户名</label>
                    <input type="text" name="username" id="username" required><br/>

                    <label for="mobile">手机号</label>
                    <input type="number" name="mobile" id="mobile" required><br/>

                    <label for="date">日&nbsp;&nbsp;&nbsp;&nbsp;期</label>
                    <input type="date" name="date" id="date" required><br/>

                    <label for="week">&nbsp;&nbsp;&nbsp;&nbsp;周</label>
                    <input type="week" name="week" id="week" required><br/>

                    <label for="url">网&nbsp;&nbsp;&nbsp;&nbsp;址</label>
                    <input type="url" name="url" id="url" required><br/>

                    <label for="range">取值范围</label>
                    <input type="range" name="range" id="range" required><br/>

                    <label for="file">文&nbsp;&nbsp;&nbsp;&nbsp;件</label>
                    <input type="file" name="file" id="file" required><br/>


                    <input type="submit" value="submit box1">
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6  col-md-4 box">
            <div class="form">
                <form >
                    <label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                    <input type="text" name="email" id="email" /><br/>

                    <label for="username">用户名</label>
                    <input type="text" name="username" id="username"><br/>

                    <input type="submit" value="submit box2">
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6  col-md-4 box">
            <div class="form">
                <form >
                    <label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                    <input type="text" name="email" id="email" /><br/>
                    <input type="submit" value="submit box3">
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6  col-md-4 box">
            <div class="form">
                <form >
                    <label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                    <input type="text" name="email" id="email" /><br/>

                    <label for="username">用户名</label>
                    <input type="text" name="username" id="username"><br/>

                    <label for="mobile">手机号</label>
                    <input type="number" name="mobile" id="mobile"><br/>

                    <label for="date">日&nbsp;&nbsp;&nbsp;&nbsp;期</label>
                    <input type="datetime" name="datetime" id="datetime"><br/>

                    <input type="submit" value="submit box4">
                </form>
            </div>
        </div>
    </div>

 
    

    <div class="row line">
        <div class="col-sm-6">
            <div>
                <pre>
                <?php

                    $uploadDir = dirname(__FILE__) . '/upload/';

                    if(!empty($_POST))    
                        print_r($_POST);
                    
                    if(!empty($_FILES))
                        print_r($_FILES) && move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir.'/'.rand(100,999).$_FILES['file']['name']);

                ?>
                </pre>
            </div>
        </div>
    </div>

</div>
</body>
</html>