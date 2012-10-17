
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

#searchbox input.text{
	position:absolute;
	top:12px;
	left:300px;
	width:197px;
	height:43px;
	background:url(img/search_bg.gif) no-repeat;
	border:none;
	padding:13px 6px 0px 8px;
	}

html:first-child #searchbox input.text{
	padding:0px 6px 0px 8px;
	}
#searchbox input.text:hover,#searchbox input.text:focus{
	background:url(img/search_bg_o.gif) no-repeat;
	}
	
	#searchbox input.searchbtn{
	position:absolute;
	top:15px;
	left:490px;
	width:43px;
	height:43px;
	background:url(img/icon_search.gif) 0px -3px no-repeat;
	border:none;
	text-indent:-9999px;
	cursor:pointer;
	}

html:first-child #searchbox input.searchbtn{
	padding:41px 0px 10px 0px;
	}


</style>

<div id="worp">

<form method="get" action="#" class="search">

<div id="searchbox">
<form action="xxxxxx">
<fieldset>
<legend class="none">Search Redline Magazine</legend>
・・・略・・・
<input class="text" type="text" name="q" maxlength="255" value="" />
<input type="submit" value="検索" class="searchbtn" />
</fieldset>
</form>
<!--/searchbox --></div>

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
