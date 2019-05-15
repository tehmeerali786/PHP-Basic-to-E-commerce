<h2>
    
    <?php
    
    
        //setcookie($name, $content, $expire, $path, $domain, $secure)
    
    
        $name = 'VisitCount';
        $content = $_COOKIE['VisitCount'] + 1;
        $expire = time() + (60);
    
        setcookie($name, $content, $expire);
    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
</h2>


<h1>Cookie</h1>