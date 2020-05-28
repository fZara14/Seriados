
<?php 
function getAddress(){
    
    

if (isset ($_POST['nomefilme'])){
    $filme = $_POST['nomefilme'];
    
    $address = getAddressomdbapi($filme);
    $respostas = (object)[
        'Title' => $address->name,
        'Year' => $address->premiered,
        'Type' => $address->genres[0],
        'Poster' => $address->image->original
    ];
 
}else {
    $respostas = addressEmpty();
   
}


return $respostas;
}

function addressEmpty(){
    return (object)[
        'Title' => '',
        'Year' => '',
        'Type' => '',
        'Poster' => ''
    ];
}

function getAddressomdbapi(String $filme){
    $url = "http://api.tvmaze.com/singlesearch/shows?q='{$filme}'";
    return json_decode(file_get_contents($url));

  
}