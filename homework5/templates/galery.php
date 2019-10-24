
    
        <?php echo '<link rel="stylesheet" href="pablic/css/style.css">'?>
        <div class="flex-container">
        
        <?php 
        
            foreach(getAssocResult('SELECT name, image, url, views FROM dishes ORDER BY views DESC') as $item): ?> 
    
            <div class="figure">
                <a href="<?php echo '.'.$item['url']?>" target="_blank"><img src="data:image/jpeg;base64,<?=base64_encode($item['image']) ?>" alt="Блюдо"></a>
                <figcaption><?=$item['name']?></figcaption>
            </div>

        <?php endforeach ?>

        </div>
        
    

