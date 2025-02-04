<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija proizvoda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 20px;
    width: 100%;
    box-sizing: border-box; /* Osigurava da padding ne utiče na širinu */
}

/* Podesite logo */
header .logo {
    width: 50px; /* Širina loga, prilagodite po želji */
    height: auto; /* Automatski visina loga */
    margin-right: 20px; /* Razmak između loga i naslova */
}

/* Podesite naslov */
header h1 {
    font-size: 2em;
    margin: 0; /* Uklonite podrazumevani razmak oko naslova */
    color: #333;
    text-align: left; /* Osigurajte da naslov bude levo */
}


header h1 {
    font-size: 2em;
    margin: 0;
    color: #333;
}


        h1 {
            color: #333;
            margin-top: 20px;
        }

        h2 {
            color: #555;
            margin-top: 40px;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            width: 180px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .gallery-item .description {
            padding: 10px;
        }

        .gallery-item .name {
            font-weight: bold;
            color: #333;
        }

        .gallery-item .price {
            color: #28a745;
            font-size: 1.2em;
            margin-top: 5px;
        }

        .contact-info {
            margin: 20px 0;
            font-size: 1.1em;
            color: #555;
        }

        .contact-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .contact-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Svi proizvodi su dostupni</h1>
    <p class="contact-info">Za dodatne informacije, pozovite nas na:<i class="fas fa-phone-flip"></i> +381 64 1234567</p>

    <!-- Ulje na platnu sekcija -->
    <h2 id="ulje-na-platnu">Ulje na platnu</h2>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 1"><div class="description"><p class="name">Proizvod 1</p><p class="price">€100</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 2"><div class="description"><p class="name">Proizvod 2</p><p class="price">€120</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 3"><div class="description"><p class="name">Proizvod 3</p><p class="price">€150</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 4"><div class="description"><p class="name">Proizvod 4</p><p class="price">€180</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 5"><div class="description"><p class="name">Proizvod 5</p><p class="price">€200</p></div></div>
    </div>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 6"><div class="description"><p class="name">Proizvod 6</p><p class="price">€210</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 7"><div class="description"><p class="name">Proizvod 7</p><p class="price">€220</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 8"><div class="description"><p class="name">Proizvod 8</p><p class="price">€230</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 9"><div class="description"><p class="name">Proizvod 9</p><p class="price">€240</p></div></div>
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 10"><div class="description"><p class="name">Proizvod 10</p><p class="price">€250</p></div></div>
    </div>

    <!-- Voda i akvarel sekcija -->
    <h2 id="voda-i-akvarel">Voda i akvarel</h2>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 11"><div class="description"><p class="name">Proizvod 11</p><p class="price">€260</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 12"><div class="description"><p class="name">Proizvod 12</p><p class="price">€270</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 13"><div class="description"><p class="name">Proizvod 13</p><p class="price">€280</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 14"><div class="description"><p class="name">Proizvod 14</p><p class="price">€290</p></div></div>
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 15"><div class="description"><p class="name">Proizvod 15</p><p class="price">€300</p></div></div>
    </div>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 16"><div class="description"><p class="name">Proizvod 16</p><p class="price">€310</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 17"><div class="description"><p class="name">Proizvod 17</p><p class="price">€320</p></div></div>
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 18"><div class="description"><p class="name">Proizvod 18</p><p class="price">€330</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 19"><div class="description"><p class="name">Proizvod 19</p><p class="price">€340</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 20"><div class="description"><p class="name">Proizvod 20</p><p class="price">€350</p></div></div>
    </div>

    <!-- Grafika sekcija -->
    <h2 id="grafika">Grafika</h2>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 21"><div class="description"><p class="name">Proizvod 21</p><p class="price">€360</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 22"><div class="description"><p class="name">Proizvod 22</p><p class="price">€370</p></div></div>
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 23"><div class="description"><p class="name">Proizvod 23</p><p class="price">€380</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 24"><div class="description"><p class="name">Proizvod 24</p><p class="price">€390</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 25"><div class="description"><p class="name">Proizvod 25</p><p class="price">€400</p></div></div>
    </div>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 26"><div class="description"><p class="name">Proizvod 26</p><p class="price">€410</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 27"><div class="description"><p class="name">Proizvod 27</p><p class="price">€420</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 28"><div class="description"><p class="name">Proizvod 28</p><p class="price">€430</p></div></div>
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 29"><div class="description"><p class="name">Proizvod 29</p><p class="price">€440</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 30"><div class="description"><p class="name">Proizvod 30</p><p class="price">€450</p></div></div>
    </div>

    <!-- Pastel sekcija -->
    <h2 id="pastel">Pastel</h2>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 31"><div class="description"><p class="name">Proizvod 31</p><p class="price">€460</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 32"><div class="description"><p class="name">Proizvod 32</p><p class="price">€470</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 33"><div class="description"><p class="name">Proizvod 33</p><p class="price">€480</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 34"><div class="description"><p class="name">Proizvod 34</p><p class="price">€490</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 35"><div class="description"><p class="name">Proizvod 35</p><p class="price">€500</p></div></div>
    </div>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/slika1.jpg" alt="Proizvod 36"><div class="description"><p class="name">Proizvod 36</p><p class="price">€510</p></div></div>
        <div class="gallery-item"><img src="img/slika2.jpg" alt="Proizvod 37"><div class="description"><p class="name">Proizvod 37</p><p class="price">€520</p></div></div>
        <div class="gallery-item"><img src="img/slika3.jpg" alt="Proizvod 38"><div class="description"><p class="name">Proizvod 38</p><p class="price">€530</p></div></div>
        <div class="gallery-item"><img src="img/slika4.jpg" alt="Proizvod 39"><div class="description"><p class="name">Proizvod 39</p><p class="price">€540</p></div></div>
        <div class="gallery-item"><img src="img/slika5.jpg" alt="Proizvod 40"><div class="description"><p class="name">Proizvod 40</p><p class="price">€550</p></div></div>
    </div>

    <a href="kontakt.php" class="contact-button">Kontaktirajte nas</a>

</body>
</html>
