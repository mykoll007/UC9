<?php
// Fazendo a requisição à API
$ch = curl_init("http://localhost/UC9/API_RickAndMorty/api.json"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decodificando a resposta JSON
$characters = [];
if ($response) {
    $data = json_decode($response, true);
    if (isset($data['results'])) {
        $characters = $data['results'];
    } else {
        echo "A chave 'results' não foi encontrada.";
    }
} else {
    echo "Erro ao fazer a requisição: " . curl_error($ch);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Personagens de Rick and Morty</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<h1>Personagens de Rick and Morty</h1>
<ul>
    <?php if (!empty($characters)): ?>
        <?php foreach ($characters as $character): ?>
            <li>
            <img src="<?php echo htmlspecialchars($character['image']); ?>" alt="<?php echo htmlspecialchars($character['name']); ?>">
                <strong>Nome:</strong> <?php echo htmlspecialchars($character['name']); ?><br>
                <strong>Status:</strong> <?php echo htmlspecialchars($character['status']); ?><br>
                <strong>Espécie:</strong> <?php echo htmlspecialchars($character['species']); ?><br>
                
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum personagem encontrado.</p>
    <?php endif; ?>
</ul>

</body>
</html>
