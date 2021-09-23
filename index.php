<?php
// これはPHPの配列
$hoge_array = ['PHP', 'JS', 'Rust', 'COBOL'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<script language="JavaScript">
    
    function foc() {    //テキストエリア内が初期文字列の場合　クリア
        if(document.form1.text1.value == document.form1.text1.defaultValue) {
            document.form1.text1.value = "";
        }
    }
    
    </script>
	<meta charset="UTF-8" />
	<link
      rel="stylesheet"
      href="sample.css"
    />
	<form action="create.php" method="POST">
		
			<h2>
				DEKIRU
			</h2>
	
		<div>
		<label for="problem">カテゴリー:  </label>
          <select class="form-control" name="deadline">
            <option>農業系</option>
            <option>家電系</option>
            <option>教育系</option>
            <option>etc</option>
          </select>
		</div>
		
		<div>
		<textarea type="text" name="todo" id="" cols="30" rows="10" maxlength="128" onclick="this.value=''; return false">悩み事: </textarea>
		</div>
		<div>
			<button>submit</button>
		</div>
	</form>
</head>
</html>