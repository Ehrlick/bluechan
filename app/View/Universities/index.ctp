
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

fieldset.search {
	border: none;
	width: 243px;
	margin: 0 auto;
	background: #222;
}
.search input, .search button {
	border: none;
	float: left;
}
.search input.box {
	color: #fff;
	font-size: 1.2em;
	width: 190px;
	height: 30px;
	padding: 8px 5px 0;
	background: #616161 url(search_bg.gif) no-repeat;
	margin-right: 5px;
}
.search input.box:focus {
	background: #616161 url(search_bg.gif) no-repeat left -38px;
	outline: none;
}
.search button.btn {
	width: 38px;
	height: 38px;
	cursor: pointer;
	text-indent: -9999px;
	background: #fbc900 url(search_bg.gif) no-repeat top right;
}
.search button.btn:hover {
	background: #fbc900 url(search_bg.gif) no-repeat bottom right;
}

</style>

<div id="worp">  

<form method="get" id="searchform" action="http://www.sohtanaka.com/">
<fieldset class="search">
	<input type="text" class="box" />
	<button class="btn" title="Submit Search">Search</button>
</fieldset>
</form>

<hr>
<br>

<div id="left">
<dl class="box24">
<dt>University</dt>
<dd><div class="textb24">
<table>
    <tr>
        <th>Id</th>
        <th>University</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td><?php echo $university['University']['id']; ?></td>
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
<dl class="box24">
<dt>Categories</dt>
<dd><div class="textb24">
<table>
    <tr>
        <th>Id</th>
        <th>Category</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($categories as $category): ?>
    <tr>
        <td><?php echo $category['Category']['id']; ?></td>
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
