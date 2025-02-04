<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #ffd700;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #333333;"><i class="fas fa-home"></i> Početna strana</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="onama.php" style="color: #333333;"><i class="fas fa-info-circle"></i> O nama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usluge.php" style="color: #333333;"><i class="fas fa-palette"></i> Usluge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="saveti.php" style="color: #333333;"><i class="fas fa-lightbulb"></i> Saveti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php" style="color: #333333;"><i class="fas fa-phone-flip"></i> Kontakt</a>
                    </li>

                    <!-- Deo sa padajućim menijem Galerija -->
                    <nav class="menu">
                    <ul>
                    <li class="dropdown">
                          <a href="galerija.php"><i class="fas fa-image"></i>Galerija</a>
                          <ul class="dropdown-content">
                              <li><a href="galerija.php#ulje-na-platnu">Ulje na platnu</a></li>
                              <li><a href="galerija.php#voda-i-akvarel">Voda i akvarel</a></li>
                              <li><a href="galerija.php#grafika">Grafika</a></li>
                              <li><a href="galerija.php#pastel">Pastel</a></li>
                          </ul>
                      </li>

                    </ul>
                  </nav>


              </ul>
                
                <!-- Polje za pretragu -->
                <form class="d-flex" role="search" style="display: flex; align-items: center;">
                    <input class="form-control me-2" type="search" placeholder="Pretražite" aria-label="Search" style="width: 200px;">
                    <button class="btn btn-outline-success" type="submit" style="color: #333333; border-color: #ffd700; background-color: #ffd700;">
                        Pretraga
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>

<!-- Stilovi za hover efekte -->
<style>
    /* Hover efekat za linkove u navigaciji */
    .navbar .nav-link:hover, .dropdown-item:hover {
        color: #ffffff !important;
        background-color: #ff7f50 !important;
    }
    
    /* Hover efekat za dugme za pretragu */
    .btn-outline-success:hover {
        background-color: #ff7f50 !important;
        color: #ffffff !important;
    }




</style>