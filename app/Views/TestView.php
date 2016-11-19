<html>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="lg-12">
                <h3>Отзывы</h3>
                <div class="comments-list">
                    <?php foreach ($comments as $comment):?>

                        <div class="media">
                            <p class="pull-right"><small><?=$comment['created_at']?></small></p>
                            
                            <div class="media-body">
                                <img src="" alt="" width="80px" height="80px">
                                <h4 class="media-heading user_name"><?=$comment['author_name']?></h4>
                                <?=$comment['text']?>

                                <p><small><a href="mailto:<?=$comment['author_email']?>"><?=$comment['author_email']?></a></small></p>
                            </div>
                        </div>

                    <? endforeach;?>
                </div>
            </div>
            <div class="lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить отзыв</div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="/store" method="post">
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Адрес электронной почты</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="text">Ваш отзыв</label>
                                <textarea class="form-control" rows="3" id="text" name="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Изображение</label>
                                <input type="file" id="File" name="File">
                                <p class="help-block">Приложите картинку</p>
                            </div>
                            <input class="btn btn-default" type="submit" value="Submit">
                        </form>
                    </div>
                </div>

            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="resources/main.js"></script>
    </body>
</html>