
<br>
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
  background-image: url("images/024_sky.gif");
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

form.search {
margin: 0;
}

/* --- ボックス --- */
form.search div {
width: 388px; /* ボックスの幅 */
padding: 1px 0; /* ボックスのパディング（上下、左右） */
background-color: #ffffff; /* ボックスの背景色 */
border: 1px #808080 solid; /* ボックスの境界線 */
}

/* --- テキストボックス --- */
form.search input.textBox {
width: 298px; /* テキストボックスの幅 */
margin: 0 4px 0 5px; /* テキストボックスのマージン（上右下左） */
padding: 0;
background-color: #ffffff; /* テキストボックスの背景色 */
border: none; /* テキストボックスの境界線（なし） */
color: #000000;
}

/* --- ボタン --- */
form.search input.btn {
width: 80px; /* ボタンの幅 */
height: 1.8em; /* ボタンの高さ */
padding: 0;
background: #c08000 url(btn05.gif); /* ボタンの背景 */
border: 1px #c08000 inset; /* ボタンの境界線 */
font-weight: bold;
color: #000000;
letter-spacing: 0.3em; /* 文字間のスペース */
}

</style>

<div id="worp">

<form method="get" action="#" class="search">

<div>
<input type="text" name="example" class="textBox"><input type="submit" value="検索" class="btn">
</div>

</form>


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
