
<html>
<head>
<title><?php echo $title ?></title>
</head>
<body>

<style>
#header {
    background-color:green;
    color:white;
	width:600px;
	height:40px;
    text-align:left;
	font-size:25px;
    padding:5px;
	float:left;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px; 
}
#section {
    width:350px;
    float:left;
    padding:10px; 
}
#footer {
    background-color:green;
    color:white;
    clear:both;
    text-align:center;
    padding:5px; 
}

#space {
    background-color:yellow;
    width:600px;
    height:10px;
    color:white;
    clear:both;
    text-align:center;
    padding:1px; 
}
</style>

<nav>

<h2><?php echo $company ?> company</h2>
<h1>This is a testing of some CI header page</h1>
</nav>

<section>
    
    <p>This part will be included in the section part....end of the header part</p>
    <div id="header">
    <a href="http://localhost/CodeWithZend/PhpCourse/PhpCourseSession_23_CodeIgnitor/CodeIgniter-2.2-stable/index.php">Home</a>
    <a href="http://localhost/CodeWithZend/PhpCourse/PhpCourseSession_23_CodeIgnitor/CodeIgniter-2.2-stable/index.php/news/create">Create</a>
    <a href="http://localhost/CodeWithZend/PhpCourse/PhpCourseSession_23_CodeIgnitor/CodeIgniter-2.2-stable/index.php/about">about</a>
    <a href="http://localhost/CodeWithZend/PhpCourse/PhpCourseSession_23_CodeIgnitor/CodeIgniter-2.2-stable/index.php/news">News</a>
    
    <hr>
    </div>
    
</section>
<div id="space">
</div>
</body>
</html>
