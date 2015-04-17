

<?php foreach ($news as $news_item): ?>
<div style="background-color: orange;height:150px;width:600px;pading:2px;">    
    
    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
    </div>
<?php endforeach ?>