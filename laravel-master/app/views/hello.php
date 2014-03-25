<?php 
if(isset($_GET['url']) && !empty($_GET['url'])){
$shortened = base_convert(rand(10000,99999), 10, 36);
echo $shortened;
DB::table('authors')->insert(
    array('url' => $_GET['url'], 'shortened' => $shortened)
);
}
?>