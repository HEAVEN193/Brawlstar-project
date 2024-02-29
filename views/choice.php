<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sélection des Brawlers</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .brawler-id {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Choisissez une émotion</h2>
    <label><input type="checkbox" name="emotion" value="heureux"> Heureux</label>
    <label><input type="checkbox" name="emotion" value="triste"> Triste</label>
    <!-- Ajoutez d'autres émotions ici -->

    <button onclick="getSelectedBrawlers()">Voir les IDs des Brawlers sélectionnés</button>

    <div id="selectedBrawlers" class="brawler-id"></div>
</div>

<script>
    // Votre JSON ici
    const data = [
        {
            "emotions": {
                "heureux": [16000042, 16000064],
                "triste": [16000047, 16000032],
                // Ajoutez d'autres émotions ici
            }
        },
        // Ajoutez d'autres catégories ici
    ];

    function getSelectedBrawlers() {
        const selectedEmotions = document.querySelectorAll('input[name="emotion"]:checked');
        let selectedBrawlers = [];

        selectedEmotions.forEach(emotion => {
            const brawlers = data[0].emotions[emotion.value];
            if (brawlers) {
                selectedBrawlers = [...selectedBrawlers, ...brawlers];
            }
        });

        document.getElementById('selectedBrawlers').innerText = 'Brawlers sélectionnés: ' + [...new Set(selectedBrawlers)].join(', ');
    }
</script>

</body>
</html>
