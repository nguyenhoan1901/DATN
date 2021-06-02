<?php
include('tool.php');
use App\Models\Config;

function _config($key, $value = '', $desc = '')
{
    if (!$key) {
        return '';
    }
    $config = Config::where('key', $key)->first();
    if (!$config) {
        $config = new Config();
        $config->key = $key;
        $config->desc = $desc;
        $config->detail = $value;
        $config->save();
    }
    return $config->detail;
}

function _hocKy(){
    return array(
        1=>'Học kỳ 1',
        2=>'Học kỳ phụ kỳ 1',
        3=>'Học kỳ 2',
        4=>'Học kỳ phụ kỳ 2',
        5=>'Học kỳ 3',
        6=>'Học kỳ phụ kỳ 3',
        7=>'Học kỳ 4',
        8=>'Học kỳ phụ kỳ 4',
        9=>'Học kỳ 5',
        10=>'Học kỳ phụ kỳ 5',
        11=>'Học kỳ 6',
        12=>'Học kỳ phụ kỳ 6',
        13=>'Học kỳ 7',
        14=>'Học kỳ phụ kỳ 7',
        15=>'Học kỳ 8',
        16=>'Học kỳ phụ kỳ 8',
        17=>'Học kỳ 9',
        18=>'Học kỳ phụ kỳ 9',
        19=>'Học kỳ 10',
        20=>'Học kỳ phụ kỳ 10',
    );
}
function _trangthai(){
    return array(
      0=>'Lưu nháp',
      1=>'Chờ duyệt',
      2=>'Đã duyệt',
    );
}

?>
