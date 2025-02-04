<section>
  <div class="container">
    <div class="row">
      <!-- Citati -->
      <div class="col-md-6">
        <div class="jumbotron" style="height: 100%; background-color: white; display: flex; flex-direction: column; justify-content: space-between;">
          <h2>Citati</h2>
          <blockquote>
            <p id="citat">"Umetnost nije ono što vidimo, već ono što omogućujemo drugima da vide."</p>
            <small><cite id="author">Edgar Degas</cite></small>
          </blockquote>
          <!-- Slika slikara ispod citata -->
          <div class="text-center" style="flex-grow: 1;">
            <img src="img/janos2.jpg" alt="Portret slikara" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
          </div>

          <script>
            // Lista citata i autora
            const citati = [
              {
                tekst: '"Umetnost nije ono što vidimo, već ono što omogućujemo drugima da vide."',
                autor: 'Edgar Degas'
              },
              {
                tekst: '"Umetnost je laž koja nas tera da prepoznamo istinu."',
                autor: 'Pablo Picasso'
              },
              {
                tekst: '"Umjetnost je hrabro izražavanje osećanja bez reči."',
                autor: 'Leo Tolstoy'
              },
              {
                tekst: '"Umetnost je najlepši način da doživimo svet izvan naših granica."',
                autor: 'Claude Monet'
              },
              {
                tekst: '"Svaka umetnost je uzvišeni oblik preživljavanja."',
                autor: 'Albert Einstein'
              },
              {
                tekst: '"Jedini način da naučimo umetnost je da je volimo."',
                autor: 'John Lennon'
              }
            ];

            // Funkcija koja menja citat svakih 5 sekundi
            let trenutniCitat = 0;
            function promeniCitat() {
              trenutniCitat = (trenutniCitat + 1) % citati.length;
              document.getElementById("citat").innerText = citati[trenutniCitat].tekst;
              document.getElementById("author").innerText = citati[trenutniCitat].autor;
            }

            // Pokretanje promene citata svakih 3 sekundi
            setInterval(promeniCitat, 3000); // 3000 ms = 3 sekunde
          </script>
        </div>
      </div>

      <!-- Završne obrade umetničkih dela -->
      <div class="col-md-6">
        <div class="jumbotron" style="height: 100%; background-color: white; display: flex; flex-direction: column;">
          <h2 class="display-4">Ulepšajte Svoj Prostor Jedinstvenim Umjetničkim Delima</h2>
          <p class="lead">Otkrijte savršen spoj umetnosti i dekoracije!</p>
          <hr class="my-4">
          <p>Naša galerija nudi autentična umetnička dela koja će transformisati vaš prostor. Svaka slika je pažljivo odabrana i kreirana od strane talentovanih umetnika, pružajući jedinstven estetski doživljaj...</p>
          <p class="lead">
            <a class="btn btn-danger btn-lg" href="galerija.php" role="button">Pogledajte Naša Dela</a>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
