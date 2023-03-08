<meta charset="utf-8">
<?php

&id=$_POST["id"];
&name=$_POST["name"];
&yesno=$_POST["yesno"];
&join=$_POST["join"];
echo "你的學號是:".&id."<br/>";
echo "你的名字是:".&name."<br/>";

if(&yesno=="y"){
    echo "感謝你的繳交</br>";
}else{
    echo "快點去交啦</br>";
}

if(&join=="in"){
    echo "感謝你的參加</br>";
}else{
    echo "給我來喔</br>";
}
?>