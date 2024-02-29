<div class="container-brawler-box">
<?php
foreach ($allBrawlers as $brawler) {
    $rarityClass = strtolower(str_replace(' ', '-', $brawler->rarity->name));

    echo '<div class="brawler-box">';
    echo '<img class="brawler-image ' . $rarityClass . '" src="' . $brawler->imageUrl . '">';
    echo '<p class="brawler-name">' . $brawler->name . '</p>';
    echo '<p class="brawler-rarity">' . $brawler->rarity->name . '</p>';
    
    foreach ($brawler->starPowers as $starPower) {
        echo '<div class="brawler-ability">';
        echo '<img src="' . $starPower->imageUrl . '">';
        echo '<span>' . $starPower->name . '</span>';
        echo '</div>';
    }
    
    foreach ($brawler->gadgets as $gadget) {
        echo '<div class="brawler-ability">';
        echo '<img src="' . $gadget->imageUrl .'">';
        echo '<span>' . $gadget->name . '</span>';
        echo '</div>';
    }
    
    echo '</div>'; 
}
?>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    body{
        background-color: #333;
    }
    .container-brawler-box {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
        
    }

    .brawler-box {
        background-color: #222; 
        color: #fff; 
        border-radius: 10px; 
        padding: 10px;
        margin: 10px;
        width: 220px; 
        box-shadow: 0 4px 6px rgba(0,0,0,1); 
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding-bottom: 20px;
    }

    .brawler-image {
        width: 100%;
        height: auto;
        border-radius: 8px; /* Coins arrondis pour les images */
    }

    .brawler-name, .brawler-rarity, .brawler-ability span {
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        text-align: center; 
        padding-left: 10px;

    }

    .brawler-rarity {
        padding-left: 10px;

        color: #f88f25; /* Couleur maintenue pour la rareté */
    }

    .brawler-ability {
        display: flex;
        padding-left: 10px;
        align-items: center;
        width: 100%;
        margin-top: 5px;
    }

    .brawler-ability img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .rare {
    border: 3px solid green;
}

    .super-rare {
        border: 3px solid #008dff;
    }

    .legendary {
        border: 3px solid #f88f25;
    }

    .mythic {
        border: 3px solid red;
    }

    .epic {
        border: 3px solid #a64dff; 
    }
</style>