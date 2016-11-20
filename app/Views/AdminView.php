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
        <h3>Админ-панель</h3>
        <div class="comments-list">
            <?php foreach ($comments as $comment):?>
                <form action="/<?php if ($comment['published'] == 1){echo 'deactivate';}else{echo 'activate';} ?>" method="post">
                    <input type="hidden" name="id" value="<?=$comment['id']?>">
                    <div class="media">
                        <p class="pull-right"><small><?=$comment['created_at']?></small></p>

                        <div class="media-body">
                            <img src="<?=$comment['image']?>" alt="" width="80px" height="80px">
                            <h4 class="media-heading user_name"><?=$comment['author_name']?></h4>
                            <?=$comment['text']?>

                            <p><small><a href="mailto:<?=$comment['author_email']?>"><?=$comment['author_email']?></a></small></p>
                            <?php if($comment['published'] == 1){ ?>
                                <button type="submit" class="btn btn-danger">Деактивировать</button>
                            <?php }else{ ?>
                                <button type="submit" class="btn btn-success">Активировать</button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            <? endforeach;?>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="resources/main.js"></script>
</body>
</html>