
<div class="m" id="history-list">
        <div class="mt">
                <!--<h2>浏览<font color="red">手机</font>最终购买</h2>-->
                <h2>浏览历史</h2>
        </div>
        <div class="mc">
                <ul class="goods">
                    <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                </ul>
        </div>
</div>
<script type="text/javascript">
    if($('#history-list .goods').html().replace(/\s/g,'').length<1){
        $('#history-list').hide();
    }
    function clear_history(){
        $.get('user.php',{"act":"clear_history"},function(data){
            $('#history-list .mc').html('没有相关浏览历史。');
        },'html');
        return false;
    }
</script>