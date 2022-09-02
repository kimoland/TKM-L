<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leech Successfully</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-warning">
    <div class="container d-flex h-100 mt-5">
        <div class="row align-self-center w-100 mt-5">
            <div class="col-10 mx-auto mt-4">
                <h1 class="text-dark text-center">Leech Successfully</h1>
                <div class="jumbotron bg-dark mt-5">
                    <?php

                    $link = $_POST['link-tak'];
                    $header = @get_headers($link);
                    if ($header[0] == "HTTP/1.1 301 Moved Permanently") {
                        $replace_t1 = str_replace("http://big-uploads.xyz/download.php?", "http://dl1.big-uploads.xyz/dl.php?", $link);
                        $replace_t2 = str_replace("TakMovie.mkv", "TakMovie.mkv&code=2e6af00b84549313f5b55aa537e6c9c7", $replace_t1);
                        $rellink = $replace_t2;
                        $checklink = @get_headers($rellink);
                        if ($checklink[7] == "HTTP/1.1 200 OK") {
                            strlen($rellink);
                        } elseif ($checklink[0] == "HTTP/1.1 301 Moved Permanently" || $checklink[0] ==  "HTTP/1.1 404 Not Found") {
                            $replace_t3 = str_replace("http://dl1.big-uploads.xyz/dl.php?", "http://dl2.big-uploads.xyz/dl.php?", $rellink);
                            $rellink =  $replace_t3;
                            if ($checklink[0] == "HTTP/1.1 301 Moved Permanently" || $checklink[0] ==  "HTTP/1.1 404 Not Found") {
                                $replace_t4 = str_replace("http://dl2.big-uploads.xyz/dl.php?", "http://dl3.big-uploads.xyz/dl.php?", $rellink);
                                $rellink =  $replace_t4;
                            }
                        }
                    }

                    ?>
                    <a href="<?php echo $rellink ?>" class="btn btn-danger w-100 mb-4">Download Link</a>
                    <p class="text-center text-light p-0 m-0">Powered By <a href="http://t.me/king_network7">KingNetwork</a> Team</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>
