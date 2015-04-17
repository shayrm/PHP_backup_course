<!DOCTYPE html>
<html dir="rtl" lang="he-IL">

    <head>
        <title>כתיבה שיווקית</title>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="IL" />
        <meta name="company" content="שירה כתיבה שיווקית" />
        <meta name="author" content="שירה כתיבה שיווקית" />
        <meta name="page-topic" content="הסיפור שלך" />
        <meta name="reply-to" content="Shira@perfectwriting.co.il" />
        <meta name="revisit-after" content="1" />
        <meta name="generator" content="" />
        
        <link rel="stylesheet" type="text/css" media="all" href="shiraCSS.css" />
    </head>

<body>

<!-- Here start the Header -->   
<header>


    <div class=header>
    
    <h1 id="w-color">דף הנחיתה לאוצר שלך</h1>
    <h2>אני רק אניח את זה כאן...שיתיבש</h2>
    
    
    
</div>
</header>
<hr>

<!-- here start the page body -->

    <section>
    
    
    
    <div class="body">
            
    <form action="getinfo.php" method="post" id="customer" accept-charset="utf-8">
    
    <fieldset border="1">
        <legend>זה המקום לשתף אותנו</legend>
        
    	<label for="title"> שם פרטי ומשפחה</label>
    	<input class="box" type="input" name="name" required size="35px" placeholder="?מי אני ומה שמי"/><br />
    
    	<label for="title">כתובת eMail</label>
    	<input class="box" type="email" name="email" placeholder="yourEmail@domain.com" required size="35px"/><br />
    	   	 	
    	<label for="title">מספר טלפון</label>
    	<input class="box" type="txt" name="phone" maxlength="7" placeholder="רק אם אתם רוצים" size="35px"/>
    	
    	<select class="box2" name="phone-ex" form="customer">
            <option value="050">050</option>
            <option value="050">052</option>
            <option value="054">054</option>
            <option value="057">057</option>
            <option value="03">03</option>
        </select>
    	
    	<label for="text"><h3>זה המקום לשפוך את הלב ...</h3></label>
    	<textarea class="box3" name="text" cols="80px" hight="600px" rows="10" placeholder="זה פשוט, העתק הדבק..."></textarea>
        <br />
    	<input class="button" type="submit" name="submit" value="שלח" size="25px" />
    </fieldset>
    </form>
    
    
    </div>
    </section>

<footer>
    <div class="continer">

    <a class="specialeffects" href="http://www.perfectwriting.co.il/" hover="background-color:yellow"><p> אתר הבית של שירה &copy כתיבה שיווקית</p></a>
    </div>
    </footer>

</body>
</html>