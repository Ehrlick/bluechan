
<br>

<style type="text/css">
<!--
#worp {
padding: 0px;
width: 810px;
margin-top: 0px;
margin-right: auto;
margin-bottom: 0px;
margin-left: auto;
background: url('img/lighter_grey.jpg');
}
#worp #left {
margin: 0px;
padding: 0px;
float: left;
width: 400px;
}
#worp #right {
float: right;
width: 400px;
}

#worp2 {
padding: 0px;
width: 810px;
margin-top: 0px;
margin-right: auto;
margin-bottom: 0px;
margin-left: auto;
}
#worp2 #left {
margin: 0px;
padding: 0px;
float: left;
width: 400px;
}
#worp2 #right {
float: right;
width: 400px;
}

-->

.box24{
  width: 360px;/*全体の幅*/
  font-size: 12px;/*文字サイズ*/
  }
.box24 dt{/*タイトル部分の設定*/
  color: #6A6FBE;/*文字色*/
  background-color: #6A6FBE;/*背景色*/
  font-family: Arial,sans-serif;
  font-weight: bold;
  letter-spacing: 0.2em;
  width: 230px;/*タイトルの幅*/
  padding: 2px 1em 2px 1.5em;
  background-image: url("img/024_sky.gif");
  background-repeat: no-repeat;
  }
.box24 dd{/*内容部分*/
  color: #313132;/*文字色*/
  margin: 0;
  padding: 0;
  border: solid 1px #6A6FBE;/*枠色*/
  background-color: #FFFFFF;
  }
.box24 dd .textb24{
  padding: 1.2em 0.9em;/*テキスト部分の余白*/
  border-top: solid 4px #CACFEC;
  border-bottom: solid 4px #CACFEC;
  }
  
-->

.a_demo_one {
    background-color:#330066;
    padding:10px;
    position:relative;
    font-family: 'Open Sans', sans-serif;
    font-size:12px;
    text-decoration:none;
    color:#fff;
    border: solid 1px #831212;
    background-image: linear-gradient(bottom, rgb(171,27,27) 0%, rgb(212,51,51) 100%);
    border-radius: 5px;
    margin: 5px;
    padding-bottom:10px;
    float: right;
}
 
.a_demo_one:active {
    padding-bottom:9px;
    padding-left:10px;
    padding-right:10px;
    padding-top:11px;
    top:1px;
    background-image: linear-gradient(bottom, rgb(171,27,27) 100%, rgb(212,51,51) 0%);
}

.a_demo_one::before {
    background-color:#ccd0d5;
    content:"";
    display:block;
    position:absolute;
    width:100%;
    height:100%;
    padding:8px;
    left:-8px;
    top:-8px;
    z-index:-1;
    border-radius: 5px;
    box-shadow: inset 0px 1px 1px #909193, 0px 1px 0px #fff;
}

body {
	
}
.container{
	width:900px;
	margin:30px auto;
	padding:25px;
	min-height:400px;
	height:auto;
	background:#FFF;	
}
.container h2 { margin-top:30px;}
form{
	width:500px;
	margin:0 auto;
}
.search { 
	padding:6px 15px 6px 30px;
	margin:3px; 
	background: url('./img/search.png') no-repeat 8px 6px; 
}
.rounded { 
	border-radius:15px; 
	-moz-border-radius:15px; 
	-webkit-border-radius:15px; 
}
input[type=text]{
	color:#bcbcbc;
}
input[type=button], input[type=button]:hover {
	position:relative; 
	left:-6px;
	border:1px solid #adc5cf;
	background: #e4f1f9; /* Old browsers */
	background: -moz-linear-gradient(top, #e4f1f9 0%, #d5e7f3 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e4f1f9), color-stop(100%,#d5e7f3)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* IE10+ */
	background: linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4f1f9', endColorstr='#d5e7f3',GradientType=0 ); /* IE6-9 */
	color:#7da2aa;
	cursor: pointer;
}
.lighter, .light, .dark {
	width:95%;
	height:50px;
	padding:40px 25px;
}

.lighter{
	background: url('./img/lighter_grey.jpg');
}
.lighter input[type=text]{
	border:1px solid #d0d0d0;
	background-color:#fcfcfc;
}

.light{
	background: url('./img/light_grey.jpg');
}
.light input[type=text]{
	border:1px solid #acb1b7;
	background-color:#fcfcfc;
}

.dark{
	background: url('./img/dark_grey.jpg');
}
.dark input[type=text]{
	border:1px solid #2a2e31;
	background-color:#2d3035;
	color:#505358;
}


</style>




<br>

<div id="worp">  


<br>

<div id="left">

<br>
<br>
<br>
<br>

<dl class="box24">
<dt>University</dt>
<dd><div class="textb24">

<table>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td>
        	<?php echo $this->Html->link($university['University']['full_name'],
				array('controller' => 'universities', 'action' => 'view', $university['University']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table>
</div></dd>
</dl>
</div>

<div id="right">

<a href="#" class="a_demo_one">
     Add Post
</a>

<br>
<br>
<br>
<br>

<dl class="box24">
<dt>Categories</dt>
<dd><div class="textb24">
<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($categories as $category): ?>
    <tr>
        <td>
        	<?php echo $this->Html->link($category['Category']['title'],
				array('controller' => 'categories', 'action' => 'view', $category['Category']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($category); ?>
</table>
</div></dd>
</dl>
</div>
